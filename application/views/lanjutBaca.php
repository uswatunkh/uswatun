<p></p>

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
                                            <h2>Isi Berita</h2>
                                            <div class="view-mail-action">
                                            
                                            </div>
                                        </div>
<center><table border="black"  >
	
	<tbody>
	<?php
	foreach($query->result() as $row){
		$str=$row->isi_berita;
        $s= wordwrap($str,100,"<br>\n");
	echo "<tr ><td >
	<p></p>
		<center><b>$row->judul_berita</b></center>
		<p></p>
		$s </td>
	 </tr>";
	}
	?>                      
  
</table> </center>


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
<p></p>