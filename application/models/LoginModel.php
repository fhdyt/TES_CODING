<?php
class LoginModel extends CI_Model
{

  function login_user($email, $password)
  {
    $query = $this->db->get_where('USER', array('USER_EMAIL' => $email));
    if ($query->num_rows() > 0) {
      $data_user = $query->row();
      if (password_verify($password, $data_user->USER_PASSWORD)) {

        $this->session->set_userdata('USER_ID', $data_user->USER_ID);
        $this->session->set_userdata('USER_EMAIL', $data_user->USER_EMAIL);
        $this->session->set_userdata('USER_LEVEL', $data_user->USER_LEVEL);
        $this->session->set_userdata('is_login', TRUE);

        $this->load->library('user_agent');
        redirect('index');
      } else {

        return FALSE;
      }
    } else {
      $this->session->set_flashdata('error_login', 'Username belum terdaftar.');
      redirect('login');
    }
  }

  function cek_login()
  {
    if (empty($this->session->userdata('is_login'))) {
      redirect('login');
    }
  }

  function akses_user()
  {
    if ($this->session->userdata('USER_LEVEL') != "user") {
      echo "Anda tidak memiliki akses";
      redirect('admin');
    }
  }

  function akses_admin()
  {
    if ($this->session->userdata('USER_LEVEL') != "admin") {
      echo "Anda tidak memiliki admin";
      redirect('dashboard');
    }
  }
  function cek_akses()
  {
    $query = $this->db->get_where('AKSES', array('MENU_LINK' => $this->uri->segment(2), 'LINK' => $this->session->userdata('USER_LINK')));
    if (empty($query->num_rows())) {
      redirect("dashboard");
    }
  }
}
