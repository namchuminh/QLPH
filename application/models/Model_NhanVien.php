<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_NhanVien extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	public function getAll(){
		return $this->db->query('SELECT * FROM quanlyphong ORDER BY MaQuanLyPhong DESC')->result_array();
	}

	public function getById($MaQuanLyPhong){
		return $this->db->query('SELECT * FROM quanlyphong WHERE MaQuanLyPhong = ?', array($MaQuanLyPhong))->result_array();
	}

	public function update($manhanvien, $tennhanvien, $diachi, $sodienthoai,$chucvu){
		return $this->db->query('UPDATE quanlyphong SET MaQuanLyPhong = ?, TenQuanLyPhong = ?, diachi = ?, sodienthoai = ?, chucvu = ? WHERE MaQuanLyPhong = ?', array($manhanvien, $tennhanvien, $diachi, $sodienthoai, $chucvu, $manhanvien));
	}

	public function insert($manhanvien, $tennhanvien, $diachi, $sodienthoai,$chucvu){
		return $this->db->query('INSERT INTO `quanlyphong`(`MaQuanLyPhong`, `TenQuanLyPhong`, `diachi`, `sodienthoai`, `chucvu`) VALUES (?, ?, ?, ?, ?)', array($manhanvien, $tennhanvien, $diachi, $sodienthoai,$chucvu));
	}

	public function insert_phong($MaPhongHoc, $MaQuanLyPhong){
		return $this->db->query('INSERT INTO `phong_quanlyphong`(`MaPhongHoc`, `MaQuanLyPhong`) VALUES (?, ?)', array($MaPhongHoc, $MaQuanLyPhong));
	}

	public function delete($manhanvien){
		return $this->db->query('DELETE FROM `quanlyphong` WHERE MaQuanLyPhong = ?', array($manhanvien));
	}

	public function deletePhong($manhanvien){
		return $this->db->query('DELETE FROM `phong_quanlyphong` WHERE MaQuanLyPhong = ?', array($manhanvien));
	}

	public function getNhanVienPhongById($manhanvien, $maphonghoc){
		return $this->db->query('SELECT * FROM `phong_quanlyphong` WHERE MaQuanLyPhong = ? AND MaPhongHoc = ?', array($manhanvien, $maphonghoc))->result_array();
	}
}

/* End of file Model_LoaiPhong.php */
/* Location: ./application/models/Model_LoaiPhong.php */