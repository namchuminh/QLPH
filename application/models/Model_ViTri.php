<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_ViTri extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getAll(){
		return $this->db->query('SELECT * FROM vitriphong ORDER BY MaViTriPhong DESC')->result_array();
	}

	public function getById($MaViTriPhong){
		return $this->db->query('SELECT * FROM vitriphong WHERE MaViTriPhong = ?', array($MaViTriPhong))->result_array();
	}

	public function update($mavitriphong, $toanha, $tang, $coso){
		return $this->db->query('UPDATE vitriphong SET mavitriphong = ?, toanha = ?, tang = ?, coso = ? WHERE mavitriphong = ?', array($mavitriphong, $toanha, $tang, $coso, $mavitriphong));
	}

	public function insert($mavitriphong, $toanha, $tang, $coso){
		return $this->db->query('INSERT INTO `vitriphong`(`mavitriphong`, `toanha`, `tang`, `coso`) VALUES (?, ?, ?, ?)', array($mavitriphong, $toanha, $tang, $coso));
	}

	public function delete($mavitriphong){
		return $this->db->query('DELETE FROM `vitriphong` WHERE mavitriphong = ?', array($mavitriphong));
	}

}

/* End of file Model_ViTri.php */
/* Location: ./application/models/Model_ViTri.php */