<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_berita');
		$this->load->model('m_kategori');
		$this->load->helper('url');
		
	}

	public function index() {
		$data['query'] = $this->m_berita->tampil_home();
		$dat['query'] = $this->m_kategori->tampil_home();

		$this->load->view('head', $dat);
		$this->load->view('beranda', $data);
		$this->load->view('footer', $data);
	}

	public function add(){
		$id = $this->input->post('id');
		
		if(empty($id)) $this->m_berita->tambah_data();
		else $this->m_berita->ubah_data($id);
	}


	public function selanjutnya()
	{
		$data['id'] = $this->input->get('id');
		$data['query'] = $this->m_berita->tampil_data($data['id']);
		$data['data'] = $this->m_berita->jumlah_baca($data['id']);
		$dat['query'] = $this->m_kategori->tampil_home();

		$this->load->view('head', $dat);
		$this->load->view('lanjutBaca', $data);
		$this->load->view('footer', $data);

		 
	} 

	public function desc() {
		$data['query'] = $this->m_berita->tampil_desc();
		$dat['query'] = $this->m_kategori->tampil_home();

		$this->load->view('head', $dat);
		$this->load->view('beranda', $data);
		$this->load->view('footer', $data);

	}

	function read()
	{
		$data['id'] = $this->input->get('id');
		$data['query'] = $this->m_berita->set_read($data['id']);
		$this->load->view('header', $data);
		$this->load->view('beranda', $data);

		 
	}


}