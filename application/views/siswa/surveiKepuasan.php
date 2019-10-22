<form id="signupForm" class="ml-2" action="<?php echo site_url('siswa/aksi');?>" method="post" novalidate="novalidate">
<div class="card mb-3 border-info">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
            <i class="header-icon fa fa-info-circle"> </i>Detail Informasi
        </div>
        
    </div>
    <div class="card-body">
    
        <h3>Judul</h3>
        <p>Deskripsi</p>
        <p class="text-danger float-right">Batas Isi Kuesioner : </p>
        <input type="hidden" name="id_kuesioner" id="" value="">
    </div>
</div>   

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
            <i class="header-icon fa fa-bars"> </i>Kuesioner
        </div>
        
    </div>
    <div class="card-body">
    <!-- start soal -->
        
    <!-- end soal -->
        <div class="form-group">
            <label class="mt-4" for="username">Saran / Masukan</label>
            <div>
                <textarea id="exampleText" class="form-control" name="saran" placeholder="" ></textarea>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary float-right mb-3 mt-3 aksi" name="signup" value="Sign up">Submit
            </button>
        </div>
    </div>
</div> 
</form>  