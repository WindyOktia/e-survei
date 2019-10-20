<div class="container">
    <div class="row">
    <div class="col-md-4">
    <?php $i = 1; foreach ($jml as $jml) : ?>
        <div
            class="card mb-3 widget-chart widget-chart2 bg-primary text-left">
            <div class="widget-chart-content text-white">
                <div class="widget-chart-flex">
                    <div class="widget-title">Kuesioner</div>
                    <div class="widget-subtitle opacity-7">Jumlah
                    </div>
                </div>
                <div class="widget-chart-flex">
                    <div class="widget-numbers">
                    <?= $jml['jumlah']; ?>
                    </div>
                    <div class="widget-description ml-auto opacity-7">
                        <i class="fa fa-arrow-right "></i>
                        <span class="pl-1">99/100</span></div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="col-md-4">
        <div
            class="card mb-3 widget-chart widget-chart2 bg-primary text-left">
            <div class="widget-chart-content text-white">
                <div class="widget-chart-flex">
                    <div class="widget-title">Responden</div>
                    <div class="widget-subtitle opacity-7">Siswa</div>
                </div>
                <div class="widget-chart-flex">
                    <div class="widget-numbers text-white">88%</div>
                    <div class="widget-description ml-auto opacity-7">
                        <i class="fa fa-arrow-right "></i>
                        <span class="pl-1">352/370</span></div>
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
                    <div class="widget-numbers text-white">90%</div>
                    <div class="widget-description ml-auto text-success">
                        <i class="fa fa-arrow-right "></i>
                        <span class="pr-1"> > Baik</span></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

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
                <th>Tanggal Survei</th>
                <th>Judul</th>
                <th>Responden Mengisi</th>
                <th>Responden Tidak Mengisi</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>10-10-2010</td>
                <td>Pengenalan Lingkungan Sekolah</td>
                <td>213</td>
                <td>2</td>
                <td>
                <a class="btn btn-info btn-sm tombol-hapus mr-2" role="button" href="<?= base_url(); ?>admin/hapusKelas/">Detail Survei</a>
                </td>
            </tr>
            <tr>
                <td>10-10-2010</td>
                <td>Perpisahan</td>
                <td>210</td>
                <td>9</td>
                <td>
                <a class="btn btn-info btn-sm tombol-hapus mr-2" role="button" href="<?= base_url(); ?>admin/hapusKelas/">Detail Survei</a>
                </td>
            </tr>
            
            </tbody>
        </table>
    </div>
</div>           