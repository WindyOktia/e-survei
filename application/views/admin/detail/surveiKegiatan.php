<div class="card mb-3 border-info">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
            <i class="header-icon fa fa-info-circle"> </i>Detail Informasi
        </div>
        
    </div>
    <div class="card-body">
    <?php $i = 1; foreach ($detail as $detail) : $jum= ($detail['sangat_baik']+$detail['baik']+$detail['cukup']+$detail['buruk']);?>
        <h3><?= $detail['judul']; ?></h3>
        <p><?= $detail['deskripsi']; ?></p>
        <div class="row">
            <div class="col"><i class="fa fa-calendar-o text-danger"></i><span class="ml-2"><?= $detail['tgl_mulai'];?> - <?= $detail['tgl_selesai']?></span></div>
            <div class="col"><i class="fa fa-navicon text-danger"></i><span class="ml-2"><?= $jum/$detail['responden'];?></span></div>
            <div class="col"><i class="fa fa-user text-danger"></i><span class="ml-2"><?= $detail['responden'];?></span></div>
            <div class="col"><i class="fa fa-commenting-o text-danger"></i><span class="ml-2"><?= $jum ?></span></div>
        </div>
    </div>
</div>   

<div class="container">
    <div class="row">
    <div class="col-md-3">
        <div
            class="card mb-3 widget-chart widget-chart2 bg-primary text-left">
            <div class="widget-chart-content text-white">
                <div class="widget-chart-flex">
                    <div class="widget-title">Sangat Baik</div>
                    <div class="widget-subtitle opacity-7">Jumlah</div>
                </div>
                <div class="widget-chart-flex">
                    <div class="widget-numbers text-white"><span id="sb"><?php $sangat_baik=$detail['sangat_baik']/$jum*100; echo (int)$sangat_baik ?></span>%</div>
                    <div class="widget-description ml-auto opacity-7">
                        <i class="fa fa-arrow-right "></i>
                        <span class="pl-1"><?= $detail['sangat_baik']; ?>/<?= $jum ?></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div
            class="card mb-3 widget-chart widget-chart2 bg-primary text-left">
            <div class="widget-chart-content text-white">
                <div class="widget-chart-flex">
                    <div class="widget-title">Baik</div>
                    <div class="widget-subtitle opacity-7">Jumlah</div>
                </div>
                <div class="widget-chart-flex">
                    <div class="widget-numbers text-white"><span id="b"><?php $baik=$detail['baik']/$jum*100; echo (int)$baik ?></span>%</div>
                    <div class="widget-description ml-auto opacity-7">
                        <i class="fa fa-arrow-right "></i>
                        <span class="pl-1"><?= $detail['baik']; ?>/<?= $jum ?></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div
            class="card mb-3 widget-chart widget-chart2 bg-primary text-left">
            <div class="widget-chart-content text-white">
                <div class="widget-chart-flex">
                    <div class="widget-title">Cukup</div>
                    <div class="widget-subtitle opacity-7">Jumlah</div>
                </div>
                <div class="widget-chart-flex">
                    <div class="widget-numbers text-white"><span id="c"><?php $cukup=$detail['cukup']/$jum*100; echo (int)$cukup?></span>%</div>
                    <div class="widget-description ml-auto opacity-7">
                        <i class="fa fa-arrow-right "></i>
                        <span class="pl-1"><?= $detail['cukup']; ?>/<?= $jum ?></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div
            class="card mb-3 widget-chart widget-chart2 bg-primary text-left">
            <div class="widget-chart-content text-white">
                <div class="widget-chart-flex">
                    <div class="widget-title">Kurang</div>
                    <div class="widget-subtitle opacity-7">Jumlah</div>
                </div>
                <div class="widget-chart-flex">
                    <div class="widget-numbers text-white"><span id="k"><?php $kurang=$detail['buruk']/$jum*100; echo (int)$kurang ?></span>%</div>
                    <div class="widget-description ml-auto opacity-7">
                        <i class="fa fa-arrow-right "></i>
                        <span class="pl-1"><?= $detail['buruk']; ?>/<?= $jum ?></span></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
<div class="container">
    <canvas id="kegiatan"></canvas>
</div>
<?php endforeach; ?>
