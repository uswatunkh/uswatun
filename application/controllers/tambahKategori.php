<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tambahKategori extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_kategori');
		$this->load->model('m_berita');
		$this->load->helper('url');
	}

	public function index() {
		$data['query'] = $this->m_kategori->tampil_home();


		$this->load->view('head', $data);
		$this->load->view('tambahKategori', $data);
		$this->load->view('footer', $data);
	}

	public function tampilKategori() {
		$data['idKategori'] = $this->input->get('id');
		$data['query'] = $this->m_berita->tampil_kategori($data['idKategori']);
		$dat['query'] = $this->m_kategori->tampil_home();

		$this->load->view('head', $dat);
		$this->load->view('kategori', $data);
		$this->load->view('footer', $data);
	}

	public function add(){
		$idKategori = $this->input->post('idKategori');
		
		if(empty($idKategori)) $this->m_kategori->tambah_kategori();
		else $this->m_kategori->ubah_data($idKategori);
	}
}