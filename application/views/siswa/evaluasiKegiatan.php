<div class="card mb-3 ">
        <div class="card-header-tab card-header">
            <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                <i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Daftar Survei Kegiatan
            </div>
            
        </div>
        <div class="card-body">
            <table style="width: 100%;" id="example"
                    class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Batas Pengisian</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($kuesioner)){$i=1;foreach ($kuesioner as $kuesioner) : ?>
                    <tr>
                        <td class="align-middle"><?= $i++ ?></td>
                        <td class="align-middle"><?= $kuesioner['judul']; ?></td>
                        <td class="align-middle"><?= $kuesioner['tgl_selesai']; ?></td>
                        <td class="align-middle"><a class="btn btn-info btn-sm" role="button" href="<?= base_url(); ?>siswa/formSurveiKegiatan/<?= $kuesioner['id_kuesioner']; ?>">Isi Kuesioner</a></td>
                        </td>
                    </tr>
                <?php endforeach; }?> 
                
                </tbody>
            </table>
        </div>
        
    </div>   