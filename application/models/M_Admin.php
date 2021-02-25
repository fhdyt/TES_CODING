<?php
class M_Admin extends CI_Model
{

	// -------------------------------------------------------------
	public function m_user_list()
	{
		$hasil = $this->db->query('SELECT * FROM BIODATA AS A LEFT JOIN USER AS B ON A.USER_EMAIL=B.USER_EMAIL WHERE A.RECORD_STATUS="A" ')->result();
		return $hasil;
	}

	public function detail_user()
	{
		$hasil = $this->db->query('SELECT * FROM BIODATA AS A LEFT JOIN USER AS B ON A.USER_EMAIL=B.USER_EMAIL WHERE  B.USER_ID="' . $this->uri->segment('3') . '" AND A.RECORD_STATUS="A" ')->result();
		return $hasil;
	}
	public function pendidikan_user()
	{
		$hasil = $this->db->query('SELECT * FROM PENDIDIKAN AS A LEFT JOIN USER AS B ON A.USER_EMAIL=B.USER_EMAIL WHERE  B.USER_ID="' . $this->uri->segment('3') . '" AND A.RECORD_STATUS="A" ')->result();
		return $hasil;
	}
	public function pelatihan_user()
	{
		$hasil = $this->db->query('SELECT * FROM PELATIHAN AS A LEFT JOIN USER AS B ON A.USER_EMAIL=B.USER_EMAIL WHERE  B.USER_ID="' . $this->uri->segment('3') . '" AND A.RECORD_STATUS="A" ')->result();
		return $hasil;
	}
	public function pekerjaan_user()
	{
		$hasil = $this->db->query('SELECT * FROM PEKERJAAN AS A LEFT JOIN USER AS B ON A.USER_EMAIL=B.USER_EMAIL WHERE  B.USER_ID="' . $this->uri->segment('3') . '" AND A.RECORD_STATUS="A" ')->result();
		return $hasil;
	}
}
