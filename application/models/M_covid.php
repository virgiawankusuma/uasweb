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
		$q = $this->db->query('SELECT SUM(pp) AS totalpp, SUM(odp) AS totalodp, SUM(pdp) AS totalpdp, SUM(otg) AS totalotg, SUM(positif) AS totalpositif FROM tbl_covid');
		$r = $q->result();
		$q->free_result();
		return $r;
	}
}

/* End of file M_covid.php */
/* Location: ./application/models/M_covid.php */