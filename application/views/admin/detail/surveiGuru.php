<div class="card mb-3">
    <div class="card-body border border-info">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
            <h5><b>Informasi</b></h5>
        </div>
        <div class="row">
        <div class="col-3">
        <p>No Survei</p>
        <p>Tanggal Mulai</p>
        <p>Tanggal Selesai</p>
        <p>Jumlah Guru Ternilai</p>
        </div>
        <div class="col">
        <?php if(isset($survei)){$i=1;foreach ($survei as $survei) :  ?>
        <p>: <?= $survei['id_survei_guru']; ?></p>
        <p>: <?= $survei['tgl_mulai']; ?></p>
        <p>: <?= $survei['tgl_selesai']; ?></p>
        <?php endforeach; }?> 
        <p>: <?php $count=0;foreach($detail as $key){$count++;}echo $count;?></p>
        </div>
        </div>
        
    </div>
</div>  

<div class="card mb-3">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
            <i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Analisa Survei
        </div>
    </div>
    <div class="card-body">
        <table style="width: 100%;" id="example"
                class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama Guru</th>
                <th>Responden</th>
                <th>Point_SB</th>
                <th>Point_B</th>
                <th>Point_C</th>
                <th>Point_K</th>
                <th>Skor</th>
                <th>Skor Max</th>
                <th>Nilai</th>
                <th>Mutu</th>
            </tr>
            </thead>
            <tbody>
            <?php if(isset($detail)){$i=1;foreach ($detail as $detail) : ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $detail['nama']; ?></td>
                <td><?= $detail['responden']; ?></td>
                <td><?= $detail['sangat_baik']; ?></td>
                <td><?= $detail['baik']; ?></td>
                <td><?= $detail['cukup']; ?></td>
                <td><?= $detail['buruk']; ?></td>
                <td><?= $detail['Skor_guru']; ?></td>
                <td><?= $detail['Skor_maks']; ?></td>
                <td><?php $jum= ($detail['Skor_guru']/$detail['Skor_maks'])*100; echo (int)$jum ?></td>
                <td><?php $jum= ($detail['Skor_guru']/$detail['Skor_maks'])*100; 
                        if($jum<=25){
                            echo "Buruk";
                        }elseif($jum<=50){
                            echo "Cukup";
                        }elseif($jum<=75){
                            echo "Baik";
                        }else {
                            echo "Sangat Baik";
                        }?>
                </td>
            </tr>
            <?php endforeach; }?> 
            </tbody>
        </table>
    </div>
</div>  
