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

<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Mulai Survei Guru</h5>
        <form id="signupForm" class="col-md-10 mx-auto" method="post" action="<?php echo base_url(). 'admin/tbhKuesionerGuru'; ?>" novalidate="novalidate">
            <div class="form-group">
            <label for="username">Target Guru</label>
            <div class="form-row">
                <div class="col-md-12">
                    <select id="guru" name="guru[]" multiple="multiple" class="multiselect-dropdown form-control" required>
                        <?php if(isset($guru)){foreach ($guru as $guru) : ?>
                            <option value="<?= $guru['id_guru']; ?>" selected><?= $guru['nama']; ?> </option>
                        <?php endforeach; }?> 
                    </select>
                </div>
                <div class="col">
                    <!-- <button type="button" class="btn btn-primary float-right" id="select_all" name="select_all" value="Select All">Pilih Semua
                    </button> -->
                </div>
            </div>
            
        </div>

            <div class="form-group">
                <label for="lastname">Durasi Kuesioner</label>
                <div class="form-row">
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="mulai"  data-toggle="datepicker" placeholder="Tanggal Mulai" autocomplete="off" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="selesai"  data-toggle="datepicker" placeholder="Tanggal Selesai" autocomplete="off" required>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary float-right mb-4" name="" value="">Submit
                </button>
            </div>
        </form>
    </div>
</div>

<div class="card mb-3 ">
        <div class="card-header-tab card-header">
            <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                <i class="header-icon fa fa-reorder mr-3 text-muted opacity-6" style="font-size:16px"> </i>Daftar Survei
            </div>
        </div>
        <div class="card-body">
            <table style="width: 100%;" id="example"
                    class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>No Dokumen Survei</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1; foreach ($survei as $survei) : ?>
                <tr>
                <td class="align-middle"><?= $i++ ?></td>
                    <td class="align-middle"><?= $survei['id_survei_guru']; ?></td>
                    <td class="align-middle"><?= $survei['tgl_mulai']; ?></td>
                    <td class="align-middle"><?= $survei['tgl_selesai']; ?></td>
                    <td class="align-middle"><a class="btn btn-danger btn-sm tombol-hapus" role="button" href="<?= base_url(); ?>admin/hapusKuesionerGuru/<?= $survei['id_survei_guru']; ?>">Hapus</a></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>                              
 
