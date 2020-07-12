<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_covid extends CI_Model {

	public function getData()
	{
		$q = $this->db->get('tbl_covid');
		$r = $q->result();
		$q->free_result();
		return $r;
	}

	public function getKecamatan()
	{
		$q = $this->db->get('tbl_kecamatan');
		$r = $q->result();
		$q->free_result();
		return $r;
	}

	public function getJumlah()
	{
		$q = $this->db->query('SELECT SUM(pp) AS totalpp, SUM(odp) AS totalodp, SUM(pdp) AS totalpdp, SUM(otg) AS totalotg, SUM(positif) AS totalpositif, MAX(date) AS terbaru FROM tbl_covid');
		$r = $q->result();
		$q->free_result();
		return $r;
	}

	public function getTgl()
	{	
		$tgl = $this->uri->segment(3);
		$bln = $this->uri->segment(4);
		$q = $this->db->like('date', $tgl, 'after')->like('date', $bln, 'both')->get('tbl_covid');
		$r = $q->result();
		$q->free_result();
		return $r;
	}

	public function getJumlahtgl()
	{
		$tgl = $this->uri->segment(3);
		$bln = $this->uri->segment(4);
		// $q = $this->db->query('SELECT SUM(pp) AS totalpp, SUM(odp) AS totalodp, SUM(pdp) AS totalpdp, SUM(otg) AS totalotg, SUM(positif) AS totalpositif FROM tbl_covid')->like('date', $tgl, 'after')->like('date', $bln, 'both');
		// $q = $this->db->query('SELECT SUM(pp) AS totalpp, SUM(odp) AS totalodp, SUM(pdp) AS totalpdp, SUM(otg) AS totalotg, SUM(positif) AS totalpositif FROM tbl_covid WHERE date LIKE "11%" AND date LIKE "%$jun%"');
		
		$q = $this->db->select('date')->select_sum('pp', 'totalpp')->select_sum('odp', 'totalodp')->select_sum('pdp', 'totalpdp')->select_sum('otg', 'totalotg')->select_sum('positif', 'totalpositif')->like('date', $tgl, 'after')->like('date', $bln, 'both')->get('tbl_covid');
		$r = $q->result();
		$q->free_result();
		return $r;
	}
}

/* End of file M_covid.php */
/* Location: ./application/models/M_covid.php */