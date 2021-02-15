	<div class="container-fluid">
		<div class="row bg-dark">
			<div class="container p-3 text-light">
				<div class=" row ">
					<div class="col-sm-2 my-auto text-center"><img class="my-3" src="<?= base_url().'assets/images/system/support.png' ?>" style="width:  90px;"></div>
					<div class="col-sm-10 my-auto">
				<h4 ><b>Jadi Pengajar Kelas Online dan Kelas Offline</b></h4>
				<p>Mari kontribusi dalam peningkatan kualitas jutaan pelajar dan masyarakat Indonesia, dengan menjadi pengajar Kelas Online dan Kelas Offline.</p>
					</div>
				</div>
				
			</div>	
		</div>
		<div class="row">
			<div class="col-md-5 my-auto" style="padding: 0px; ">
				<img class="" src="<?= base_url().'assets/images/system/bgedukator.jpg' ?>" style="width:  100%;">
			</div>
			<div class="col-md-7 bg-light" style="padding: 0px;">
				<div class="container py-3">
					<div class="row mb-3 mt-3">
						<div class="col-3 text-center">
							<div class="rounded-circle mx-auto text-center" style="width: 70px; height: 70px; background: #e0e0e0;">
								<img src="<?= base_url().'assets/images/system/inspirasi.png' ?>" class="mx-auto" style="margin-top: 17px; width:  36px; height: 36px;">
							</div>
						</div>
						<div class="col-9">
							<h5>Jadi sosok inspiratif</h5>
							<p style="text-align: justify;">
								Bagikan keahlian anda kepada lebih dari jutaan pelajar dan masyarakat indonesia. Saatnya menginspirasi tanpa henti.
							</p>
						</div>
					</div>



					<div class="row mb-3">
						<div class="col-3 text-center">
							<div class="rounded-circle mx-auto text-center" style="width: 70px; height: 70px; background: #e0e0e0;">
								<img src="<?= base_url().'assets/images/system/wallet.png' ?>" class="mx-auto" style="margin-top: 17px; width:  36px; height: 36px;">
							</div>
						</div>
						<div class="col-9">
							<h5>Dapatkan penghasilan</h5>
							<p style="text-align: justify;">
								Tuai feedback dari keahlian Anda. Anda akan dikenal sebagai seorang praktisi di displin ilmu yang anda ajarkan.
							</p>
						</div>
					</div>


					<div class="row mb-3">
						<div class="col-3 text-center">
								<div class="rounded-circle mx-auto text-center" style="width: 70px; height: 70px; background: #e0e0e0;">
								<img src="<?= base_url().'assets/images/system/naik.png' ?>" class="mx-auto" style="margin-top: 17px; width:  36px; height: 36px;">
							</div>
						</div>
						<div class="col-9">
							<h5>Tingkat interaksi dengan dunia</h5>
							<p style="text-align: justify;">
								Perluas jaringan anda dan nikmati kesempatan bekerja sama dengan para profesional di berbagai bidang akademik dan vokasional.
							</p>
						</div>
					</div>


					<div class="row mb-3">
						<div class="col-3 ">
							<div class="rounded-circle mx-auto text-center" style="width: 70px; height: 70px; background: #e0e0e0;">
								<img src="<?= base_url().'assets/images/system/coaching.png' ?>" class="mx-auto" style="margin-top: 17px; width:  36px; height: 36px;">
							</div>
								
						</div>
						<div class="col-9">
							<h5>Susun materi belajar dalam bentuk Kelas Online dan Kelas Offline</h5>
							<p style="text-align: justify;">
								Oguru Indonesia akan memberikan dukungan teknis dari awal sampai akhir proses penyusunan kurikulum lokakarya dan produksi video. Anda bebas menyusun kurikulum lokakarya dan video pembelajaran yang interaktif esuai tujuan Anda.
							</p>
						</div>
					</div>
				</div>
				
			</div>
		</div>

		<?php if (condition): ?>
			
		<?php endif ?>
		<div class="row" style="background: #edf3ff">
			<div class="container-fluid text-center m-5">
				<h5><b>Bersiaplah untuk kontribusi terbaik.</b></h5>
				<h5><b>Daftar menjadi edukator Oguru Indonesia sekarang!</b></h5>
			</div>
			<div class="container bg-light p-5 mb-5">
					
				<form action="<?= base_url().'/home/daftar_edukator'?>" method="post" enctype="multipart/form-data" id="uploadForm" onsubmit="return cekfunction()">
			 		<h5><b>Informasi Pribadi</b></h5>
			 		<br>
			 		<div class="row">
						
			 			<div class="col-sm-6">
			 				
			 				<div class="form-group">
						      <label for="nik" class="text-dark"><small><b>NIK*</b></small></label>
						      <input type="text" class="form-control" id="nik" name="nik" pattern="[0-9]{16}" required="" placeholder="Contoh : 3333444455556666">
						    </div>
						    <div class="form-group">
						      <label for="nohp" class="text-dark"><small><b>Nomor Handphone*</b></small></label>
						      <input type="text" class="form-control" id="nohp" name="nohp" pattern="[0-9]{12,14}" required="" placeholder="Contoh : 088805003962">
						    </div>
						    
						   
			 			</div>
			 			<div class="col-sm-6">
			 			    <div class="form-group">
						      <label for="file_ktp" class="text-dark"><small><b>Foto KTP*</b></small></label>
						      <input type="file" class="form-control form-control-sm" id="file_ktp" name="file_ktp" required="" accept="image/jpeg">
						    </div>
			 				<div class="form-group">
						      <label for="file_diriktp" class="text-dark"><small><b>Foto Diri dengan KTP*</b></small></label>
						      <input type="file" class="form-control form-control-sm" id="file_diriktp" name="file_diriktp" required="" accept="image/jpeg">
						    </div>
			 				
			 			</div>
			 		</div>
			 		 <br>	
			 		<h5><b>Kelengkapan Dokumen</b></h5>
			 		<br>
			 		<div class="row">
						
			 			<div class="col-sm-6">
						    <div class="form-group">
						      <label for="cv" class="text-dark"><small><b>Curiculum Vitae (CV)*</b></small></label>
						      <input type="file" class="form-control form-control-sm" id="cv" name="file_cv" required="" accept="application/pdf">
						    </div>
						    <div class="form-group">
						      <label for="file_port" class="text-dark"><small><b>Portofolio*</b></small></label>
						      <input type="file" class="form-control form-control-sm" id="file_port" name="file_port" required="" accept="application/pdf">
						    </div>
						    
						    <div class="form-group">
							    <label for="sel1" class="text-dark"><small><b>Bidang yang Diajukan*</b></small></label>
							    <select class="form-control" id="bidang" required="" name="bidang">
								    <option value="">Pilih Bidang</option>
								    <option value="Vokasional">Vokasional</option>
								    <option value="Akademik">Akademik</option>
							    </select>
							</div>

							<div class="form-group" id="f_vokasi">
							    <label for="fokus_vokasi" class="text-dark"><small><b>Fokus Vokasional</b></small></label>
							    <select class="form-control" id="fokus_vokasi" name="fokus_vokasi">
								    <option value="">Pilih Fokus Vokasional</option>
							    	<?php
							    	$categories1 = $this->crud_model->get_categories('1')->result_array(); ?>
							    	<?php foreach ($categories1 as $key => $category):?> ?>
								    <option value="<?=$category['name']?>"><?=$category['name']?></option>
							    	<?php endforeach ?>
								    
							    </select>
							</div>
							<div class="form-group" id="f_akademik">
							    <label for="fokus_akademik" class="text-dark"><small><b>Fokus Akademik</b></small></label>
							    <select class="form-control" id="fokus_akademik" name="fokus_akademik">
								    <option value="">Pilih Fokus Akademik</option>
								    <?php
							    	$categories2 = $this->crud_model->get_categories('2')->result_array(); ?>
							    	<?php foreach ($categories2 as $key => $category):?> ?>
								    <option value="<?=$category['name']?>"><?=$category['name']?></option>
							    	<?php endforeach ?>
								    <
							    </select>
							</div>

						   
			 			</div>
			 			<div class="col-sm-6">
			 			    <div class="form-group">
							    <label for="tipe_edukator" class="text-dark"><small><b>Status Edukator*</b></small></label>
							    <select class="form-control" id="tipe_edukator" required="" name="tipe_edukator">
								    <option value="">Pilih Status Edukator</option>
								    <option value="Mentor">Mentor</option>
								    <option value="Instruktur">Instruktur</option>
								    <option value="Tutor">Tutor</option>
								    <option value="Tentor">Tentor</option>
							    </select>
							</div>
			 				<div class="form-group">
						      <label for="file_vid" class="text-dark"><small><b>Contoh Video Penyampaian Materi (Untuk Kelas Online)</b></small></label>
						      <input type="file" class="form-control form-control-sm" id="file_vid" name="file_vid" accept="video/mp4">
						    </div>

						    <div class="form-group">
						      <label for="topik" class="text-dark"><small><b>Topik yang ingin Diajukan*</b></small></label>
						      <input type="text" class="form-control" id="topik" name="topik" required="" placeholder="Topik yang ingin Diajukan">
						    </div>

						    <div class="form-group">
						      <label for="file_silabus" class="text-dark"><small><b>Silabus dari Topik yang Diajukan*</b></small></label>
						      <input type="file" class="form-control form-control-sm" id="file_silabus" name="file_silabus" accept="application/pdf" required="">
						    </div>
			 			</div>
			 		</div>
			 		<div class="container py-3" style="background: #ffffc9;">
			 			<p><b>Ketentuan Video Penyampaian Materi : </b></p>
			 			<small>
			 			<ol>
			 				<li>Durasi minimum 3 menit</li>
			 				<li>Ukuran video maximum 100 MB</li>
			 				<li>Diperbolehkan merekam menggunakan handphone dan tanpa proses editing</li>
			 				<li>Video yang dikirimkan adalah contoh video penyampaian materi terkait topik yang diajukan, bukan video perkenalan</li>
			 			</ol>
			 			</small>
			 		</div>
			 		<br>	
			 		<h5><b>Akun Media Sosial</b></h5>
			 		<br>
			 		<div class="row">
			 			<div class="col-sm-6">
			 				<div class="form-group">
						      <label for="youtube" class="text-dark"><small><b>Youtube</b></small></label>
						      <input type="text" class="form-control" id="youtube" name="youtube"  placeholder="https://www.youtube.com/channel/...">
						    </div>
						    <div class="form-group">
						      <label for="instagram" class="text-dark"><small><b>Instagram</b></small></label>
						      <input type="text" class="form-control" id="instagram" name="instagram"  placeholder="https://www.instagram.com/...">
						    </div>
			 			</div>
			 			<div class="col-sm-6">
			 				<div class="form-group">
						      <label for="facebook" class="text-dark"><small><b>Facebook</b></small></label>
						      <input type="text" class="form-control" id="facebook" name="facebook"  placeholder="https://www.facebook.com/...">
						    </div>
			 			</div>
			 		</div>
			 		<br>
			 		<div id="progres" class="progress">
			 		    <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
			 		</div>
			 	<!--	<div id="progres" class="form-group progress">-->
					<!--	  <div class="progress-bar" id="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:0%">-->
					<!--		<span id="status"></span>-->
					<!--	  </div>-->
					<!--</div>  -->
					<!--<div class="progress">-->
     <!--                   <div class="bar bg-primary" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>-->
     <!--                   <div class="percent">0%</div >-->
     <!--               </div>-->
                    
                    <div id="status"></div>
			 		<br>
			 		
			    	<div id="btnsubmit" class="text-center" style="width: 100%">
			        <button type="submit" class="btn btn-primary text-light" >DAFTAR SEKARANG</button>    		
			    	</div> 
			    </form>

				</div>
		</div>
		
	</div>
	
	

	

	 <script type="text/javascript">
	    $('#progres').hide();
	 	$('#f_vokasi').hide();
	 	$('#f_akademik').hide();
	 	$('#bidang').on('change', function(){
	 		
	 		if($(this).val() == 'Vokasional'){
	 			$('#f_vokasi').show();
	 			$('#f_akademik').hide();
	 		}
	 		if($(this).val() == 'Akademik'){
	 			$('#f_akademik').show();
	 			$('#f_vokasi').hide();
	 		}
	 		if($(this).val()==""){
	 		    $('#f_akademik').hide();
	 			$('#f_vokasi').hide();
	 		}
	 	});
	 	
	 	$(function() {

            var bar = $('.bar');
            var percent = $('.percent');
            var status = $('#status');
        
            $('form').ajaxForm({
                beforeSend: function() {
                    $('.progress-bar').width('0%');
                },
                uploadProgress: function(event, position, total, percentComplete) {
                    $('#progres').show();
                    $('#btnsubmit').hide();
                    $('.progress-bar').width(percentComplete+'%');
                    $('.progress-bar').html('<div id="progress-bar">'+percentComplete+'%</div>');
                },
                complete: function(xhr) {
                    var url = "<?php echo site_url('home/pendaftaran_edukator');?>";
                    window.location.href = url;
                }
            });
        }); 
	 	
	 	function cekfunction(){
	 	    var returnvar = true;
	 	    var nik = document.getElementById("nik").value;
    	    var file_ktp = document.getElementById("file_ktp").files[0];
    	    var file_diriktp = document.getElementById("file_diriktp").files[0];
    	    var nohp = document.getElementById("nohp").value;
    	    var file_cv = document.getElementById("cv").files[0];
    	    var file_port = document.getElementById("file_port").files[0];
    	    var bidang = document.getElementById("bidang");
    	    var select_bidang = bidang.options[bidang.selectedIndex].value;
    	    var fokus_bidang_vokasi = document.getElementById("fokus_vokasi");
    	    var select_fokus_bidang_vokasi = fokus_bidang_vokasi.options[fokus_bidang_vokasi.selectedIndex].value;
    	    var fokus_bidang_akademik = document.getElementById("fokus_akademik");
    	    var select_fokus_bidang_akademik = fokus_bidang_akademik.options[fokus_bidang_akademik.selectedIndex].value;
    	    if(document.getElementById("file_vid").files.length != 0){
    	        var file_vid = document.getElementById("file_vid").files[0];    
    	    }else{
    	        var file_vid = "";
    	    }
    	    
    	    var topik = document.getElementById("topik").value;
    	    var file_silabus = document.getElementById("file_silabus").files[0];
    	    var youtube = document.getElementById("youtube").value;
    	    var instagram = document.getElementById("instagram").value;
    	    var facebook = document.getElementById("facebook").value;
    	    
	 	    if( file_ktp.type != "image/jpeg"){
    	     kesalahan = 1;
    	     toastr.error('Foto KTP Harus dengan Format jpg !'); 
    	     returnvar = false;
    	    }
    	    if( file_diriktp.type != "image/jpeg"){
    	     kesalahan = 1;
    	     toastr.error('Foto Diri dengan KTP Harus dengan Format jpg !'); 
    	     returnvar = false;
    	    }
    	    if( file_cv.type != "application/pdf"){
    	     kesalahan = 1;
    	     toastr.error('File Curiculum Vitae Harus dengan Format pdf !'); 
    	     returnvar = false;
    	    }
    	    if( file_port.type != "application/pdf"){
    	     kesalahan = 1;
    	     toastr.error('File Protofolio Harus dengan Format pdf !'); 
    	     returnvar = false;
    	    }
    	    
    	    if( file_vid != ""){
    	        if(file_vid.type != "video/mp4"){
    	            kesalahan = 1;
    	            toastr.error('File Contoh Video Harus dengan Format mp4 !'); 
    	            returnvar = false;
    	        }
    	        
    	        if(file_vid.size > 104857600){
    	            kesalahan = 1;
    	            toastr.error('Ukuran File Contoh Video Harus dibawah 100 MB !'); 
    	            returnvar = false;
    	        }
    	    }
    	    
    	    if( file_silabus.type != "application/pdf"){
    	     kesalahan = 1;
    	     toastr.error('File Silabus Harus dengan Format pdf !'); 
    	     returnvar = false;
    	    }
    	    
    	    return returnvar;
	 	}

// 	 	$(document).ready(function(){
// 	 	    $('#uploadForm').submit(function(e){
// 	 	        if($('#file_vid').val()){
// 	 	            e.preventDefault();
// 	 	            $(this).ajaxSubmit({
// 	 	                beforeSubmit: function(){
// 	 	                    $('.progress-bar').width('0%');
// 	 	                },
// 	 	                uploadProgress: function(event, position, total, percentComplete){
// 	 	                    $('.progress-bar').width(percentComplete+'%');
// 	 	                    $('.progress-bar').html('<div id="progress-bar">'+percentComplete+'%</div>');
	 	                    
// 	 	                },
// 	 	                success: function(){
	 	                    
// 	 	                }
// 	 	            })
// 	 	            return false;
// 	 	        }
// 	 	    })
// 	 	})
	 	// $('#file_ktp').on('change', function() { 
   //          console.log(this.files[0].size);
   //          // if (this.files[0].size > 2097152) { 
   //          //     alert("Try to upload file less than 2MB!"); 
   //          // } else { 
   //          //     $('#GFG_DOWN').text(this.files[0].size + "bytes"); 
   //          // } 
   //      });
	 </script>
