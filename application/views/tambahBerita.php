
    
    <div class="inbox-mailbox-area mg-b-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        
                        <div class="col-lg-12">
                            <div class="tab-content">
                                
                                <div id="composemail" class="tab-pane fade in animated zoomInDown shadow-reset custom-inbox-message active">
                                    <div class="view-mail-wrap">
                                        <div class="mail-title">
                                            <h2>Tambah Berita</h2>
                                            <div class="view-mail-action">
                                            
                                            </div>
                                        </div>
                                        <P></P>
                                        <!--kode untuk create database table berita--> 
                                        <form  method="post" action="<?php echo base_url(). 'tambahBerita/add'; ?>" name="frmBerita" enctype="multipart/form-data">  

                                                        
                                            <div >
                                                <label  >Kategori</label>  
                                                <div class="form-select-list">
                                                                <select class="form-control custom-select-value" id="idKategori" name="idKategori">
                                                               <?php
                                                                     $query = $this->m_kategori->tampil_home();
                                                                     foreach($query->result() as $row) {
                                                                    echo "<option value='".$row->idKategori."'>".$row->namaKategori."</option>";
                                                                     }
                                                                  ?>
                                                                </select>
                                                            </div>
                                            <div >  
                                                <input type="hidden" id="id" name="id">
                                                <label  for="inputJudul">Judul</label>  
                                                <div >  
                                                    <input class="form-control"  type="text"  placeholder="Judul Berita" name="judul_berita" id="judul_berita" required >  
                                                </div>  
                                            </div>  
                                            <div >  
                                                <label  for="inputIsiBerita">Isi Berita</label>  
                                                <div >  
                                                    <textarea class="form-control" rows="10" cols="150" class="span12" name="isi_berita" id="isi_berita" required></textarea>  
                                                </div>  
                                            </div>  
                                            <div >  
                                                <div >  
                                                    <button type="submit" class="btn btn-primary">TAMBAH BERITA</button>  
                                                </div>  
                                            </div>  
                                        </form>  





                                      
                                       <!-- <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div method="post" action="<?php echo base_url(). 'berita/add'; ?>" name="frmBerita"  class="compose-email-to compose-subject-title">
                                                            <input type="hidden" id="id" name="id">
                                                            <span  for="inputJudul">Judul</span>  
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <div class="compose-multiple-email compose-subject-email">
                                                            <input type="text" placeholder="Judul Berita" name="judul_berita" id="judul_berita" required />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-editor-compose">
                                                    <span  for="inputIsiBerita">Isi Berita</span>
                                                    <div id="summernote5">
                                                        <div class="note-editable panel-body" contenteditable="true" style="height: 400px;" name="isi_berita" id="isi_berita">
                                                            
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="view-mail-reply-list">
                                                    <ul class="view-mail-forword">
                                                        <button type="submit" class="btn btn-primary">TAMBAH BERITA</button> 
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                                
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>