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
        <h5 class="card-title">Tambah Data Kelas</h5>
        <form id="signupForm" class="mx-auto" action="<?php echo base_url(). 'admin/tbhKelas'; ?>" method="post" novalidate="novalidate">
            <div>
                <div class="form-group col-4 d-inline-block align-middle">
                    <label for="username" >Kelas</label>
                    <select name="kelas" class="multiselect-dropdown form-control">
                        <option value="X">X</option>
                        <option value="XI">XI</option>
                        <option value="XII">XII</option>
                    </select>
                </div>
                <div class="form-group col-4 d-inline-block align-middle">
                    <label for="username" >Jurusan</label>
                    <select name="jurusan" class="multiselect-dropdown form-control">
                        <option value="IPA">IPA</option>
                        <option value="IPS">IPS</option>
                        <option value="Bahasa">Bahasa</option>
                    </select>
                </div>
                <div class="form-group col-2 d-inline-block align-middle">
                    <label for="username">Sub Kelas</label>
                    <input name="jumlah" id="exampleText" class="form-control" placeholder="0" type="number">      
                </div>
                <div class="form-group col-2 d-block align-middle">
                    <button type="submit" class="btn btn-primary align-middle" name="submit" value="Submit">Submit
                    </button>      
                </div>
            
            </div>
        </form>
    </div>
</div>


<div class="card mb-3 ">
        <div class="card-header-tab card-header">
            <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                <i class="header-icon fa fa-reorder mr-3 text-muted opacity-6" style="font-size:16px"> </i>Daftar Kelas
            </div>
        </div>
        <div class="card-body">
            <table style="width: 100%;" id="example"
                    class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Sub</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1; foreach ($kelas as $kls) : ?>
                <tr>
                <td class="align-middle"><?= $i++ ?></td>
                    <td class="align-middle"><?= $kls['kelas']; ?></td>
                    <td class="align-middle"><?= $kls['jurusan']; ?></td>
                    <td class="align-middle"><?= $kls['sub']; ?></td>
                    <td class="align-middle"><a class="btn btn-danger btn-sm tombol-hapus" role="button" href="<?= base_url(); ?>admin/hapusKelas/<?= $kls['id_kelas']; ?>">Hapus</a></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>                              
 