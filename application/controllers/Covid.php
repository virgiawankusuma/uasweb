<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH."/third_party/PHPExcel.php";
require_once APPPATH."/third_party/PHPExcel/IOFactory.php";
require_once APPPATH."/third_party/PHPExcel/Writer/Excel2007.php";

class Covid extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_covid');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data = array(
			'judul' => 'Jepara Tanggap COVID-19', 
			'ikidata' => $this->M_covid->getData(),
			'ikijumlah' => $this->M_covid->getJumlah()
		);
		$this->load->view('covid_home', $data);
	}

	public function dashboard()
	{	
		$data['user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();

		if ($data['user'] == null) {
            $this->session->set_flashdata('validlogin', 'Anda belum login!');
            redirect('covid/login','refresh');
        }else{
			$data['judul'] = 'Dashboard - Jepara Tanggap COVID-19';
			$data['ikidata'] = $this->M_covid->getData();
			$data['ikitgl'] = $this->M_covid->getTgl();
			$data['ikijumlah'] = $this->M_covid->getJumlah();
			$data['ikijumlahtgl'] = $this->M_covid->getJumlahtgl();
			$data['ikikecamatan'] = $this->M_covid->getKecamatan();

			$this->load->view('template/header', $data);
			$this->load->view('template/menu', $data);
			$this->load->view('covid_dashboard', $data);
			$this->load->view('template/footer');
        }
	}

	public function login()
	{
		$data['user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['judul'] = 'Login - Jepara Tanggap COVID-19';

		if ($data['user'] == null) {
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			if(!$this->form_validation->run()){
				$this->load->view('template/header', $data);
				$this->load->view('covid_login', $data);
				$this->load->view('template/footer');
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
		$this->session->unset_userdata('username');
		$this->session->set_flashdata('logout', 'Anda telah logout');
        redirect('covid/login');
	}


	// ############### CRUD ###############

	// Insert
	public function add()
	{	
		// $this->form_validation->set_rules('kecamatan', 'kecamatan', 'trim|is_unique[tbl_covid.kecamatan]');
		// if (!$this->form_validation->run()) {
		// 	$this->session->set_flashdata('gagal', 'gagal ditambahkan');
		// 	redirect('covid/dashboard');
		// }else{
		// 	$data = array(
		// 		'kecamatan' => $this->input->post('kecamatan'),
		// 		'pp' => htmlspecialchars($this->input->post('pp')),
		// 		'odp' => htmlspecialchars($this->input->post('odp')),
		// 		'pdp' => htmlspecialchars($this->input->post('pdp')),
		// 		'otg' => htmlspecialchars($this->input->post('otg')),
		// 		'positif' => htmlspecialchars($this->input->post('positif')),
		// 		'date' => htmlspecialchars($this->input->post('tanggal'))
		// 		'date' => time()
		// 	);
		// 	$this->_insert($data);
		// }	
		$this->form_validation->set_rules('kecamatan', 'kecamatan', 'trim|required');
		if (!$this->form_validation->run()) {
			$this->session->set_flashdata('gagal', 'gagal ditambahkan');
			redirect('covid/dashboard');
		}else{
			$data = array(
				'kecamatan' => $this->input->post('kecamatan'),
				'pp' => htmlspecialchars($this->input->post('pp')),
				'odp' => htmlspecialchars($this->input->post('odp')),
				'pdp' => htmlspecialchars($this->input->post('pdp')),
				'otg' => htmlspecialchars($this->input->post('otg')),
				'positif' => htmlspecialchars($this->input->post('positif')),
				'date' => htmlspecialchars($this->input->post('tanggal'))
				// 'date' => time()
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

	//Update
	public function update()
	{	
		// $this->form_validation->set_rules('kecamatan', 'kecamatan', 'trim|is_unique[tbl_covid.kecamatan]');
		// if (!$this->form_validation->run()) {
		// 	$this->session->set_flashdata('gagal', 'gagal diubah');
		// 	redirect('covid/dashboard');
		// }else{
		// 	$data = array(
		// 		'kecamatan' => $this->input->post('kecamatan'),
		// 		'pp' => htmlspecialchars($this->input->post('pp')),
		// 		'odp' => htmlspecialchars($this->input->post('odp')),
		// 		'pdp' => htmlspecialchars($this->input->post('pdp')),
		// 		'otg' => htmlspecialchars($this->input->post('otg')),
		// 		'positif' => htmlspecialchars($this->input->post('positif')), 
		// 		'date' => time()
		// 	);
		// 	$this->_update($data);
		// }
		$this->form_validation->set_rules('kecamatan', 'kecamatan', 'trim|required');
		if (!$this->form_validation->run()) {
			$this->session->set_flashdata('gagal', 'gagal ditambahkan');
			redirect('covid/dashboard');
		}else{
			$data = array(
				'kecamatan' => $this->input->post('kecamatan'),
				'pp' => htmlspecialchars($this->input->post('pp')),
				'odp' => htmlspecialchars($this->input->post('odp')),
				'pdp' => htmlspecialchars($this->input->post('pdp')),
				'otg' => htmlspecialchars($this->input->post('otg')),
				'positif' => htmlspecialchars($this->input->post('positif')),
				'date' => htmlspecialchars($this->input->post('tanggal'))
			);
			$this->_insert($data);
		}
	}

	private function _update($data)
	{	
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		if ($id == null) {
			$this->session->set_flashdata('gagal', 'yang diubah tidak ditemukan');
			redirect('covid/dashboard');
		}else{
			$this->db->update('tbl_covid',$data);
			$this->session->set_flashdata('flash', 'diubah');
			redirect('covid/dashboard');
		}
	}
	
	//Delete
	public function delete($id='')
	{	
		// $id = $this->uri->segment(3);
		$this->db->where('id', $id);
		if ($id == null) {
			$this->session->set_flashdata('gagal', 'yang dihapus tidak ditemukan');
			redirect('covid/dashboard');
		}else{
			$this->db->delete('tbl_covid');
			$this->session->set_flashdata('flash', 'dihapus');
			redirect('covid/dashboard');
		}
	}
	
	public function import()
	{
		$data['user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();

		if ($data['user'] == null) {
            $this->session->set_flashdata('validlogin', 'Anda belum login!');
            redirect('covid/login','refresh');
        }else{
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
				// die('error');
			}

			$sheet = $objPHPExcel->getSheet(0);
			$highestRow = $sheet->getHighestRow();
			$highestColumn = $sheet->getHighestColumn();

			for ($row = 2; $row <= $highestRow; $row++){
				$rowData = $sheet->rangeToArray('A'.$row.':'.$highestColumn.$row, NULL, TRUE, FALSE);
				$data = array(
					'id' => '',
					'kecamatan' => strtolower($rowData[0][1]),
					'pp' => $rowData[0][2],
					'odp' => $rowData[0][3],
					'pdp' => $rowData[0][4],
					'otg' => $rowData[0][5],
					'positif' => $rowData[0][6],
					'date' => $rowData[0][7]
					// 'date' => time()
				);
				$this->db->insert('tbl_covid', $data);
			}
			$this->session->set_flashdata('flash', 'diimport');
			redirect('covid/dashboard','refresh');
		}
	}

	public function export()
	{
		$ikidata = $this->M_covid->getData();

		$object = new PHPExcel();

		$object->getProperties()->setCreator('Virgiawan Teguh Kusuma');
		$object->getProperties()->setLastModifiedBy('Virgiawan Teguh Kusuma');
		$object->getProperties()->setTitle('Data Covid Jepara');

		$object->setActiveSheetIndex(0);
		$object->getActiveSheet()->setCellValue('A1', 'No');
		$object->getActiveSheet()->setCellValue('B1', 'Kecamatan');
		$object->getActiveSheet()->setCellValue('C1', 'PP');
		$object->getActiveSheet()->setCellValue('D1', 'ODP');
		$object->getActiveSheet()->setCellValue('E1', 'PDP');
		$object->getActiveSheet()->setCellValue('F1', 'OTG');
		$object->getActiveSheet()->setCellValue('G1', 'Positif');
		$object->getActiveSheet()->setCellValue('H1', 'Tanggal');

		$row = 2;
		$no = 1;
		foreach ($ikidata as $data => $d) {
			$object->getActiveSheet()->setCellValue('A'.$row, $no++);
			$object->getActiveSheet()->setCellValue('B'.$row, $d->kecamatan);
			$object->getActiveSheet()->setCellValue('C'.$row, $d->pp);
			$object->getActiveSheet()->setCellValue('D'.$row, $d->odp);
			$object->getActiveSheet()->setCellValue('E'.$row, $d->pdp);
			$object->getActiveSheet()->setCellValue('F'.$row, $d->otg);
			$object->getActiveSheet()->setCellValue('G'.$row, $d->positif);
			$object->getActiveSheet()->setCellValue('H'.$row, date('d M Y, h:i A', $d->date));

			$row++;
		}

		$filename = "Data_COVID-19_Jepara".'.xlsx';
		$object->getActiveSheet()->setTitle('Data COVID-19 Jepara');

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheet.sheet');
		header('Content-Disposition:attachment;filename="'.$filename.'"');
		header('Cache-Control: max-age=0');

		$writer = PHPExcel_IOFactory::createwriter($object, 'Excel2007');
		$writer->save('php://output');
	}

}

/* End of file Covid.php */
/* Location: ./application/controllers/Covid.php */