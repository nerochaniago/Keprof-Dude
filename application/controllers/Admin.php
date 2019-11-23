<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->library('form_validation');
  }

	public function index()
	{
    $this->form_validation->set_rules('email','Email','trim|required|valid_email');
    $this->form_validation->set_rules('password','Password','trim|required');

    if ($this->form_validation->run() == false) {
      // code...
      $this->load->view('admin/login');
    } else {
      $this->_login();
    }
	}

  private function _login(){
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $user = $this->db->get_where('user',['email' => $email])->row_array();
    if ($user) {
      // code...

      if ($user['is_active'] == 1) {
        // code...
        if (password_verify($password,$user['password'])) {
          // code...
          $data = [
            'email' => $user['email'],
            'role_id' => $user['role_id']
          ];
          $this->session->set_userdata($data);
          redirect('user');
        } else {
          // code...
          $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
          Password salah
          </div>');
          redirect('admin');

        }
      } else {
        $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
        Akun tidak aktif
        </div>');
        redirect('admin');
      }
    } else {
      // code...
      $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
      Akun tidak ditemukan
      </div>');
      redirect('admin');
    }
  }


public function logout(){
  $this->session->unset_userdata('email');
  $this->session->unset_userdata('role_id');
  $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
  Anda berhasil logout
  </div>');
  redirect('admin');
}
}
