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

<div class="main-card card mb-3">
    <div class="card-body border border-warning">
        <h5 class="card-title">Hapus Pertanyaan</h5>
        <table style="width: 100%;" id="example"
                    class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Pertanyaan</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($pertanyaan)){$i=1;foreach ($pertanyaan as $pertanyaan) : ?>
                    <tr>
                        <td class="align-middle"><?= $i++ ?></td>
                        <td class="align-middle"><?= $pertanyaan['soal']; ?></td>
                        <td>
                        <a class="btn btn-danger btn-sm tombol-hapus" role="button" href="<?= base_url(); ?>admin/hapusPertanyaan/<?= $pertanyaan['id_soal']; ?>/<?= $id_p; ?>">Hapus</a>
                        </td>
                        
                    </tr>
                <?php endforeach; }?> 
                
                </tbody>
            </table>
    </div>
</div>