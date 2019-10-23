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
        <h5 class="card-title">Tambah Pertanyaan</h5>
        <form id="signupForm" class="mx-auto" action="<?php echo base_url(). 'admin/tbhPertanyaanGuru'; ?>" method="post" novalidate="novalidate">
        <div>
                <div class="form-group col-10 d-inline-block align-middle">
                <div class="table-responsive">
						<table class="table" id="dynamicPertanyaanGuru">
							<tr>
								<td><input type="text" name="pertanyaan[]" placeholder="Masukkan Pertanyaan" class="form-control name_list" required/></td>
								<td><button type="button" name="add" id="addPertanyaanGuru" class="btn btn-success">Add More</button></td>
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
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1; foreach ($soal as $soal) : ?>
                    <tr>
                        <td class="align-middle"><?= $i++ ?></td>
                        <td class="align-middle"><?= $soal['pertanyaan']; ?></td>
                        <td class="align-middle">
                            <a class="btn btn-danger btn-sm tombol-hapus" role="button" href="<?= base_url(); ?>admin/hapusAspek/">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>