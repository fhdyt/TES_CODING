<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Admin');
		$this->load->model('LoginModel');
		$this->LoginModel->cek_login();
		$this->LoginModel->akses_admin();
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('v_admin');
		$this->load->view('template/footer');
	}

	public function detail_user()
	{
		$data['data'] = $this->M_Admin->detail_user();
		$data['pendidikan'] = $this->M_Admin->pendidikan_user();
		$data['pelatihan'] = $this->M_Admin->pelatihan_user();
		$data['pekerjaan'] = $this->M_Admin->pekerjaan_user();
		$this->load->view('template/header');
		$this->load->view('v_detail_user', $data);
		$this->load->view('template/footer');
	}


	public function user_list()
	{
		$data = $this->M_Admin->m_user_list();
		echo json_encode($data);
	}
}
