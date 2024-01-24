<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_TrangChu extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	
	public function getCountPhong(){
		return $this->db->query("SELECT COALESCE(COUNT(*), 0) AS tongso FROM phonghoc")->result_array();
	}

	public function getCountLoaiPhong(){
		return $this->db->query("SELECT COALESCE(COUNT(*), 0) AS tongso FROM loaiphong")->result_array();
	}

	public function getCountThietBi(){
		return $this->db->query("SELECT COALESCE(COUNT(*), 0) AS tongso FROM thietbiphong")->result_array();
	}

	public function getCountNhanVien(){
		return $this->db->query("SELECT COALESCE(COUNT(*), 0) AS tongso FROM quanlyphong")->result_array();
	}
}

/* End of file Model_TrangChu.php */
/* Location: ./application/models/Model_TrangChu.php */