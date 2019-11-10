<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kelas_model');
        $this->load->model('Guru_model');
        $this->load->model('Kuesioner_model');
        $this->load->model('Siswa_model');
        $this->load->model('login_model');
        $this->load->library('form_validation');
        
        if($this->login_model->is_role() != "1"){
            redirect("forbidden/");
        }
    }

    public function index()
    {
        redirect('admin/surveiGuru'); 
    }
// Dashboard
    public function surveiGuru()
    {
        $data['page']='surveiGuru';
        $data['jml'] = $this->Kuesioner_model->getJumlahKuesionerGuru();
        $data['survei'] = $this->Kuesioner_model->getAllSurveiGuru();
        $this->load->view('templates/header', $data);
        $this->load->view('admin/surveiGuru',$data);  
        $this->load->view('templates/footer');  
    }

    public function detailSurveiGuru($id)
    {
        $data['page']='surveiGuru';
        $data['id_survei']=$id;
        $data['survei'] = $this->Kuesioner_model->getThisSurveiGuru($id);
        $data['detail'] = $this->Kuesioner_model->getDetailSurveiGuru($id);
        $data['komen'] = $this->Kuesioner_model->getKomenGuru($id);
        $this->load->view('templates/header', $data);
        $this->load->view('admin/detail/surveiGuru',$data);  
        $this->load->view('templates/footer'); 
    }

    public function surveiKegiatan()
    {
        $data['page']='surveiKegiatan';
        $data['jml'] = $this->Kuesioner_model->getJumlahKuesioner();
        $data['survei'] = $this->Kuesioner_model->getAllSurveiKegiatan();
        $this->load->view('templates/header', $data);
        $this->load->view('admin/surveiKegiatan',$data);
        $this->load->view('templates/footer');  
    }

    public function detailSurveiKegiatan($id)
    {
        $data['page']='surveiKegiatan';
        $data['detail']=$this->Kuesioner_model->getHasilSurveiKegiatan($id);
        $this->load->view('templates/header', $data);
        $this->load->view('admin/detail/surveiKegiatan',$data);
        $this->load->view('templates/footer',$data); 
    }

//---------------------------------------------------End Dashboard

// KuesionerGuru

    public function KuesionerGuru()
    {
        $data['page']='tbhKuesionerGuru';
        $data['guru'] = $this->Guru_model->getAll();
        $data['survei'] = $this->Kuesioner_model->getAllSurveiGuru();
        $this->load->view('templates/header', $data);
        $this->load->view('admin/tbhKuesionerGuru', $data);
        $this->load->view('templates/footer');  
    }

    public function tbhKuesionerGuru()
    {
        $guru = $this->input->post('guru',TRUE);
		$mulai = $this->input->post('mulai',TRUE);
		$selesai = $this->input->post('selesai',TRUE);
        $this->Kuesioner_model->AddKuesionerGuru($guru, $mulai,$selesai);
        $this->session->set_flashdata('flash', 'Ditambahkan');
		redirect('admin/KuesionerGuru');
    }

    public function hapusKuesionerGuru($id)
    {
        $this->Kuesioner_model->deleteKuesionerGuru($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/KuesionerGuru');
    }

//-------------------------------------------------- End Kuesioner Guru

//KuesionerKegiatan
    public function KuesionerKegiatan()
    {
        $data['page']='tbhKuesionerKegiatan';
        $data['kategori']=$this->Kuesioner_model->getKategori();
        $data['survei'] = $this->Kuesioner_model->getThisSurveiKegiatan();
        $data['kelas']=$this->Kelas_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/tbhKuesionerKegiatan', $data);
        $this->load->view('templates/footer');  
    }

    public function tbhKuesioner()
    {
        $judul = $this->input->post('judul',TRUE);
		$deskripsi = $this->input->post('deskripsi',TRUE);
		$kategori = $this->input->post('kategori',TRUE);
		$kelas = $this->input->post('kelas',TRUE);
		$mulai = $this->input->post('mulai',TRUE);
		$selesai = $this->input->post('selesai',TRUE);
        $this->Kuesioner_model->AddKuesioner($judul,$deskripsi,$kategori,$kelas,$mulai,$selesai);
        $this->session->set_flashdata('flash', 'Ditambahkan');
		redirect('admin/KuesionerKegiatan');
    }

    public function preview_k($id)
    {
        $data['page']='tbhKuesionerKegiatan';
        $data['detail']=$this->Kuesioner_model->getDetailSurveiKegiatan($id);
        $data['soal']=$this->Kuesioner_model->getSoalKegiatan_Admin($id);

        $this->load->view('templates/header', $data);
        $this->load->view('admin/preview_k', $data);
        $this->load->view('templates/footer');  
    }

    public function hapusKuesioner($id)
    {
        $this->Kuesioner_model->deleteKuesioner($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/KuesionerKegiatan');
    }
//-------------------------------------------------- End Kuesioner Kegiatan

// Kepuasan

    public function KuesionerKepuasan()
    {
        $data['page']='tbhKuesionerKepuasan';
        $data['kelas'] = $this->Kelas_model->getAll();
        $this->load->view('templates/header', $data);
        $this->load->view('admin/tbhKuesionerKepuasan', $data);
        $this->load->view('templates/footer');  
    }

    public function tbhKuesionerKepuasan()
    {
        $kelas = $this->input->post('kelas',TRUE);
		$mulai = $this->input->post('mulai',TRUE);
		$selesai = $this->input->post('selesai',TRUE);
        $this->Kuesioner_model->AddKuesionerKepuasan($kelas, $mulai,$selesai);
        $this->session->set_flashdata('flash', 'Ditambahkan');
		redirect('admin/KuesionerKepuasan');
    }

//-------------------------------------------------- End Kuesioner Kegiatan
// Siswa

    public function dataSiswa()
    {
        $data['page']='tbhDataSiswa';
        $data['kelas'] = $this->Kelas_model->getAll();
        $this->load->view('templates/header', $data);
        $this->load->view('admin/tbhDataSiswa', $data);
        $this->load->view('templates/footer');  
    }

    public function tbhDataSiswa()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nipd', 'NIPD', 'required|numeric');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('namaIbu', 'NamaIbu', 'required');

        if ($this->form_validation->run() == false) {
            redirect('admin/dataSiswa');
        } else {
            $this->Siswa_model->Add();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('admin/dataSiswa');
        }
    }

    public function tbhMultiDataSiswa()
    {
        $kelas = $this->input->post('kelas',TRUE);
		$nama = $this->input->post('siswa',TRUE);
		$nipd = $this->input->post('nipd',TRUE);
		$namaIbu = $this->input->post('namaIbu',TRUE);
        $this->Siswa_model->addMulti($kelas,$nama,$nipd,$namaIbu);
        $this->session->set_flashdata('flash', 'Ditambahkan');
		redirect('admin/dataSiswa');
    }

    public function siswaNonRegis()
    {
        $data['page']='siswaNonRegis';
        $data['nonregis'] = $this->Siswa_model->getNonRegis();
        $data['kelas'] = $this->Kelas_model->getAll();
        $this->load->view('templates/modalBox', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('admin/siswaNonRegis', $data);
        $this->load->view('templates/footer');  
    }

    public function userSiswa()
    {
        $data['page']='userSiswa';
        $data['user'] = $this->Siswa_model->getUser();
        $data['kelas'] = $this->Kelas_model->getAll();
        $this->load->view('templates/modalBox', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('admin/userSiswa', $data);
        $this->load->view('templates/footer');  
    }

    public function hapusSiswa($id)
    {
        $this->Siswa_model->delete($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/siswaNonRegis');
    }

    public function hapusUserSiswa($id)
    {
        $this->Siswa_model->deleteUser($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/userSiswa');
    }

    public function updateUser()
    {
        $nama = $this->input->post('nama',TRUE);
		$nipd = $this->input->post('nipd',TRUE);
		$kelas = $this->input->post('kelas',TRUE);
		$nama_ibu = $this->input->post('ibu',TRUE);
		$password = $this->input->post('password',TRUE);
        $id = $this->input->post('id_siswa',TRUE);
        $this->Siswa_model->updateUser($nama,$nipd,$kelas,$nama_ibu,$password,$id);
        $this->session->set_flashdata('flash', 'Ditambahkan');
		redirect('admin/userSiswa');
    }

    public function updateNonRegis()
    {
        $nama = $this->input->post('nama',TRUE);
		$nipd = $this->input->post('nipd',TRUE);
		$kelas = $this->input->post('kelas',TRUE);
		$nama_ibu = $this->input->post('ibu',TRUE);
        $id = $this->input->post('id_siswa',TRUE);
        $this->Siswa_model->updateNonRegis($nama,$nipd,$kelas,$nama_ibu, $id);
        $this->session->set_flashdata('flash', 'Ditambahkan');
		redirect('admin/siswaNonRegis');
    }
    //-------------------------------------------------- End Siswa

//Kelas

    public function kelas()
    {
        $data['page']='kelas';

        $data['kelas'] = $this->Kelas_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/kelas', $data);
        $this->load->view('templates/footer');  
    }

    public function tbhKelas()
    {
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric');

        if ($this->form_validation->run() == false) {
            redirect('admin/kelas');
        } else {
            $this->Kelas_model->Add();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('admin/kelas');
        }
    }

    public function hapusKelas($id)
    {
        $this->Kelas_model->delete($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/kelas');
    }
//-------------------------------------------------- End Kelas

//Guru

    public function guru()
    {
        $data['page']='guru';

        $data['ampuan'] = $this->Guru_model->getAmpuan();
        $data['kelas'] = $this->Kelas_model->getAll();

        $this->load->view('templates/modalBox',$data);
        $this->load->view('templates/header', $data);
        $this->load->view('admin/guru', $data);
        $this->load->view('templates/footer');  
    }

    // public function guruById(){
    //     $id_guru=$this->input->post('id_guru');
    // 	$kelas=$this->Guru_model->getById($id_guru)->result();
    // 	foreach ($kelas as $result) {
    // 		$value[] = (float) $result->id_kelas;
    // 	}
    // 	echo json_encode($value);
    // }

    public function updateGuru()
    {
        $nama = $this->input->post('nama',TRUE);
		$kelas = $this->input->post('kelas_edit',TRUE);
		$id_guru = $this->input->post('id_guru',TRUE);
        $this->Guru_model->update($nama,$kelas,$id_guru);
        $this->session->set_flashdata('flash', 'Ditambahkan');
		redirect('admin/guru');
    }
    
    public function tbhAmpuan()
    {
        $nama = $this->input->post('nama',TRUE);
		$kelas = $this->input->post('kelas',TRUE);
        $this->Guru_model->Add($nama,$kelas);
        $this->session->set_flashdata('flash', 'Ditambahkan');
		redirect('admin/guru');
    }

    public function hapusAmpuan($id)
    {
        $this->Guru_model->delete($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/guru');
    }

//-------------------------------------------------- End Guru   

//Pertanyaan

    public function pertanyaan()
    {
        $data['page']='pertanyaan';

        $data['kategori'] = $this->Kuesioner_model->getKategori();
        $this->load->view('templates/header', $data);
        $this->load->view('admin/kegiatan', $data);
        $this->load->view('templates/footer');  
    }

    public function editPertanyaan($id)
    {
        $data['page']='pertanyaan';
        $data['id_p']=$id;
        $data['pertanyaan']= $this->Kuesioner_model->getThisPertanyaan($id);
        $this->load->view('templates/header', $data);
        $this->load->view('admin/editPertanyaan', $data);
        $this->load->view('templates/footer');  
    }

    public function hapusPertanyaan($id,$idp)
    {
        $this->Kuesioner_model->deletePertanyaan($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/editPertanyaan/'.$idp.'');
    }

    public function tbhKategori()
    {
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');

        if ($this->form_validation->run() == false) {
            redirect('admin/pertanyaan');
        } else {
            $this->Kuesioner_model->addKategori();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('admin/pertanyaan');
        }
    }

    public function hapusKategori($id)
    {
        $this->Kuesioner_model->deleteKategori($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/pertanyaan');
    }

    public function tbhPertanyaan()
    {
        $id_kat = $this->input->post('id_kategori',TRUE);
		$pertanyaan = $this->input->post('pertanyaan',TRUE);
        $this->Kuesioner_model->AddPertanyaan($id_kat,$pertanyaan);
        $this->session->set_flashdata('flash', 'Ditambahkan');
		redirect('admin/pertanyaan');
    }

//-------------------------------------------------- End Pertanyaan

//Aspek Penilaian Guru

    public function aspekGuru()
    {
        $data['page']='aspekGuru';
        $data['soal'] = $this->Kuesioner_model->getSoalGuru();
        $this->load->view('templates/header', $data);
        $this->load->view('admin/pertanyaanGuru', $data);
        $this->load->view('templates/footer');

    }


    public function tbhPertanyaanGuru()
    {
		$pertanyaan = $this->input->post('pertanyaan',TRUE);
        $this->Kuesioner_model->AddPertanyaanGuru($pertanyaan);
        $this->session->set_flashdata('flash', 'Ditambahkan');
		redirect('admin/aspekGuru');
    }

    public function hapusAspek($id)
    {
        $this->Kuesioner_model->deleteAspek($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/aspekGuru');
    }
//-------------------------------------------------- End Pertanyaan Guru 

//SurveiKepuasan
    public function kepuasan()
    {
        $data['page']='kepuasan';
        $data['kepuasan'] = $this->Kuesioner_model->getAspekKepuasan();
        $data['soal'] = $this->Kuesioner_model->getSoalKepuasan();
        $this->load->view('templates/header', $data);
        $this->load->view('admin/kepuasan', $data);
        $this->load->view('templates/footer');
    }

    public function tbhAspekKepuasan()
    {
        $this->Kuesioner_model->addAspekKepuasan();
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('admin/kepuasan');
    }

    public function tbhPertanyaanKepuasan()
    {
        $pertanyaan = $this->input->post('pertanyaan',TRUE);
		$opsi1 = $this->input->post('opsi_1',TRUE);
		$opsi2 = $this->input->post('opsi_2',TRUE);
		$opsi3 = $this->input->post('opsi_3',TRUE);
		$opsi4 = $this->input->post('opsi_4',TRUE);
		$aspek = $this->input->post('aspek',TRUE);
        $this->Kuesioner_model->addPertanyaanKepuasan($pertanyaan, $opsi1, $opsi2, $opsi3, $opsi4, $aspek);
        $this->session->set_flashdata('flash', 'Ditambahkan');
		redirect('admin/kepuasan');
    }




//-------------------------------------------------- End Pertanyaan Guru 

//Admin
    public function admin()
    {
        $data['page']='tbhAdmin';
        $this->load->view('templates/header', $data);
        $this->load->view('admin/tbhDataAdmin');  
        $this->load->view('templates/footer');  
    }

    public function dftAdmin()
    {
        $data['page']='dftAdmin';
        $data['admin'] = $this->login_model->getAdmin();
        $this->load->view('templates/header', $data);
        $this->load->view('admin/dftAdmin',$data);  
        $this->load->view('templates/footer');  
    }

    public function tbhAdmin()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nipd', 'Nama', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == false) {
            redirect('admin/admin');
        } else {   
            $this->login_model->addUserAdmin();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('admin/admin');
        }
    }

    public function hapusAdmin($id)
    {
        $this->login_model->deleteAdmin($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/dftAdmin');
    }

    public function danger()
    {
        $data['page']='danger';
        $this->load->view('templates/header', $data);
        $this->load->view('admin/danger/reset');
        $this->load->view('templates/footer');  
    }

//-------------------------------------------------- End Admin
}

