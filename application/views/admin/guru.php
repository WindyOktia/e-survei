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
        <h5 class="card-title">Tambah Data Guru</h5>
        <form id="signupForm" action="<?php echo site_url('admin/tbhAmpuan');?>" method="post">
            <div class="form-row">
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label for="" class="">Nama Guru</label>
                        <input name="nama" id="" type="" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="position-relative form-group">
                        <label for="examplePassword11" class="">Kelas Ampuan</label>
                        <select name="kelas[]" multiple="multiple" class="multiselect-dropdown form-control" required>
                            <?php if(isset($kelas)){foreach ($kelas as $kls) : ?>
                                <option value="<?= $kls['id_kelas']; ?>"><?= $kls['kelas']; ?> <?= $kls['jurusan']; ?> <?= $kls['sub']; ?></option>
                            <?php endforeach; }?> 
                        </select>
                    </div>
                </div>
            </div>
            <button class="mt-2 btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
</div>


<div class="card mb-3 ">
        <div class="card-header-tab card-header">
            <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                <i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Daftar Guru
            </div>
            
        </div>
        <div class="card-body">
            <table style="width: 100%;" id="example"
                    class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas Ampuan</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($ampuan)){$i=1;foreach ($ampuan as $dft) : ?>
                    <tr>
                        <td class="align-middle"><?= $i++ ?></td>
                        <td class="align-middle"><?= $dft['nama']; ?></td>
                        <td class="align-middle"><?= $dft['ampuan']; ?></td>
                        <td class="align-middle">
                        <button type="button" class="btn btn-sm btn-info edit" id="ampuan"  data-id_guru="<?= $dft['id_guru']; ?>" data-nama="<?= $dft['nama']; ?>" data-ampuan="<?= $dft['ampuan']; ?>" data-toggle="modal" data-target="#editAmpuan" >
                            Edit
                        </button>
                        <a class="btn btn-danger btn-sm tombol-hapus" role="button" href="<?= base_url(); ?>admin/hapusAmpuan/<?= $dft['id_guru']; ?>">Hapus</a></td>
                        </td>
                    </tr>
                <?php endforeach; }?> 
                
                </tbody>
            </table>
        </div>
        
    </div>   