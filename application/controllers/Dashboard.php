<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
		$this->load->model('M_Dashboard');
		$this->load->model('LoginModel');
		$this->LoginModel->cek_login();
	}

	public function index()
	{
		$data['tersimpan'] = $this->M_Dashboard->tersimpan();
		$this->load->view('template/header');
		$this->load->view('v_dashboard', $data);
		$this->load->view('template/footer');
	}

	public function simpan()
	{
		$data = $this->M_Dashboard->m_simpan();
	}



	public function pendidikan_simpan()
	{
		$data = $this->M_Dashboard->m_pendidikan_simpan();
	}

	public function pendidikan_list()
	{
		$data = $this->M_Dashboard->m_pendidikan_list();
		echo json_encode($data);
	}

	public function hapus_pendidikan()
	{
		$id = $this->uri->segment('3');
		$data = $this->M_Dashboard->m_hapus_pendidikan($id);
		echo json_encode($data);
	}




	public function pelatihan_simpan()
	{
		$data = $this->M_Dashboard->m_pelatihan_simpan();
	}

	public function pelatihan_list()
	{
		$data = $this->M_Dashboard->m_pelatihan_list();
		echo json_encode($data);
	}

	public function hapus_pelatihan()
	{
		$id = $this->uri->segment('3');
		$data = $this->M_Dashboard->m_hapus_pelatihan($id);
		echo json_encode($data);
	}


	public function pekerjaan_simpan()
	{
		$data = $this->M_Dashboard->m_pekerjaan_simpan();
	}

	public function pekerjaan_list()
	{
		$data = $this->M_Dashboard->m_pekerjaan_list();
		echo json_encode($data);
	}

	public function hapus_pekerjaan()
	{
		$id = $this->uri->segment('3');
		$data = $this->M_Dashboard->m_hapus_pekerjaan($id);
		echo json_encode($data);
	}
}
