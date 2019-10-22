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
        <h5 class="card-title">Tambah Data Kategori</h5>
        <form id="signupForm" class="mx-auto" action="<?php echo base_url(). 'admin/tbhAspekKepuasan'; ?>" method="post" novalidate="novalidate">
        <div>
            <input type="text" name="aspek" class="border rounded form-control d-inline-block align-middle col-7 form-control" placeholder="ex. Proses KBM" required>
            <button class="btn btn-primary btn-sm d-inline-block align-middle ml-2" type="submit">Simpan</button>
        </div>
        </form>
    </div>
</div>
<div class="main-card card mb-3">
    <div class="card-body border border-warning">
        <h5 class="card-title">Tambah Pertanyaan dan Opsi</h5>
        <form id="signupForm" class="mx-auto" action="<?php echo base_url(). 'admin/tbhPertanyaanKepuasan'; ?>" method="post" novalidate="novalidate">
        <div>
                <div class="form-group col-6 align-middle">
                    <label for="username">Kategori</label>
                    <select name="aspek" class="multiselect-dropdown form-control">
                    <?php $i = 1; foreach ($kepuasan as $kepuasan) : ?>
                        <option value="<?= $kepuasan['id_aspek_kepuasan']; ?>"><?= $kepuasan['aspek']; ?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group col-10 d-inline-block align-middle">
                <div class="table-responsive">
						<table class="table" id="dynamic_field">
							<tr>
                            <td>1. </td>
								<td><input type="text" name="pertanyaan[]" placeholder="Masukkan Pertanyaan" class="form-control name_list" required/>
                               
                                    <div class="row mt-2">
                                        <div class="col-3">
                                            <input type="text" name="opsi_1" placeholder="Opsi" class="form-control name_list" required/>
                                        </div>
                                        <div class="col-3">
                                            <input type="text" name="opsi_2" placeholder="Opsi" class="form-control name_list" required/>
                                        </div>
                                        <div class="col-3">
                                            <input type="text" name="opsi_3" placeholder="Opsi" class="form-control name_list" required/>
                                        </div>
                                        <div class="col-3">
                                            <input type="text" name="opsi_4" placeholder="Opsi" class="form-control name_list" required/>
                                        </div>
                                    </div>
                                    </td>
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
                <i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Daftar Pertanyaan
            </div>
            
        </div>
        <div class="card-body">
            <table style="width: 100%;" id="example"
                    class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Pertanyaan</th>
                    <th>Aspek</th>
                    <th>Opsi 1</th>
                    <th>Opsi 2</th>
                    <th>Opsi 3</th>
                    <th>Opsi 4</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1; foreach ($soal as $soal) : ?>
                    <tr>
                        <td class="align-middle"><?= $i++ ?></td>
                        <td class="align-middle"><?= $soal['pertanyaan']; ?></td>
                        <td class="align-middle"><?= $soal['aspek']; ?></td>
                        <td class="align-middle"><?= $soal['opsi_1']; ?></td>
                        <td class="align-middle"><?= $soal['opsi_2']; ?></td>
                        <td class="align-middle"><?= $soal['opsi_3']; ?></td>
                        <td class="align-middle"><?= $soal['opsi_4']; ?></td>
                        <td class="align-middle">
                            <a class="btn btn-info btn-sm tombol-hapus" role="button" href="#">Edit</a>
                            <a class="btn btn-danger btn-sm tombol-hapus" role="button" href="<?= base_url(); ?>admin/hapusAspek/">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>