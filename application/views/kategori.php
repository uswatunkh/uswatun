<!-- Breadcome start-->
    <div class="breadcome-area mg-t-40 mg-b-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list shadow-reset">
                        <div class="breadcome-heading">
                            <p><strong>Filter:</strong>
                            <button type="button" class="btn btn-custon-four btn-danger" onclick="location.href='<?php echo base_url();?>welcome/desc'">JUMLAH BACA</button>/*jumlah pembaca terbanyak-terkecil*/</p>

                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcome End-->

    <div class="user-profile-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="user-profile-wrap shadow-reset">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row">
                                   <tbody>
                                    <div class="col-lg-9">
                                        <div class="user-profile-content">
                                            <p ></p>
                                            <tbody>
                                                <?php 

                                                foreach($query->result() as $row){
                                                $artikel=$row->isi_berita;
                                                $cut=substr($artikel,0,200); //kode untuk membatasi karakter saya batasi 200 karakter
                                                $s="......";
                                                $t=" (DIBACA ";
                                                $u=" )";
                                                $v=" KALI";
                                                $w="====================================================";
                                                echo "<tr> 
                                                <td><b><h2><strong>".$row->judul_berita."</strong></h2>".$t."".$row->jml_baca."".$v."".$u."</br></b>
                                                <br>".$cut."
                                                ".$s."</br>
                                                <a  href='".base_url('welcome/selanjutnya?id='.$row->id)."'><button type='button' class='btn btn-custon-four btn-danger' >LANJUT BACA</button></a> 
                                                </td>  
                                                <strong>".$w."</strong>
                                                </tr>";  

                                            } 
                                            ?>  
                                            </tbody>   
                                         
                                           
                                            <p></p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p></p>
    <p></p>
    </div>
    