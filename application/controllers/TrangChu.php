<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TrangChu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('TaiKhoan')){
			return redirect(base_url('dang-nhap/'));
		}
		$this->load->model('Model_TrangChu');
	}

	public function index()
	{
		$data['title'] = "Trang chủ quản trị";
		$data['countPhong'] = $this->Model_TrangChu->getCountPhong();
		$data['countLoaiPhong'] = $this->Model_TrangChu->getCountLoaiPhong();
		$data['countThietBi'] = $this->Model_TrangChu->getCountThietBi();
		$data['countNhanVien'] = $this->Model_TrangChu->getCountNhanVien();
		return $this->load->view('View_TrangChu', $data);
	}

}

/* End of file TrangChu.php */
/* Location: ./application/controllers/TrangChu.php */