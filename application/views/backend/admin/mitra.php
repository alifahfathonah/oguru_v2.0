
<div class="row ">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> <?php echo $page_title; ?>
                <a href = "<?php echo site_url('admin/mitra_form/add_mitra_form'); ?>" class="btn btn-outline-primary btn-rounded alignToTitle"><i class="mdi mdi-plus"></i>Tambah Mitra</a>
            </h4>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
              <h4 class="mb-3 header-title">Mitra</h4>
              <div class="table-responsive-sm mt-4">
                <table id="basic-datatable" class="table table-striped table-centered mb-0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Logo Mitra</th>
                      <th>Nama Mitra</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                       foreach ($mitra->result_array() as $key => $mit): ?>
                         
                          <tr>
                              <td><?= $key+1?></td>
                              <td class="text-center">
                                <a href="<?= $mit['link']?>" target="_blank">
                                  <img src="<?php echo $this->mitra_model->get_mitra_image_url($mit['id']);?>" alt="" style="height: 50px; width: auto;" >
                                  </a>
                              </td>

                              <td><?=$mit['nama']?></td>
                              <td class="text-center">
                              <?php if ($mit['status'] == 0): ?>
                                  <i class="mdi mdi-circle" style="color: #f54842; font-size: 19px;" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tidak Aktif"></i>
                              <?php elseif ($mit['status'] == 1):?>
                                  <i class="mdi mdi-circle" style="color: #4CAF50; font-size: 19px;" data-toggle="tooltip" data-placement="top" title="Aktif" data-original-title="Aktif"></i>
                              <?php endif; ?>
                              </td>

                              <td class="text-center">
                                <div class="dropright dropbottom">
                                  <button type="button" class="btn btn-sm btn-outline-primary btn-rounded btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="mdi mdi-dots-vertical"></i>
                                  </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?= site_url('admin/mitra_form/edit_mitra_form/'.$mit['id']);?>" >Edit</a></li>
                                    <li><a class="dropdown-item" href="<?= site_url('admin/mitra/delete/'.$mit['id']); ?>" >Hapus</a></li>
                                    <?php if ($mit['status']==0): ?>
                                    <li><a class="dropdown-item" href="<?= site_url('admin/mitra/aktif/'.$mit['id']); ?>" >Aktifkan Mitra</a></li>
                                    <?php endif ?>
                                    <?php if ($mit['status']==1): ?>
                                    <li><a class="dropdown-item" href="<?= site_url('admin/mitra/nonaktif/'.$mit['id']); ?>" >Nonaktifkan Mitra</a></li>
                                    <?php endif ?>
                                </ul> 

                              </td>
                              
                          </tr>
                      <?php endforeach; ?>
                  </tbody>
              </table>
              </div>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
