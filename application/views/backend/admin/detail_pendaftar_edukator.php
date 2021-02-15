<div class="row ">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> <?php echo $page_title; ?>
            </h4>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
              <h4 class="mb-3 header-title">Detail Pendaftar Edukator</h4>
              <div class="row">
                <div class="col-md-6">
                  <h5>Nama</h5>
                  <p><?= $users['first_name']." ".$users['last_name']?></p>
                </div>
                <div class="col-md-6">                
                  <h5>Email</h5>
                  <p><?= $users['email']?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <h5>Status Edukator</h5>
                  <p><?= $users['status_edukator']?></p>
                </div>
                
              </div>
              <div class="row">
                <div class="col-md-6">
                  <h5>Bidang</h5>
                  <p><?= $users['bidang']?></p>
                </div>
                <div class="col-md-6">                
                  <h5>Fokus Bidang</h5>
                  <p><?= $users['fokus_bidang']?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <h5>Nomor Handphone</h5>
                  <p><?= $users['nohp']?></p>
                </div>
                <div class="col-md-6">                
                  <h5>NIK</h5>
                  <p><?= $users['nik']?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <h5>Foto KTP</h5>
                  <img src="<?= base_url().'/uploads/edukator_file/foto_ktp/'.$users['nama_file'].'.jpg'?>" style="width: 100%; height: auto">
                </div>
                <div class="col-md-6">
                  <h5>Foto Diri dengan KTP</h5>
                  <img src="<?= base_url().'/uploads/edukator_file/foto_diri_ktp/'.$users['nama_file'].'.jpg'?>" style="width: 100%; height: auto">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <h5>Curiculum Vitae</h5>
                  <a href="<?= base_url().'/uploads/edukator_file/cv/'.$users['nama_file'].'.pdf' ?>" target="_blank" class="btn btn-primary">Lihat Curiculum Vitae</a>
                </div>
                <div class="col-md-6">
                  <h5>Portofolio</h5>
                  <a href="<?= base_url().'/uploads/edukator_file/port/'.$users['nama_file'].'.pdf' ?>" target="_blank" class="btn btn-primary">Lihat Portofolio</a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <h5>Silabus</h5>
                  <a href="<?= base_url().'/uploads/edukator_file/silabus/'.$users['nama_file'].'.pdf' ?>" target="_blank" class="btn btn-primary">Lihat Silabus</a>
                </div>
                <div class="col-md-6">                
                  <h5>Contoh Video</h5>
                  <?php if (file_exists('uploads/edukator_file/contoh_video/'.$users['nama_file'].'.mp4')): ?>
                    <a href="<?= base_url().'/uploads/edukator_file/contoh_video/'.$users['nama_file'].'.mp4' ?>" target="_blank" class="btn btn-primary">Lihat Contoh Video</a>
                  <?php else: ?>
                    <button class=" btn btn-primary" disabled="">Tidak Ada Contoh Video</button>
                  <?php endif ?>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <h5>Youtube</h5>

                  <?php if ($users['youtube'] != ""): ?>
                    <a href="<?=$users['youtube']?>" target="_blank" class="btn btn-primary">Kunjungi Akun Youtube</a>
                  <?php else: ?>  
                  <button class=" btn btn-primary" disabled="">Tidak Ada Akun Youtube</button>
                  <?php endif ?>
                  
                  <h5>Instagram</h5>
                  <?php if ($users['instagram'] != ""): ?>
                    <a href="<?=$users['instagram']?>" target="_blank" class="btn btn-primary">Kunjungi Akun Instagram</a>
                  <?php else: ?>  
                  <button class=" btn btn-primary" disabled="">Tidak Ada Akun Instagram</button>
                  <?php endif ?>
                </div>
                <div class="col-md-6">                
                  <h5>Facebook</h5>
                  <?php if ($users['facebook'] != ""): ?>
                    <a href="<?=$users['facebook']?>" target="_blank" class="btn btn-primary">Kunjungi Akun Facebook</a>
                  <?php else: ?>  
                  <button class=" btn btn-primary" disabled="">Tidak Ada Akun Facebook</button>
                  <?php endif ?>
                </div>
              </div>
              <br>  
              <div class="row text-center">
                <div class="col-md-12">
                  <a id="btn_konfir" href="#" data-target="#konfirmasi" data-toggle="modal" data-id="<?php echo $users['id_edukator']; ?>" class="btn btn-success">Konfirmasi Pendaftaran Edukator</a>
                  
                </div>
              </div>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>

<div class="modal fade" id="konfirmasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi Edukator</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <form action="<?php echo site_url().'admin/konfirmasi_edukator/add' ?>" method="post">
                          <div class="content-box">
                              <div class="basic-group">
                                  <div class="form-group">
                                      <label for="pilih-konfirmasi"><span class="input-field-icon"><i class="fas fa-check"></i></span> Konfirmasi :</label>
                                      <select onchange="pilih(this.value)" class="form-control" name="konfir">
                                        <option value="terima">Terima</option>
                                        <option value="tolak">Tolak</option>
                                      </select>
                                  </div>
                                  <div class="form-group" id="pesan">
                                    <label for="pilih-konfirmasi"><span class="input-field-icon"><i class="fas fa-envelope"></i></span> Pesan :</label>
                                    <textarea class="form-control" rows="3" name="pesan">
                                    </textarea>
                                  </div>
                              </div>
                          </div>
                          <input id="id_user" type="hidden" name="id_user">
                          <div class="content-update-box text-center">
                              <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="konfirmasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi Edukator</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <form action="<?php echo site_url().'admin/konfirmasi_edukator/add' ?>" method="post">
                          <div class="content-box">
                              <div class="basic-group">
                                  <div class="form-group">
                                      <label for="pilih-konfirmasi"><span class="input-field-icon"><i class="fas fa-check"></i></span> Konfirmasi :</label>
                                      <select onchange="pilih(this.value)" class="form-control" name="konfir">
                                        <option value="terima">Terima</option>
                                        <option value="tolak">Tolak</option>
                                      </select>
                                  </div>
                                  <div class="form-group" id="pesan">
                                    <label for="pilih-konfirmasi"><span class="input-field-icon"><i class="fas fa-envelope"></i></span> Pesan :</label>
                                    <textarea class="form-control" rows="3" name="pesan">
                                    </textarea>
                                  </div>
                              </div>
                          </div>
                          <input id="id_user" type="hidden" name="id_user">
                          <div class="content-update-box text-center">
                              <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  $(document).on('click', '#btn_konfir', function(){
    var id = $(this).data('id');
    $('#id_user').attr('value', id);
  });
  
  $('#pesan').hide();

  function pilih(param) {
    if (param == 'terima') {
      $('#pesan').hide();
    }
    else{
     $('#pesan').show(); 
    }
  }
</script>