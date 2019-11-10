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
        <a href="<?= base_url(); ?>export/export/<?= $id_survei; ?>/" class="mb-2 mr-2 btn-icon btn-pill btn btn-success float-right">
        <i class="fa fa-print btn-icon-wrapper"></i>Export </a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <ul
            class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav pt-0 pb-3">
            <li class="nav-item">
                <a role="tab" class="nav-link active" id="tab-0"
                    data-toggle="tab" href="#tab-content-0">
                    <span>Data Nilai</span>
                </a>
            </li>
            <li class="nav-item">
                <a role="tab" class="nav-link" id="tab-1" data-toggle="tab"
                    href="#tab-content-1">
                    <span>Komentar</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="tab-content mb-4">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0"
                role="tabpanel">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-card card">
                            <div class="card mb-3">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                        <i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Analisa Survei
                                    </div>
                                </div>
                                <div class="card-body">      
                                <table style="width: 100%;" id="komen"
                                            class="table table-hover table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Guru</th>
                                            <th>Responden</th>
                                            <th>SB</th>
                                            <th>B</th>
                                            <th>C</th>
                                            <th>K</th>
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
                        <div class="card mb-3">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                        <i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Daftar Masukan
                                    </div>
                                </div>
                                <div class="card-body">      
                                <table style="width: 100%;" id="example"
                                            class="table table-hover table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Guru</th>
                                            <th>Masukan</th>
                                            <th>Tanggal</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(isset($komen)){$n=1;foreach ($komen as $komen) : ?>
                                        <tr>
                                            <td><?= $n++ ?></td>
                                            <td><?= $komen['nama']; ?></td>
                                            <td><?= $komen['komentar']; ?></td>
                                            <td><?= $komen['tgl_komen']; ?></td>
                                            
                                        </tr>
                                        <?php endforeach; }?> 
                                        </tbody>
                                    </table>

                                </div>
                            </div> 
                                            </div>
                            </div>
                        </div>
                            
                    </div>
                </div>
            </div>
                </div>









