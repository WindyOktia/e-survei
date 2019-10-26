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

<div class="card no-shadow bg-transparent no-border rm-borders mb-3">
    <div class="card">
        <div class="no-gutters row">
            <div class="col-md-12 col-lg-4">
                <ul class="list-group list-group-flush">
                    <li class="bg-transparent list-group-item">
                        <div class="widget-content p-0">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Skor Kuesioner
                                        </div>
                                        <div class="widget-subheading">Total Skor Kuesioner
                                        </div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div
                                            class="widget-numbers ">
                                            <?= ($detail['sangat_baik']*4)+($detail['baik']*3)+($detail['cukup']*2)+($detail['buruk']*1);?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-12 col-lg-4 ">
                <ul class="list-group list-group-flush">
                    <li class="bg-transparent list-group-item">
                        <div class="widget-content p-0">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Skor Maksimum
                                        </div>
                                        <div class="widget-subheading">Skor Maksimum Kuesioner
                                        </div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers">
                                        <?= $jum*4 ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-12 col-lg-4">
                <ul class="list-group list-group-flush">
                    <li class="bg-transparent list-group-item">
                        <div class="widget-content p-0">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Nilai
                                        </div>
                                        <div class="widget-subheading ">Nilai Kuesioner
                                        </div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div
                                            class="widget-numbers text-success">
                                            <?php $nilai=((($detail['sangat_baik']*4)+($detail['baik']*3)+($detail['cukup']*2)+($detail['buruk']*1))/($jum*4))*100; echo(int)$nilai?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- <div class="card mb-2">
    <div class="container">Detail Info</div>
</div> -->

<div class="container">
    <div class="row">
    <div class="col-md-3">
        <div
            class="card mb-3 widget-chart widget-chart2 bg-info text-left">
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
            class="card mb-3 widget-chart widget-chart2 bg-info text-left">
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
            class="card mb-3 widget-chart widget-chart2 bg-warning text-left">
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
            class="card mb-3 widget-chart widget-chart2 bg-warning text-left">
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
<div class="container mb-3">
    <canvas id="kegiatan"></canvas>
</div>
<?php endforeach; ?>

