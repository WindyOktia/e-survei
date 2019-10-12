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

    <div class="main-card card">
    <div class="card-body">
        <h5 class="card-title">Tambah Data Admin</h5>
        <form id="signupForm" class="col-md-10 mx-auto" action="<?php echo site_url('admin/tbhAdmin');?>" method="post" novalidate="novalidate">
        
            <div class="form-group">
                <label for="username">Nama Administrator</label>
                <div>
                    <input type="text" class="form-control" id="username" name="nama" placeholder="Nama Admin" required>
                </div>
            </div>

            <div class="form-group">
                <label for="username">NIPD <i>(Sebagai NIPD Login)<i></label>
                <div>
                    <input type="number" class="form-control" id="username" name="nipd" placeholder="NIPD" required>
                </div>
            </div>
            
            <div class="form-group">
                <label for="username">Password</label>
                <div>
                    <input name="password" id="exampleText" class="form-control" placeholder="Password" type="password" required>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary float-right mb-3" name="signup" value="Sign up">Submit
                </button>
            </div>
        </form>
    </div>
</div>