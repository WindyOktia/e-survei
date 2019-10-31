

<!-- edit ampuan -->
<div class="modal fade" id="editAmpuan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?php echo site_url('admin/updateGuru');?>" method="post">
            <div class="form">
                <div class="">
                    <div class=" form-group">
                        <label for="" class="">Nama Guru <span><i class="text-danger">*</i></span></label>
                        <input name="nama" id="nama" type="" class="form-control" required>
                    </div>
                </div>
                <div class="">
                    <div class=" form-group">
                        <label for="examplePassword11" class="">Kelas Ampuan <span><i>(Saat Ini)</i></span></label>
                        <textarea name="kelas_lama" id="kelas_lama" type="" class="form-control" disabled></textarea>
                    </div>
                </div>
                <div class="">
                    <div class=" form-group">
                        <label for="examplePassword11" class="">Kelas Ampuan <span class="text-danger"><i>(Baru) *</i></span></label>
                        <select name="kelas_edit[]" multiple="multiple" class="multiselect-dropdown form-control">
                            <?php if(isset($kelas)){foreach ($kelas as $kls) : ?>
                                <option value="<?= $kls['id_kelas']; ?>"><?= $kls['kelas']; ?> <?= $kls['jurusan']; ?> <?= $kls['sub']; ?></option>
                            <?php endforeach; }?> 
                        </select>
                    </div>
                </div>
                <div><i class="text-danger">*</i><span> = lewati jika tidak ada perubahan</span></div>
            </div>
      </div>
      <div class="modal-footer">
      <input type="hidden" name="id_guru" id="id_guru">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- end of edit ampuan -->

<!-- edit User -->
<div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="user" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="user">Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?php echo site_url('admin/updateUser');?>" method="post">
            <div class="form">
                <div class="">
                    <div class=" form-group">
                        <label for="" class="">Nama Siswa <span><i class="text-danger">*</i></span></label>
                        <input name="nama" id="nama" type="" class="form-control text-danger" required>
                    </div>
                </div>
                <div class="">
                    <div class=" form-group">
                        <label for="" class="">NIPD <span><i class="text-danger">*</i></span></label>
                        <input name="nipd" id="nipd" type="number" class="form-control text-danger" required>
                    </div>
                </div>
                <div class="">
                    <div class=" form-group">
                        <label for="examplePassword11" class="">Kelas<span><i class="text-danger">*</i></span></label>
                        <div class="row">
                          <div class="col-4">
                            <input name="kk" id="kelas" type="" class="form-control text-danger" disabled></div>
                          <div class="col">
                          <select name="kelas" class="multiselect-dropdown form-control text-danger">
                            <option value="0" selected>Tidak ada perubahan</option>
                            <?php if(isset($kelas)){foreach ($kelas as $kls) : ?>
                                <option value="<?= $kls['id_kelas']; ?>"><?= $kls['kelas']; ?> <?= $kls['jurusan']; ?> <?= $kls['sub']; ?></option>
                            <?php endforeach; }?> 
                          </select>
                        </div>
                        </div>
                        
                    </div>
                </div>
                <div class="">
                    <div class=" form-group">
                        <label for="" class="">Nama Ibu <span><i class="text-danger">*</i></span></label>
                        <input name="ibu" id="ibu" type="" class="form-control text-danger" required>
                    </div>
                </div>
                <div class="">
                    <div class=" form-group">
                        <label for="" class="">Password <span><i class="text-danger">*</i></span></label>
                        <input name="password" id="password" type="password" placeholder="password baru" class="form-control">
                        <input name="id_siswa" id="ids" type="hidden" class="form-control">
                    </div>
                </div>
                <div><i class="text-danger">*</i><span> = lewati jika tidak ada perubahan</span></div>
            </div>
      </div>
      <div class="modal-footer">
      <input type="hidden" name="id_guru" id="id_guru">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- end of edit User -->

<!-- edit nonregis -->
<div class="modal fade" id="nonRegis" tabindex="-1" role="dialog" aria-labelledby="user" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="user">Edit Siswa Non Regis</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?php echo site_url('admin/updateNonRegis');?>" method="post">
            <div class="form">
                <div class="">
                    <div class=" form-group">
                        <label for="" class="">Nama Siswa <span><i class="text-danger">*</i></span></label>
                        <input name="nama" id="nama_n" type="" class="form-control text-danger" required>
                    </div>
                </div>
                <div class="">
                    <div class=" form-group">
                        <label for="" class="">NIPD <span><i class="text-danger">*</i></span></label>
                        <input name="nipd" id="nipd_n" type="number" class="form-control text-danger" required>
                    </div>
                </div>
                <div class="">
                    <div class=" form-group">
                        <label for="examplePassword11" class="">Kelas<span><i class="text-danger">*</i></span></label>
                        <div class="row">
                          <div class="col-4">
                            <input name="kk" id="kelas_n" type="" class="form-control text-danger" disabled></div>
                          <div class="col">
                          <select name="kelas" class="multiselect-dropdown form-control text-danger">
                            <option value="0" selected>Tidak ada perubahan</option>
                            <?php if(isset($kelas)){foreach ($kelas as $kls) : ?>
                                <option value="<?= $kls['id_kelas']; ?>"><?= $kls['kelas']; ?> <?= $kls['jurusan']; ?> <?= $kls['sub']; ?></option>
                            <?php endforeach; }?> 
                          </select>
                        </div>
                        </div>
                        
                    </div>
                </div>
                <div class="">
                    <div class=" form-group">
                        <label for="" class="">Nama Ibu <span><i class="text-danger">*</i></span></label>
                        <input name="ibu" id="ibu_n" type="" class="form-control text-danger" required>
                    </div>
                </div>
                <input name="id_siswa" id="idn" type="hidden" class="form-control">
                <div><i class="text-danger">*</i><span> = lewati jika tidak ada perubahan</span></div>
            </div>
      </div>
      <div class="modal-footer">
      <input type="hidden" name="id_guru" id="id_guru">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- end of edit Pertanyaan -->

<!-- <div class="modal fade" id="editPertanyaan" tabindex="-1" role="dialog" aria-labelledby="user" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="user">Daftar Pertanyaan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      </div>
    </div>
  </div>
</div> -->

<!-- end of edit Pertanyaan -->