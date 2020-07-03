
    
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
                                            <h2>Tambah Kategori</h2>
                                            <div class="view-mail-action">
                                            
                                            </div>
                                        </div>
                                        <P></P>
                                        <!--kode untuk create database table berita--> 
                                        <form  method="post" action="<?php echo base_url(). 'tambahKategori/add'; ?>"  enctype="multipart/form-data">  
                                            <div >  
                                                <input type="hidden" id="idKategori" name="idKategori">
                                                <label  for="inputJudul"></label>  
                                                <div class="col-lg-10">
                                                        <div class="compose-multiple-email compose-subject-email">
                                                            <input type="text" name="namaKategori" id="namaKategori" required />
                                                        </div>
                                                    </div>
                                            </div>  
                                            <div >  
                                                
                                            </div>  
                                            <div >  
                                                <div >  
                                                    <button type="submit" class="btn btn-primary">TAMBAH KATEGORI</button>  
                                                </div>  
                                            </div>  
                                        </form>  
                                
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</br>
