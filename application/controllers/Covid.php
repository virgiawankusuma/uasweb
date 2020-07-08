<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH."/third_party/PHPExcel.php";
require_once APPPATH."/third_party/PHPExcel/IOFactory.php";

class Covid extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_covid');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['judul'] = 'Jepara Tanggap COVID19';
		$data['ikidata'] = $this->M_covid->getData();
		$this->load->view('covid_home', $data);
	}

	public function dashboard()
	{	
		$data['user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();

		if ($data['user'] == null) {
            $this->session->set_flashdata('validlogin', 'Anda belum login!');
            redirect('covid/login','refresh');
        }else{
			$data['judul'] = 'Dashboard - Jepara Tanggap COVID19';
			$data['ikidata'] = $this->M_covid->getData();
			$data['ikijumlah'] = $this->M_covid->getJumlah();
			$data['ikikecamatan'] = $this->M_covid->getKecamatan();

			$this->load->view('dashboard/header', $data);
			$this->load->view('dashboard/menu', $data);
			$this->load->view('covid_dashboard', $data);
			$this->load->view('dashboard/footer');
        }
	}

	public function login()
	{
		$data['user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['judul'] = 'Login - Jepara Tanggap COVID19';

		if ($data['user'] == null) {
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			if(!$this->form_validation->run()){
				$this->load->view('dashboard/header', $data);
				$this->load->view('covid_login', $data);
				$this->load->view('dashboard/footer');
			}else{
				// validasi sukses
				$this->_login();
			}
		}else{
			redirect('covid/dashboard','refresh');
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('tbl_user', ['username' => $username])->row_array();
		$p = $user['password'];

		if ($user) {
			if (md5($password) == $p){
				$data = [
					'username' => $user['username'],
					'iduser' => $user['iduser']
				];
				$this->session->set_userdata($data);
				redirect('covid/dashboard');
			}else{
				$this->session->set_flashdata('validlogin', 'Password salah!');
				redirect('covid/login');
			}
		} else {
				$this->session->set_flashdata('validlogin', 'Username tidak terdaftar!');
				redirect('covid/login');
		}
		
	}

	public function logout()
	{
		// $this->session->sess_destroy();
		// redirect('user/login', 'refresh');
		$this->session->unset_userdata('username');
		$this->session->set_flashdata('logout', 'Anda telah logout');
        redirect('covid/login');
	}

	// CRUD

	// Insert
	public function add()
	{	
		$this->form_validation->set_rules('kecamatan', 'kecamatan', 'trim|is_unique[tbl_covid.kecamatan]');
		if (!$this->form_validation->run()) {
			$this->session->set_flashdata('gagal', 'ditambahkan! karena kecamatan yang anda pilih sudah tidak tersedia');
			redirect('covid/dashboard');die();
		}else{
			$data = array(
				'kecamatan' => $this->input->post('kecamatan'),
				'pp' => htmlspecialchars($this->input->post('pp')),
				'odp' => htmlspecialchars($this->input->post('odp')),
				'pdp' => htmlspecialchars($this->input->post('pdp')),
				'otg' => htmlspecialchars($this->input->post('otg')),
				'positif' => htmlspecialchars($this->input->post('positif')), 
				'date' => time()
			);
			$this->_insert($data);
		}
	}

	private function _insert($data)
	{
		$this->db->insert('tbl_covid', $data);
		$this->session->set_flashdata('flash', 'ditambahkan');
		redirect('covid/dashboard');
	}
	
	// public function getid()
	// {
	// 	$id = $this->uri->segment(3);
	// }

	//Update
	public function update()
	{	
		$data = array(
			'kecamatan' => $this->input->post('kecamatan'),
			'pp' => htmlspecialchars($this->input->post('pp')),
			'odp' => htmlspecialchars($this->input->post('odp')),
			'pdp' => htmlspecialchars($this->input->post('pdp')),
			'otg' => htmlspecialchars($this->input->post('otg')),
			'positif' => htmlspecialchars($this->input->post('positif')), 
			'date' => time()
		);
		$this->_update($data);
	}

	private function _update($data)
	{
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('tbl_covid',$data);
		$this->session->set_flashdata('flash', 'diubah');
		redirect('covid/dashboard');
	}
	
	//Delete
	public function delete()
	{	
		$id = $this->uri->segment(3);
		$this->db->where('id', $id)->delete('tbl_covid');
		$this->session->set_flashdata('flash', 'dihapus');
		redirect('covid/dashboard');
	}
	
	public function import()
	{
		$fileName  = $_FILES['file']['name'];
		$config = array(
			'upload_path' => './assets/fileupload/',
			'allowed_types' => 'xls|xlsx|csv',
			'max_size' => 10000 
		);
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('file')) {
			$this->upload->display_errors();
			redirect('covid/dashboard','refresh'); die();
		}

		$inputFileName = './assets/fileupload/'.$fileName;

		try {
			$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
			$objReader = PHPExcel_IOFactory::createReader($inputFileType);
			$objPHPExcel = $objReader->load($inputFileName);
		} catch (Exception $e) {
			die('error');
		}

		$sheet = $objPHPExcel->getSheet(0);
		$highestRow = $sheet->getHighestRow();
		$highestColumn = $sheet->getHighestColumn();

		for ($row = 2; $row <= $highestRow; $row++){
			$rowData = $sheet->rangeToArray('A'.$row.':'.$highestColumn.$row, NULL, TRUE, FALSE);
			$data = array(
				'id' => $rowData[0][0],
				'kecamatan' => strtolower($rowData[0][1]),
				'pp' => $rowData[0][2],
				'odp' => $rowData[0][3],
				'pdp' => $rowData[0][4],
				'otg' => $rowData[0][5],
				'positif' => $rowData[0][6],
				'date' => time()
			);
			$this->db->insert('tbl_covid', $data);
		}
		redirect('covid/dashboard','refresh');
	}

}

/* End of file Covid.php */
/* Location: ./application/controllers/Covid.php */