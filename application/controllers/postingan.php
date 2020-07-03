<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class postingan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_kategori');
		$this->load->model('m_berita');
		$this->load->helper('url');
		
	}

	public function index() {
		$data['query'] = $this->m_kategori->tampil_home();

		$this->load->view('head', $data);
		$this->load->view('postingan', $data);
		$this->load->view('footer', $data);
	}

	public function index2() {

		$data['query'] = $this->m_berita->tampil_home();

		$this->load->view('head', $data);
		$this->load->view('postBerita', $data);
		$this->load->view('footer', $data);
	}

	public function add(){
		$idKategori = $this->input->post('idKategori');
		
		if(empty($idKategori)) $this->m_kategori->tambah_data();
		else $this->m_kategori->ubah_data($idKategori);
	}

	public function delete(){
		$idKategori= $this->input->post('idKategori2');
		$this->m_kategori->hapus_data($idKategori);
	}


	public function selanjutnya()
	{
		$data['id'] = $this->input->get('id');
		$data['query'] = $this->m_berita->tampil_data($data['id']);
		$data['data'] = $this->m_berita->jumlah_baca($data['id']);
		$this->load->view('head', $data);
		$this->load->view('lanjutBaca', $data);
		$this->load->view('footer', $data);

		 
	} 

	public function desc() {
		$data['query'] = $this->m_berita->tampil_desc();

		$this->load->view('head', $data);
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