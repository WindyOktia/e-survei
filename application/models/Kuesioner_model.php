<?php

class Kuesioner_model extends CI_model
{

    public function getKategori()
    {
        return $this->db->get('kategori')->result_array();
    }

    public function getAspekKepuasan()
    {
        return $this->db->get('aspek_kepuasan')->result_array();
    }

    public function getAksi()
    {
        return $this->db->get_where('aksi', ['nipd'=> $this->session->userdata('nipd')])->result_array();
        // return $this->db->get('aksi')->result_array();
    }

    public function getThisPertanyaan($id)
    {
        return $this->db->get_where('soal', ['id_kategori'=> $id])->result_array();
    }

    public function getSoalGuru()
    {
        return $this->db->get('soal_guru')->result_array();
    }

    public function getSoalKepuasan()
    {
        return $this->db->get('v_s_kepuasan')->result_array();
    }

    public function getKomenGuru($id)
    {
        return $this->db->query('SELECT masukan_guru.id_masukan_guru, masukan_guru.nipd, masukan_guru.id_survei_guru, masukan_guru.id_guru, guru.nama, masukan_guru.tgl_komen, masukan_guru.komentar FROM masukan_guru, guru WHERE masukan_guru.id_guru=guru.id_guru AND id_survei_guru="'.$id.'" ORDER BY guru.nama')->result_array();
    }

    public function getDetailSurveiGuru($id)
    {
        return $this->db->query('SELECT v_a_guru.id_survei_guru, v_a_guru.id_guru, guru.nama, v_a_guru.responden, v_a_guru.sangat_baik, v_a_guru.baik, v_a_guru.cukup, v_a_guru.buruk, ((v_a_guru.sangat_baik * 4) + (v_a_guru.baik * 3) + (v_a_guru.cukup*2) + (v_a_guru.buruk*1)) AS Skor_guru, (SUM(CASE WHEN soal_guru.id_soal_aspek THEN 1 ELSE 0 END) * v_a_guru.responden * 4) AS Skor_maks FROM v_a_guru, soal_guru, guru WHERE v_a_guru.id_guru=guru.id_guru AND v_a_guru.id_survei_guru="'.$id.'" GROUP BY v_a_guru.id_survei_guru, v_a_guru.id_guru')->result_array();
        // return $this->db->query('SELECT v_a_guru.id_survei_guru, v_a_guru.id_guru, guru.nama, v_a_guru.responden, v_a_guru.sangat_baik, v_a_guru.baik, v_a_guru.cukup, v_a_guru.buruk, ((v_a_guru.sangat_baik * 4) + (v_a_guru.baik * 3) + (v_a_guru.cukup*2) + (v_a_guru.buruk*1)) AS Skor_guru, (SUM(CASE WHEN soal_guru.id_soal_aspek THEN 1 ELSE 0 END) * v_a_guru.responden * 4) AS Skor_maks,(CASE WHEN v_a_guru.id_guru IN(SELECT masukan_guru.id_guru FROM masukan_guru,v_a_guru WHERE masukan_guru.id_survei_guru=v_a_guru.id_survei_guru AND masukan_guru.id_guru=v_a_guru.id_guru AND masukan_guru.id_survei_guru="'.$id.'") THEN (SELECT masukan_guru.komentar FROM masukan_guru, v_a_guru WHERE masukan_guru.id_survei_guru=v_a_guru.id_survei_guru AND masukan_guru.id_guru=v_a_guru.id_guru AND masukan_guru.id_survei_guru="'.$id.'") ELSE "-" end) as komen FROM v_a_guru, soal_guru, guru WHERE v_a_guru.id_guru=guru.id_guru AND v_a_guru.id_survei_guru="'.$id.'" GROUP BY v_a_guru.id_survei_guru, v_a_guru.id_guru')->result_array();
        
    }

    public function getThisSurveiGuru($id)
    {
        return $this->db->get_where('survei_guru', ['id_survei_guru'=>$id])->result_array();
    }

    public function getAllSurveiGuru()
    {
        return $this->db->get('survei_guru')->result_array();
    }

    public function getAllSurveiKegiatan()
    {
        return $this->db->get('v_a_kegiatan')->result_array();
        // return $this->db->get('kuesioner')->result_array();
    }

    public function getThisSurveiKegiatan()
    {
        return $this->db->get('kuesioner')->result_array();
    }

    public function addKategori()
    {
        $data = [
            "kategori" => $this->input->post('kategori', true)
        ];

        $this->db->insert('kategori', $data);
    }
    public function addAspekKepuasan()
    {
        $data = [
            "aspek" => $this->input->post('aspek', true)
        ];

        $this->db->insert('aspek_kepuasan', $data);
    }

    public function deleteKategori($id)
    {
        $this->db->trans_start();
			$this->db->delete('soal', array('id_kategori' => $id));
			$this->db->delete('kategori', array('id_kategori' => $id));
		$this->db->trans_complete();
    }

    public function deletePertanyaan($id)
    {
        $this->db->trans_start();
			$this->db->delete('soal', array('id_soal' => $id));
		$this->db->trans_complete();
    }

    public function deleteAspek($id)
    {
        $this->db->trans_start();
			$this->db->delete('aspek', array('id_aspek' => $id));
			$this->db->delete('soal_aspek', array('id_aspek' => $id));
		$this->db->trans_complete();
    }

    public function addPertanyaan($id_kat,$pertanyaan)
    {
        $this->db->trans_start();
        
        $result = array();
            foreach($pertanyaan AS $key => $val){
                 $result[] = array(
                  'id_kategori'  	=> $id_kat,
                  'soal'  	=> $_POST['pertanyaan'][$key]
                 );
            }      
        //MULTIPLE INSERT TO DETAIL TABLE
        $this->db->insert_batch('soal', $result);
    $this->db->trans_complete();
    }

    public function addPertanyaanGuru($pertanyaan)
    {
        $this->db->trans_start();
        
        $result = array();
            foreach($pertanyaan AS $key => $val){
                 $result[] = array(
                  'pertanyaan'  	=> $_POST['pertanyaan'][$key]
                 );
            }      
        //MULTIPLE INSERT TO DETAIL TABLE
        $this->db->insert_batch('soal_guru', $result);
    $this->db->trans_complete();
    }

    public function addPertanyaanKepuasan($pertanyaan, $opsi1, $opsi2, $opsi3, $opsi4)
    {
        $this->db->trans_start();
			$result = array();
			    foreach($pertanyaan AS $key => $val){
				     $result[] = array(
				      'pertanyaan'  	=> $_POST['pertanyaan'][$key],
				      'id_aspek_kepuasan'  	=> $_POST['aspek'],
				      'opsi_1'  	=> $_POST['opsi_1'],
				      'opsi_2'  	=> $_POST['opsi_2'],
				      'opsi_3'  	=> $_POST['opsi_3'],
				      'opsi_4'  	=> $_POST['opsi_4']
				     );
			    }      
			//MULTIPLE INSERT TO DETAIL TABLE
			$this->db->insert_batch('soal_kepuasan', $result);
		$this->db->trans_complete();
    }

    public function addKuesioner($judul,$deskripsi,$kategori,$kelas,$mulai,$selesai)
    {
       $this->db->trans_start();
			//INSERT TO PACKAGE
			$data = [
                "judul" => $judul,
                "deskripsi" => $deskripsi,
                'tgl_mulai' => date_format(date_create($mulai), 'Y-m-d'),
                'tgl_selesai' => date_format(date_create($selesai), 'Y-m-d'),
                "id_kategori" => $kategori
            ];
    
            $this->db->insert('kuesioner', $data);
			//GET ID PACKAGE
			$package_id = $this->db->insert_id();
			$result = array();
			    foreach($kelas AS $key => $val){
				     $result[] = array(
				      'id_kuesioner'  	=> $package_id,
				      'id_kelas'  	=> $_POST['kelas'][$key]
				     );
			    }      
			//MULTIPLE INSERT TO DETAIL TABLE
			$this->db->insert_batch('kuesioner_tmp', $result);
		$this->db->trans_complete();
    }

    public function addKuesionerGuru($guru,$mulai,$selesai)
    {
       $this->db->trans_start();
			//INSERT TO PACKAGE
			$data = [
                'tgl_mulai' => date_format(date_create($mulai), 'Y-m-d'),
                'tgl_selesai' => date_format(date_create($selesai), 'Y-m-d')
            ];
    
            $this->db->insert('survei_guru', $data);
			//GET ID PACKAGE
			$package_id = $this->db->insert_id();
			$result = array();
			    foreach($guru AS $key => $val){
				     $result[] = array(
				      'id_survei_guru'  	=> $package_id,
				      'id_guru'  	=> $_POST['guru'][$key]
				     );
			    }      
			//MULTIPLE INSERT TO DETAIL TABLE
			$this->db->insert_batch('survei_guru_tmp', $result);
		$this->db->trans_complete();
    }

    public function addKuesionerKepuasan($kelas,$mulai,$selesai)
    {
       $this->db->trans_start();
			//INSERT TO PACKAGE
			$data = [
                'tgl_mulai' => date_format(date_create($mulai), 'Y-m-d'),
                'tgl_selesai' => date_format(date_create($selesai), 'Y-m-d')
            ];
    
            $this->db->insert('survei_kepuasan', $data);
			//GET ID PACKAGE
			$package_id = $this->db->insert_id();
			$result = array();
			    foreach($kelas AS $key => $val){
				     $result[] = array(
				      'id_survei_kepuasan'  	=> $package_id,
				      'id_kelas'  	=> $_POST['kelas'][$key]
				     );
			    }      
			//MULTIPLE INSERT TO DETAIL TABLE
			$this->db->insert_batch('survei_kepuasan_tmp', $result);
		$this->db->trans_complete();
    }

    public function deleteKuesionerGuru($id)
    {
        $this->db->trans_start();
			$this->db->delete('survei_guru', array('id_survei_guru' => $id));
			$this->db->delete('survei_guru_tmp', array('id_survei_guru' => $id));
			$this->db->delete('aksi_guru', array('id_survei_guru' => $id));
		$this->db->trans_complete();
    }

    public function deleteKuesioner($id)
    {
        $this->db->trans_start();
            
			$this->db->delete('kuesioner', array('id_kuesioner' => $id));
			$this->db->delete('kuesioner_tmp', array('id_kuesioner' => $id));
			$this->db->delete('aksi', array('id_kuesioner' => $id));
		$this->db->trans_complete();
    }

//----------------------------------------------------------------------------------------- SISWA Down here
    public function getSurveiKegiatan()
    {
        $id_kelas=$this->session->userdata('id_kelas');
        $nipd=$this->session->userdata('nipd');
        $this->db->select('*');
        $this->db->from('v_s_kegiatan');
        $this->db->where('id_kelas',$id_kelas); 
        $this->db->where('id_kuesioner NOT IN(select id_kuesioner from aksi where nipd='.$nipd.')'); 
        $query = $this->db->get(); 
        return $query->result_array();  
        // return $this->db->get_where('v_s_kegiatan', ['id_kelas'=> $this->session->userdata('id_kelas')])->result_array();
    }

    public function getSurveiGuru()
    {
        $id_kelas=$this->session->userdata('id_kelas');
        $nipd=$this->session->userdata('nipd');
        return $this->db->query('SELECT t1.id_survei_guru,t1.tgl_mulai, t1.tgl_selesai,t1.id_guru,t1.nama, 
        t1.id_kelas FROM (SELECT * FROM v_s_guru WHERE v_s_guru.id_kelas="'.$id_kelas.'") t1 LEFT JOIN 
        (SELECT v_s_guru.id_survei_guru,v_s_guru.tgl_mulai, v_s_guru.tgl_selesai,v_s_guru.id_guru,
        v_s_guru.nama, v_s_guru.id_kelas FROM v_s_guru, aksi_guru WHERE 
        aksi_guru.id_survei_guru=v_s_guru.id_survei_guru AND aksi_guru.id_guru=v_s_guru.id_guru AND 
        aksi_guru.nipd="'.$nipd.'" AND v_s_guru.id_kelas="'.$id_kelas.'") t2 ON (t1.id_survei_guru=t2.id_survei_guru AND 
        t1.id_guru=t2.id_guru) where t2.id_guru IS NULL')->result_array();
        // $id_kelas=$this->session->userdata('id_kelas');
        // $nipd=$this->session->userdata('nipd');
        // $this->db->select('*');
        // $this->db->from('v_s_guru');
        // $this->db->where('id_kelas',$id_kelas); 
        // $this->db->where('id_guru NOT IN(select id_guru from aksi_guru where nipd='.$nipd.')'); 
        // $query = $this->db->get(); 
        // return $query->result_array();  
        // return $this->db->get_where('v_s_guru', ['id_kelas'=> $this->session->userdata('id_kelas')])->result_array();
    }

    public function getDetailSurveiKegiatan($id)
    {
        return $this->db->get_where('kuesioner', ['id_kuesioner'=>$id])->result_array();
    }

    public function getHasilSurveiKegiatan($id)
    {
        return $this->db->get_where('v_a_kegiatan', ['id_kuesioner'=>$id])->result_array();
    }

    public function getSoalKegiatan($id)
    {
        return $this->db->get_where('v_soal_kegiatan', ['id_kuesioner'=>$id,'id_kelas'=>$this->session->userdata('id_kelas')])->result_array();
    }

    public function getSoalKegiatan_Admin($id)
    {
        $this->db->select('*');
        $this->db->from('v_soal_kegiatan');
        $this->db->where('id_kuesioner',$id);
        $this->db->group_by('id_soal'); 
        $query = $this->db->get(); 
        return $query->result_array();  
    }

    public function getThisGuru($idk,$idg)
    {
        return $this->db->get_where('v_s_guru', ['id_survei_guru'=>$idk,'id_guru'=>$idg,'id_kelas'=>$this->session->userdata('id_kelas')])->result_array();
    }

    public function addAksi($nipd, $date, $kuesioner, $opsi,$saran)
    {
        $this->db->trans_start();
			//INSERT TO PACKAGE
			$data = [
                "nipd" => $nipd,
                "tgl_isi" => $date,
                "id_kuesioner" => $kuesioner
            ];
    
            $this->db->insert('aksi', $data);
			//GET ID PACKAGE
			$package_id = $this->db->insert_id();
			$result = array();
			    foreach($opsi AS $key => $val){
				     $result[] = array(
				      'id_aksi'  	=> $package_id,
				      'soal_no'  	=> $key,
				      'id_opsi'  	=> $_POST['opsi'][$key]
				     );
			    }      
			//MULTIPLE INSERT TO DETAIL TABLE
            $this->db->insert_batch('aksi_tmp', $result);
            
            if(!empty($saran)){
                $value = [
                    "nipd" => $nipd,
                    "tgl_komen" => $date,
                    "id_kuesioner" => $kuesioner,
                    "komentar" => $saran
                ];

                $this->db->insert('masukan_kegiatan', $value);
            }

		$this->db->trans_complete();
    }

    public function addAksiGuru($nipd, $date, $kuesioner, $opsi,$guru,$saran)
    {
        $this->db->trans_start();
			//INSERT TO PACKAGE
			$data = [
                "nipd" => $nipd,
                "tgl_isi" => $date,
                "id_survei_guru" => $kuesioner,
                "id_guru" => $guru
            ];
    
            $this->db->insert('aksi_guru', $data);
			//GET ID PACKAGE
			$package_id = $this->db->insert_id();
			$result = array();
			    foreach($opsi AS $key => $val){
				     $result[] = array(
				      'id_aksi_guru'  	=> $package_id,
				      'soal_no'  	=> $key,
				      'id_opsi'  	=> $_POST['opsi'][$key]
				     );
			    }      
			//MULTIPLE INSERT TO DETAIL TABLE
            $this->db->insert_batch('aksi_guru_tmp', $result);

            if(!empty($saran)){
                $value = [
                    "nipd" => $nipd,
                    "tgl_komen" => $date,
                    "id_survei_guru" => $kuesioner,
                    "id_guru" => $guru,
                    "komentar" => $saran
                ];
                $this->db->insert('masukan_guru', $value);
            }

        $this->db->trans_complete();

        
    }

    public function aksi($id)
    {
        return $this->db->get_where('aksi', ['id_kuesioner'=>$id,'nipd'=>$this->session->userdata('nipd')])->result_array();
    }

    public function aksiGuru($idg)
    {
        return $this->db->get_where('aksi_guru', ['id_guru'=>$idg,'nipd'=>$this->session->userdata('nipd')])->result_array();
    }

 //Dashboard   

    public function getJumlahKuesioner()
    {
        // return $this->db->query('SELECT COUNT(id_kuesioner) AS jumlah, sum(responden) as responden, SUM(sangat_baik) AS sangat_baik, SUM(baik) AS baik, SUM(cukup) AS cukup, SUM(buruk) AS kurang FROM v_a_kegiatan')->result_array();
        return $this->db->query('SELECT COUNT(DISTINCT(aksi.id_kuesioner)) AS total, COUNT(DISTINCT(aksi.nipd)) AS responden,((SUM(v_a_kegiatan.sangat_baik+v_a_kegiatan.baik))/(SUM(v_a_kegiatan.sangat_baik+v_a_kegiatan.baik+v_a_kegiatan.cukup+v_a_kegiatan.buruk))*100) as kepuasan FROM aksi LEFT JOIN v_a_kegiatan on aksi.id_kuesioner=v_a_kegiatan.id_kuesioner')->result_array();
        // $this->db->select('count(id_kuesioner) as jumlah');
        // $this->db->from('kuesioner');
        // $query = $this->db->get(); 
        // return $query->result_array();  
    
    }
    public function getJumlahKuesionerGuru()
    {
        // return $this->db->query('SELECT count(DISTINCT(v_a_guru.id_survei_guru)) as jumlah,v_a_guru.id_survei_guru, sum(v_a_guru.responden)as responden,sum(v_a_guru.sangat_baik)as SB,sum(v_a_guru.baik) as B, sum(v_a_guru.cukup) as c, sum(v_a_guru.buruk) as k FROM `v_a_guru`')->result_array();
        return $this->db->query('SELECT COUNT(DISTINCT(aksi_guru.id_survei_guru)) AS total, COUNT(DISTINCT(aksi_guru.nipd)) AS responden,((SUM(v_a_guru.sangat_baik+v_a_guru.baik))/(SUM(v_a_guru.sangat_baik+v_a_guru.baik+v_a_guru.cukup+v_a_guru.buruk))*100) as kepuasan FROM aksi_guru LEFT JOIN v_a_guru ON aksi_guru.id_survei_guru=v_a_guru.id_survei_guru')->result_array();
        // $this->db->select('count(id_kuesioner) as jumlah');
        // $this->db->from('kuesioner');
        // $query = $this->db->get(); 
        // return $query->result_array();  
    }


//-------------------------------------------------------------------------------------> End of Dashboard


}