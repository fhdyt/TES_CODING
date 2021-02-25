<?php
class RegisterModel extends CI_Model
{

	function register_user()
	{
		$data = array(
			'USER_EMAIL' 		=> $this->input->post('email'),
			'USER_PASSWORD' 		=> password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'USER_LEVEL' 		=> "user",
		);
		$result = $this->db->insert('USER', $data);
		return $result;
	}
}
