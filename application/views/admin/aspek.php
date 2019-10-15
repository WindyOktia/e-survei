<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <!-- <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div> -->
    <?php endif; ?>


<div class="main-card card mb-3">
    <div class="card-body border border-warning">
        <h5 class="card-title">Tambah Data Aspek</h5>
        <form id="signupForm" class="mx-auto" action="<?php echo base_url(). 'admin/tbhAspek'; ?>" method="post" novalidate="novalidate">
        <div>
            <input type="text" name="aspek" class="border rounded form-control d-inline-block align-middle col-7 form-control" placeholder="" required>
            <button class="btn btn-primary btn-sm d-inline-block align-middle ml-2" type="submit">Simpan</button>
        </div>
        </form>
    </div>
</div>

<div class="main-card card mb-3">
    <div class="card-body border border-warning">
        <h5 class="card-title">Tambah Pertanyaan</h5>
        <form id="signupForm" class="mx-auto" action="<?php echo base_url(). 'admin/tbhPertanyaanAspek'; ?>" method="post" novalidate="novalidate">
        <div>
                <div class="form-group col-3 align-middle">
                    <label for="username">Apek Pertanyaan</label>
                    <select name="id_aspek" class="multiselect-dropdown form-control">
                    <?php $i = 1; foreach ($aspek as $asp) : ?>
                        <option value="<?= $asp['id_aspek']; ?>"><?= $asp['aspek']; ?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group col-10 d-inline-block align-middle">
                <div class="table-responsive">
						<table class="table" id="dynamic_field">
							<tr>
								<td><input type="text" name="pertanyaan[]" placeholder="Masukkan Pertanyaan" class="form-control name_list" /></td>
								<td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
							</tr>
						</table>
					</div>    
                </div>
                <div>
                    <button class="btn btn-primary ml-2" type="submit">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>


<div class="card mb-3 ">
        <div class="card-header-tab card-header">
            <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                <i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Daftar Aspek Pertanyaan
            </div>
            
        </div>
        <div class="card-body">
            <table style="width: 100%;" id="example"
                    class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Detail Pertanyaan</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1; foreach ($aspek as $asp) : ?>
                <tr>
                <td class="align-middle"><?= $i++ ?></td>
                    <td class="align-middle"><?= $asp['aspek']; ?></td>
                    <td class="align-middle">
                    <span>0 Pertanyaan</span>
                        <a class="btn btn-info btn-sm ml-2" role="button" href="">Detail</a>
                    </td>
                    <td class="align-middle">
                        <a class="btn btn-info btn-sm tombol-hapus" role="button" href="#">Edit</a>
                        <a class="btn btn-danger btn-sm tombol-hapus" role="button" href="<?= base_url(); ?>admin/hapusAspek/<?= $asp['id_aspek']; ?>">Hapus</a></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>