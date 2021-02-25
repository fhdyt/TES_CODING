<?php
class M_Dashboard extends CI_Model
{
	public function m_simpan()
	{
		$this->db->query('UPDATE BIODATA SET RECORD_STATUS="E" WHERE USER_EMAIL="' . $this->session->userdata('USER_EMAIL') . '" AND RECORD_STATUS="A"');
		$data = array(
			'USER_EMAIL' => $this->session->userdata('USER_EMAIL'),
			'BIODATA_POSISI' => $this->input->post('posisi'),
			'BIODATA_NAMA' => $this->input->post('nama'),
			'BIODATA_KTP' => $this->input->post('nomor_ktp'),
			'BIODATA_TEMPAT_LAHIR' => $this->input->post('tempat_lahir'),
			'BIODATA_TANGGAL_LAHIR' => $this->input->post('tanggal_lahir'),
			'BIODATA_JENIS_KELAMIN' => $this->input->post('jenis_kelamin'),
			'BIODATA_AGAMA' => $this->input->post('agama'),
			'BIODATA_GOLONGAN_DARAH' => $this->input->post('gol_darah'),
			'BIODATA_STATUS' => $this->input->post('status'),
			'BIODATA_ALAMAT_KTP' => $this->input->post('alamat_ktp'),
			'BIODATA_ALAMAT_TINGGAL' => $this->input->post('alamat_tinggal'),
			'BIODATA_EMAIL' => $this->input->post('email'),
			'BIODATA_TELP' => $this->input->post('telp'),
			'BIODATA_ORANG_TERDEKAT' => $this->input->post('orang_telp'),
			'BIODATA_SKILL' => $this->input->post('skill'),
			'BIODATA_BERSEDIA_DITEMPATKAN' => $this->input->post('bersedia_ditempatkan'),
			'BIODATA_PENGHASILAN' => $this->input->post('penghasilan'),
			'RECORD_STATUS' => "A",
		);

		$result = $this->db->insert('BIODATA', $data);
		redirect('dashboard');
	}

	public function tersimpan()
	{
		$hasil = $this->db->query('SELECT * FROM BIODATA WHERE USER_EMAIL="' . $this->session->userdata('USER_EMAIL') . '" AND RECORD_STATUS="A"')->result();
		return $hasil;
	}


	// -------------------------------------------------------------
	public function m_pendidikan_list()
	{
		$hasil = $this->db->query('SELECT * FROM PENDIDIKAN WHERE USER_EMAIL="' . $this->session->userdata('USER_EMAIL') . '" ')->result();
		return $hasil;
	}

	public function m_pendidikan_simpan()
	{
		$data = array(
			'USER_EMAIL' => $this->session->userdata('USER_EMAIL'),
			'PENDIDIKAN_TERAKHIR' => $this->input->post('pendidikan_terakhir'),
			'PENDIDIKAN_AKADEMIK' => $this->input->post('instansi'),
			'PENDIDIKAN_JURUSAN' => $this->input->post('jurusan'),
			'PENDIDIKAN_TAHUN_LULUS' => $this->input->post('tahun'),
			'PENDIDIKAN_IPK' => $this->input->post('ipk'),
			'RECORD_STATUS' => "A",
		);

		$result = $this->db->insert('PENDIDIKAN', $data);
		return $result;
	}



	public function m_hapus_pendidikan($id)
	{
		$hasil = $this->db->query('DELETE FROM PENDIDIKAN WHERE PENDIDIKAN_ID="' . $id . '" AND USER_EMAIL="' . $this->session->userdata('USER_EMAIL') . '"');
		return $hasil;
	}
	// -------------------------------------------------------------
	// -------------------------------------------------------------
	public function m_pelatihan_list()
	{
		$hasil = $this->db->query('SELECT * FROM PELATIHAN WHERE USER_EMAIL="' . $this->session->userdata('USER_EMAIL') . '" ')->result();
		return $hasil;
	}

	public function m_pelatihan_simpan()
	{
		$data = array(
			'USER_EMAIL' => $this->session->userdata('USER_EMAIL'),
			'PELATIHAN_NAMA' => $this->input->post('nama'),
			'PELATIHAN_SERTIFIKAT' => $this->input->post('sertifikat'),
			'PELATIHAN_TAHUN' => $this->input->post('tahun'),

			'RECORD_STATUS' => "A",
		);

		$result = $this->db->insert('PELATIHAN', $data);
		return $result;
	}



	public function m_hapus_pelatihan($id)
	{
		$hasil = $this->db->query('DELETE FROM PELATIHAN WHERE PELATIHAN_ID="' . $id . '" AND USER_EMAIL="' . $this->session->userdata('USER_EMAIL') . '"');
		return $hasil;
	}
	// -------------------------------------------------------------
	// -------------------------------------------------------------
	public function m_pekerjaan_list()
	{
		$hasil = $this->db->query('SELECT * FROM PEKERJAAN WHERE USER_EMAIL="' . $this->session->userdata('USER_EMAIL') . '" ')->result();
		return $hasil;
	}

	public function m_pekerjaan_simpan()
	{
		$data = array(
			'USER_EMAIL' => $this->session->userdata('USER_EMAIL'),
			'PEKERJAAN_NAMA' => $this->input->post('nama'),
			'PEKERJAAN_POSISI' => $this->input->post('posisi'),
			'PEKERJAAN_PENDAPATAN' => $this->input->post('pendapatan'),
			'PEKERJAAN_TAHUN' => $this->input->post('tahun'),


			'RECORD_STATUS' => "A",
		);

		$result = $this->db->insert('PEKERJAAN', $data);
		return $result;
	}



	public function m_hapus_pekerjaan($id)
	{
		$hasil = $this->db->query('DELETE FROM PEKERJAAN WHERE PEKERJAAN_ID="' . $id . '" AND USER_EMAIL="' . $this->session->userdata('USER_EMAIL') . '"');
		return $hasil;
	}
	// -------------------------------------------------------------
}
