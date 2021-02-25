<?php
class M_Admin extends CI_Model
{

	// -------------------------------------------------------------
	public function m_user_list()
	{
		$hasil = $this->db->query('SELECT * FROM BIODATA WHERE RECORD_STATUS="A" ')->result();
		return $hasil;
	}
}
