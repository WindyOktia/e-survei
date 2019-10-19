<div class="card mb-3 border-info">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
            <i class="header-icon fa fa-info-circle"> </i>Detail Informasi
        </div>
        
    </div>
    <div class="card-body">
    <!-- start detail -->
    <?php $i = 1; foreach ($detail as $detail) : ?>
        <h3>Nama Guru : <?= $detail['nama']; ?></h3>
        <p class="text-danger float-right">Batas Isi Kuesioner : <?= $detail['tgl_selesai']; ?></p>
        <input type="hidden" name="id_kuesioner" id="" value="<?= $detail['id_survei_guru']; ?>">
    <?php endforeach; ?>
    <!-- end detail -->
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
                <textarea id="exampleText" class="form-control" name="saran" placeholder="" required></textarea>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary float-right mb-3 mt-3" name="signup" value="Sign up">Submit
            </button>
        </div>
    </div>
</div>   