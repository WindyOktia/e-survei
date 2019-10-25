<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <!-- <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div> -->
    <?php endif; ?>


<div class="card mb-3 ">
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
                    <th>No Dokumen</th>
                    <th>Nama Guru</th>
                    <th>Tanggal Mulai</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($sguru)){$i=1;foreach ($sguru as $sguru) : ?>
                    <tr>
                        <td class="align-middle"><?= $i++ ?></td>
                        <td class="align-middle"><?= $sguru['id_survei_guru']; ?></td>
                        <td class="align-middle"><?= $sguru['nama']; ?></td>
                        <td class="align-middle"><?= $sguru['tgl_mulai']; ?></td>
                        <td class="align-middle">
                        <a class="btn btn-info btn-sm" role="button" href="<?= base_url(); ?>siswa/formSurveiGuru/<?= $sguru['id_survei_guru']; ?>/<?= $sguru['id_guru']; ?>">Isi Kuesioner</a>
                       
                        </td>
                        </td>
                    </tr>
                <?php endforeach; }?> 
                
                </tbody>
            </table>
        </div>
        
    </div>   