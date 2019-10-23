

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
      <form action="">
            <div class="form">
                <div class="">
                    <div class=" form-group">
                        <label for="" class="">Nama Guru</label>
                        <input name="nama_edit" id="" type="" class="form-control" required>
                    </div>
                </div>
                <div class="">
                    <div class=" form-group">
                        <label for="examplePassword11" class="">Kelas Ampuan</label>
                        <select name="kelas_edit[]" multiple="multiple" class="multiselect-dropdown form-control strings" required>
                            <?php if(isset($kelas)){foreach ($kelas as $kls) : ?>
                                <option id="idAmpu" value="<?= $kls['id_kelas']; ?>"><?= $kls['kelas']; ?> <?= $kls['jurusan']; ?> <?= $kls['sub']; ?></option>
                            <?php endforeach; }?> 
                        </select>
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
      <input type="" name="edit_id" required>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- end of edit ampuan -->