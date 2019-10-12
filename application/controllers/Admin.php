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
        $data['page']='surveiGuru';
        $this->load->view('templates/header', $data);
        $this->load->view('admin/surveiGuru');  
        $this->load->view('templates/footer');  
    }
// Dashboard
    public function surveiGuru()
    {
        $data['page']='surveiGuru';
        $this->load->view('templates/header', $data);
        $this->load->view('admin/surveiGuru');  
        $this->load->view('templates/footer');  
    }

    public function surveiKegiatan()
    {
        $data['page']='surveiKegiatan';
        $this->load->view('templates/header', $data);
        $this->load->view('admin/surveiKegiatan');
        $this->load->view('templates/footer');  
    }

//---------------------------------------------------End Dashboard

// KuesionerGuru

    public function tbhKuesionerGuru()
    {
        $data['page']='tbhKuesionerGuru';
        $this->load->view('templates/header', $data);
        $this->load->view('admin/tbhKuesionerGuru');
        $this->load->view('templates/footer');  
    }

//-------------------------------------------------- End Kuesioner Guru

//KuesionerKegiatan
    public function tbhKuesionerKegiatan()
    {
        $data['page']='tbhKuesionerKegiatan';
        $this->load->view('templates/header', $data);
        $this->load->view('admin/tbhKuesionerKegiatan');
        $this->load->view('templates/footer');  
    }
//-------------------------------------------------- End Kuesioner Kegiatan

//DaftarKuesioner
    public function dftKuesioner()
    {
        $data['page']='dftKuesioner';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/footer');  
    }

//-------------------------------------------------- End Daftar Kuesioner

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

        $this->load->view('templates/header', $data);
        $this->load->view('admin/siswaNonRegis', $data);
        $this->load->view('templates/footer');  
    }

    public function userSiswa()
    {
        $data['page']='userSiswa';
        $data['user'] = $this->Siswa_model->getUser();
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

        $data['guru'] = $this->Guru_model->getAll();
        $data['kelas'] = $this->Kelas_model->getAll();


        $this->load->view('templates/header', $data);
        $this->load->view('admin/guru', $data);
        $this->load->view('templates/footer');  
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
        $this->load->view('admin/pertanyaan', $data);
        $this->load->view('templates/footer');  
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

//-------------------------------------------------- End Admin
}

