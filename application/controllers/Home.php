<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	public function index()
	{
		$this->load->helper('text');
		$this->load->model('User_model');
		$data['berita'] = $this->User_model->getBeritaLimit();
		$this->load->view('visitor/home',$data);
	}

	public function detailBerita($id){
		$this->load->model('User_model');
		$data['berita'] = $this->User_model->getDetailBerita($id);
		$this->load->view('visitor/detail_berita',$data);
	}

	public function berita()
	{
		$this->load->model('User_model');
		$this->load->helper('text');
      	$this->load->library('pagination');
      	$config['base_url'] = 'http://localhost/web_pkc/home/berita';
      	$config['total_rows'] = $this->User_model->countAllBerita();
		$config['per_page'] = 6;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';

		$config['next_tag_open'] = '<li class="page-item grey" style="width:50px;">';
		$config['next_tag_close'] = '</li>';

		$config['prev_tag_open'] = '<li class="page-item grey" style="width:50px;">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="active green"><a href="#!" style="width:50px;">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item" style="width:50px;">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class'=>'page-link');

		$data['start'] = $this->uri->segment(3);
		$data['berita'] = $this->User_model->getBeritaa($config['per_page'],$data['start']);
		$this->pagination->initialize($config);
		$this->load->view('visitor/berita',$data);
	}
	public function feedback()
	{
		$this->load->view('visitor/feedback');
	}
	public function layanan()
	{
		$this->load->view('visitor/layanan');
	}
	public function organisasi()
	{
		$this->load->view('visitor/organisasi');
	}



}
