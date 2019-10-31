<div class="container">
    <div class="row">
    <div class="col-md-4">
    <?php $i = 1; foreach ($jml as $jml) : ?>
        <div
            class="card mb-3 widget-chart widget-chart2 bg-info text-left">
            <div class="widget-chart-content text-white">
                <div class="widget-chart-flex">
                    <div class="widget-title">Jumlah Kuesioner Terisi</div>
                    <div class="widget-subtitle opacity-7">
                    </div>
                </div>
                <div class="widget-chart-flex">
                    <div class="widget-numbers">
                    <?= $jml['total']; ?>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="col-md-4">
        <div
            class="card mb-3 widget-chart widget-chart2 bg-info text-left">
            <div class="widget-chart-content text-white">
                <div class="widget-chart-flex">
                    <div class="widget-title">Responden</div>
                    <div class="widget-subtitle opacity-7">Siswa</div>
                </div>
                <div class="widget-chart-flex">
                    <div class="widget-numbers text-white"><?php echo $jml['responden']; ?></div>
                    <div class="widget-description ml-auto opacity-7">
                        <!-- <i class="fa fa-arrow-right "></i>
                        <span class="pl-1">aaa</span> -->
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div
            class="card mb-3 widget-chart widget-chart2 bg-night-sky text-left">
            <div class="widget-chart-content text-white">
                <div class="widget-chart-flex">
                    <div class="widget-title">Kepuasan</div>
                    <div class="widget-subtitle text-white">Index</div>
                </div>
                <div class="widget-chart-flex">
                    <div class="widget-numbers text-white"><?php echo (int)$jml['kepuasan'];?>%</div>
                    <div class="widget-description ml-auto text-success">
                        <i class="fa fa-arrow-right "></i>
                        <span class="pr-1"> > Baik</span></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <?php  endforeach; ?>

<div class="card mb-3">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
            <i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Daftar Survei Guru
        </div>
    </div>
    <div class="card-body">
        <table style="width: 100%;" id="example"
                class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th>No</th>
                <th>No Survei</th>
                <th>Tanggal Survei</th>
                <th>Judul</th>
                <th>Responden Mengisi</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php $i = 1; foreach ($survei as $survei) : ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $survei['id_kuesioner']; ?></td>
                <td><?= $survei['tgl_mulai']; ?></td>
                <td><?= $survei['judul']; ?></td>
                <td><?= $survei['responden']; ?></td>
                <td>
                <a class="btn btn-info btn-sm mr-2" role="button" href="<?= base_url(); ?>admin/detailSurveiKegiatan/<?= $survei['id_kuesioner']; ?>">Hasil Survei</a>
                </td>
            </tr>
            <?php endforeach ; ?>
            </tbody>
        </table>
    </div>
</div>           