

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
                        <label for="" class="">Nama Guru</label>
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
                        <label for="examplePassword11" class="">Kelas Ampuan <span class="text-danger"><i>(Baru)</i></span></label>
                        <select name="kelas_edit[]" multiple="multiple" class="multiselect-dropdown form-control" required>
                            <?php if(isset($kelas)){foreach ($kelas as $kls) : ?>
                                <option value="<?= $kls['id_kelas']; ?>"><?= $kls['kelas']; ?> <?= $kls['jurusan']; ?> <?= $kls['sub']; ?></option>
                            <?php endforeach; }?> 
                        </select>
                    </div>
                </div>
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