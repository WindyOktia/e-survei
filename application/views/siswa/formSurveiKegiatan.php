<div class="card mb-3 ">
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
        <?php $i = 1; $n = 1; foreach ($soal as $soal) : ?>
            <fieldset id="'.<?= $n++?>.'">
                <label for="soal"><?= $i++ ?>. <?= $soal['soal']; ?></label> 
                <div class="position-relative form-group ml-3">
                    <div class="form-row ml-3">
                        <div class="custom-radio custom-control col-md-3">
                            <input type="radio" id="exampleCustomRadio1" name="opsi" class="custom-control-input">
                            <label class="custom-control-label" for="exampleCustomRadio1">Sangat Baik</label>
                        </div>
                        <div class="custom-radio custom-control col-md-3">
                            <input type="radio" id="exampleCustomRadio2" name="opsi" class="custom-control-input">
                            <label class="custom-control-label" for="exampleCustomRadio2">Baik</label>
                        </div>
                        <div class="custom-radio custom-control col-md-3">
                            <input type="radio" id="exampleCustomRadio3" name="opsi" class="custom-control-input">
                            <label class="custom-control-label" for="exampleCustomRadio3">Cukup</label>
                        </div>
                        <div class="custom-radio custom-control col-md-3">
                            <input type="radio" id="exampleCustomRadio4" name="opsi" class="custom-control-input">
                            <label class="custom-control-label" for="exampleCustomRadio4">Kurang</label>
                        </div>
                    </div>
                </div>       
            </fieldset>
        <?php endforeach; ?>
    <!-- end soal -->
        <div class="form-group">
            <label class="mt-4" for="username">Saran / Masukan</label>
            <div>
                <textarea id="exampleText" class="form-control" name="saran" placeholder="" required></textarea>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary float-right mb-3 mt-3" name="signup" value="Sign up">Submit
            </button>
        </div>
    </div>
</div>   