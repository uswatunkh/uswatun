<?php
class M_kategori extends CI_Model{
	
	//fungsi untuk tampil data pada home
	function tampil_home(){
		return $this->db->get('kategori');    //mengambil data dari database
	} 
	function tampil_data($idKategori) {
      return $this->db->query("SELECT * FROM kategori, berita 
            WHERE  
            kategori.idKategori=berita.idKategori AND 
            berita.id='".$idKategori."'");

    }
    
	
	                              
	function tambah_kategori(){
		$data = array(
		'namaKategori' => $this->input->post('namaKategori'),
			 
			 
		); 
		$this->db->insert('kategori', $data);
		redirect('../tambahKategori');
	}
	

	function ubah_data ($idKategori){
		$data = array(
			'namakategori' => $this->input->post('namakategori'),
			
			
		   );
			$this->db->where(array('idKategori'=> $idKategori));
			$this->db->update('kategori',$data);
			redirect('../postingan');
	}

	function hapus_data($idKategori){
		$this->db->where(array('idKategori'=> $idKategori));
		$this->db->delete('kategori');
		redirect('../postingan');
	}
}

?> 