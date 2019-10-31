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

<div class="row">
    <div class="col-md-12">
        <ul
            class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav pt-0 pb-3">
            <li class="nav-item">
                <a role="tab" class="nav-link active" id="tab-0"
                    data-toggle="tab" href="#tab-content-0">
                    <span>Single Data</span>
                </a>
            </li>
            <li class="nav-item">
                <a role="tab" class="nav-link" id="tab-1" data-toggle="tab"
                    href="#tab-content-1">
                    <span>Multiple Data</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0"
                role="tabpanel">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-card card">
                                <div class="card-body">
                                    <h5 class="card-title">Tambah Data Siswa</h5>
                                    <form id="signupForm" class="col-md-10 mx-auto" action="<?php echo site_url('admin/tbhDataSiswa');?>" method="post" novalidate="novalidate">
                                    
                                        <div class="form-group">
                                            <label for="username">Nama</label>
                                            <div>
                                                <input type="text" class="form-control" id="username" name="nama" placeholder="" required>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="username">NIPD</label>
                                            <div>
                                                <input name="nipd" id="exampleText" class="form-control" placeholder="" type="number" minlength=3>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="username">Kelas</label>
                                            <select name="kelas" class="multiselect-dropdown form-control" required>
                                            <?php if(isset($kelas)){foreach ($kelas as $kls) : ?>
                                                            <option value="<?= $kls['id_kelas']; ?>"><?= $kls['kelas']; ?> <?= $kls['jurusan']; ?> <?= $kls['sub']; ?></option>
                                                        <?php endforeach; }?> 
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="username">Nama Ibu</label>
                                            <input name="namaIbu" id="exampleText" class="form-control" placeholder="ex. Rohayati" type="" required>      
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary float-right mb-3" name="signup" value="Sign up">Submit
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                            </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane tabs-animation fade" id="tab-content-1"
                role="tabpanel">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="main-card card">
                                <div class="card-body">
                                    <h5 class="card-title">Tambah Data</h5>
                                    <form id="signupForm" class="ml-2" action="<?php echo site_url('admin/tbhMultiDataSiswa');?>" method="post" novalidate="novalidate">
                                    
                                        <div class="form-group">
                                            <label for="username">Kelas</label>
                                            <select name="kelas" class="multiselect-dropdown form-control col-2" required>
                                            <?php if(isset($kelas)){foreach ($kelas as $kls) : ?>
                                                            <option value="<?= $kls['id_kelas']; ?>"><?= $kls['kelas']; ?> <?= $kls['jurusan']; ?> <?= $kls['sub']; ?></option>
                                                        <?php endforeach; }?> 
                                            </select>
                                        </div>
                                        <div class="table-responsive">
                                                <table class="table" id="dynamicSiswa">
                                                    <tr>
                                                        <td>
                                                            <label for="">1. </label>
                                                            <input type="text" name="siswa[]" placeholder="Nama Siswa" class="form-control name_list col-4 d-inline-block" required/>
                                                            <input type="number" name="nipd[]" placeholder="NIPD" class="form-control name_list col-2 d-inline-block" minlength=3/>
                                                            <input type="text" name="namaIbu[]" placeholder="Nama Ibu" class="form-control name_list col-4 d-inline-block" required/>
                                                        </td>
                                                        <td><button type="button" name="addSiswa" id="addSiswa" class="btn btn-success">Add More</button></td>
                                                    </tr>
                                                </table>
                                            </div>    
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary mb-3 ml-4" name="signup" value="">Submit
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                            </div>
                            </div>
                        </div>
                            
                    </div>
                </div>
            </div>
                </div>


