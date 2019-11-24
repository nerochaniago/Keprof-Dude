<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('User_model');
  }
  public function index(){
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('admin/dashboard',$data);
  }
  public function post(){
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $data['berita'] = $this->User_model->getDataPost();
    $this->load->view('admin/post',$data);
  }


  public function tambahPost() {
    $judul = $this->input->post('judul');
    $tanggal = $this->input->post('tanggal');
    $isi = $this->input->post('isi');
    $uploadImage = $_FILES['gambar']['name'];
    if ($uploadImage) {
      // code...
      $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
      $config['upload_path'] = './assets/file/';
      $this->load->library('upload',$config);

      if ($this->upload->do_upload('gambar')) {
            $upload_data = $this->upload->data();
            $data = [
                'judul' => $judul,
                'tanggal' => $tanggal,
                'isi' => $isi,
                'gambar' => $upload_data['file_name']
              ];

              $this->db->insert('berita',$data);
              redirect('user/index');
      } else {

              redirect('user/post');
    }

    }
    $data = [
      'judul' => $judul,
      'tanggal' => $tanggal,
      'isi' => $isi

      ];
      $this->db->insert('berita',$data);
      redirect('user/index');
}

public function hapusBerita($id){
    $this->User_model->hapusBerita($id);
    redirect('user/post');
}

public function editBerita(){
  $data['berita'] = $this->db->get_where('berita',['id' => $this->input->post('id') ])->row_array();
  $judul = $this->input->post('judul');
  $tanggal = $this->input->post('tanggal');
  $isi = $this->input->post('isi');
  $uploadImage = $_FILES['gambar']['name'];
  if ($uploadImage) {
    // code...
    $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
    $config['upload_path'] = './assets/file/';
    $this->load->library('upload',$config);

    if ($this->upload->do_upload('gambar')) {
      // code...
      $old_image = $data['berita']['gambar'];
      if ($old_image) {
        // code...
        unlink(FCPATH . 'assets/file/' . $old_image);
      }
      $new_img = $this->upload->data('file_name');
      $this->db->set('gambar', $new_img);

      $data = [
        'judul' => $judul,
        'tanggal' => $tanggal,
        'isi' => $isi
      ];

      $this->db->where('id',$this->input->post('id'));
      $this->db->update('berita',$data);
      redirect('user/post');

    } else {
            redirect('user/post');
  }
  }

      $data = [
        'judul' => $judul,
        'tanggal' => $tanggal,
        'isi' => $isi
      ];
      $this->db->where('id',$this->input->post('id'));
      $this->db->update('berita',$data);
      redirect('user/post');
  }

  }
