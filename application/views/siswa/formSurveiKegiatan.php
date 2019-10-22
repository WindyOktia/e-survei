<form id="signupForm" class="ml-2" action="<?php echo site_url('siswa/aksi');?>" method="post" novalidate="novalidate">
<div class="card mb-3 border-info">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
            <i class="header-icon fa fa-info-circle"> </i>Detail Informasi
        </div>
        
    </div>
    <div class="card-body">
    <?php $i = 1; foreach ($detail as $detail) : ?>
        <h3><?= $detail['judul']; ?></h3>
        <p><?= $detail['deskripsi']; ?></p>
        <p class="text-danger float-right">Batas Isi Kuesioner : <?= $detail['tgl_selesai']; ?></p>
        <input type="hidden" name="id_kuesioner" id="" value="<?= $detail['id_kuesioner']; ?>">
    <?php endforeach; ?>
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
        <?php $i = 1; foreach ($soal as $soal) { ?>
                <label for="soal"><?= $i ?>. <?= $soal['soal']; ?></label>
                <div class="position-relative form-group ml-3">
                    <div class="form-row ml-3">
                        <div class="custom-radio custom-control col-md-3">
                            <input type="radio" id="exampleCustomRadio1<?=$i?>" name="opsi[<?=$i?>]" value="4" class="custom-control-input" required>
                            <label class="custom-control-label" for="exampleCustomRadio1<?=$i?>">Sangat Baik</label>
                        </div>
                        <div class="custom-radio custom-control col-md-3">
                            <input type="radio" id="exampleCustomRadio2<?=$i?>" name="opsi[<?=$i?>]" value="3" class="custom-control-input" required>
                            <label class="custom-control-label" for="exampleCustomRadio2<?=$i?>">Baik</label>
                        </div>
                        <div class="custom-radio custom-control col-md-3">
                            <input type="radio" id="exampleCustomRadio3<?=$i?>" name="opsi[<?=$i?>]" value="2" class="custom-control-input" required>
                            <label class="custom-control-label" for="exampleCustomRadio3<?=$i?>">Cukup</label>
                        </div>
                        <div class="custom-radio custom-control col-md-3">
                            <input type="radio" id="exampleCustomRadio4<?=$i?>" name="opsi[<?=$i?>]" value="1" class="custom-control-input" required>
                            <label class="custom-control-label" for="exampleCustomRadio4<?=$i?>">Kurang</label>
                        </div>
                    </div>
                </div>
        <?php $i++;} ?>
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