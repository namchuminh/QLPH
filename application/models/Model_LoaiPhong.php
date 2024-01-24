<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_LoaiPhong extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getAll(){
		return $this->db->query('SELECT * FROM loaiphong ORDER BY MaLoaiPhong DESC')->result_array();
	}

	public function getById($MaLoaiPhong){
		return $this->db->query('SELECT * FROM loaiphong WHERE MaLoaiPhong = ?', array($MaLoaiPhong))->result_array();
	}

	public function update($maloaiphong, $tenloaiphong, $mota){
		return $this->db->query('UPDATE loaiphong SET maloaiphong = ?, tenloaiphong = ?, mota = ? WHERE maloaiphong = ?', array($maloaiphong, $tenloaiphong, $mota, $maloaiphong));
	}

	public function insert($maloaiphong, $tenloaiphong, $mota){
		return $this->db->query('INSERT INTO `loaiphong`(`maloaiphong`, `tenloaiphong`, `mota`) VALUES (?, ?, ?)', array($maloaiphong, $tenloaiphong, $mota));
	}

	public function delete($maloaiphong){
		return $this->db->query('DELETE FROM `loaiphong` WHERE maloaiphong = ?', array($maloaiphong));
	}
}

/* End of file Model_LoaiPhong.php */
/* Location: ./application/models/Model_LoaiPhong.php */