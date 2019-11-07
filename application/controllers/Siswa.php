<?php

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('login_model');
        $this->load->model('kuesioner_model');
        
        if($this->login_model->is_role() != "2"){
            redirect("forbidden/");
        }
    }
    public function index()
    {
        redirect('siswa/surveiGuru');
    }
    
// Survey Guru
    public function surveiGuru()
    {
        $data['page']='surveiGuru';
        $data['sguru']=$this->kuesioner_model->getSurveiGuru();
        $this->load->view('templates/header_s',$data);
        $this->load->view('siswa/evaluasiGuru',$data);
        $this->load->view('templates/footer');
    }

    public function formSurveiGuru($idk,$idg)
    {   
        // $uri_segments= "siswa/surveiGuru";
        // $uri = base_url().$uri_segments;
        // if($this->kuesioner_model->aksiGuru($idg)){
        //     echo "<script>javascript:alert('Anda Sudah Mengisi Survei Ini '); window.location = '".$uri."'</script>";
        // }
        $data['page']='surveiGuru';
        // $data['id_kuesioner']=$idk;
        // $data['id_guru']=$idg;
        $data['detail']=$this->kuesioner_model->getThisGuru($idk,$idg);
        $data['soal']=$this->kuesioner_model->getSoalGuru();
        $this->load->view('templates/header_s',$data);
        $this->load->view('siswa/formSurveiGuru',$data);
        $this->load->view('templates/footer');
    }

    public function aksiGuru()
    {
        $nipd = $this->session->userdata('nipd');
        $date = date('Y-m-d H:i:s');
        $kuesioner = $this->input->post('id_survei',TRUE);
        $guru = $this->input->post('guru',TRUE);
        $opsi = $this->input->post('opsi',TRUE);
        $saran = $this->input->post('saran',TRUE);
        $this->kuesioner_model->addAksiGuru($nipd, $date, $kuesioner,$opsi,$guru,$saran);
        $this->session->set_flashdata('flash', 'Ditambahkan');
		redirect('siswa/surveiGuru');
    }
//-----------------------------------------------------------------End of survey Guru

// Survey Kegiatan

    public function surveiKegiatan()
    {
        $data['page']='surveiKegiatan';
        $data['kuesioner']=$this->kuesioner_model->getSurveiKegiatan();
        // $data['cek']=$this->kuesioner_model->getAksi();
        $this->load->view('templates/header_s',$data);
        $this->load->view('siswa/evaluasiKegiatan',$data);
        $this->load->view('templates/footer');
    }

    public function formSurveiKegiatan($id)
    {   
        $uri_segments= "siswa/surveiKegiatan";
        $uri = base_url().$uri_segments;
        if($this->kuesioner_model->aksi($id)){
            echo "<script>javascript:alert('Anda Sudah Mengisi Survei Ini '); window.location = '".$uri."'</script>";
        }
        
        $data['page']='surveiKegiatan';
        $data['detail']=$this->kuesioner_model->getDetailSurveiKegiatan($id);
        $data['soal']=$this->kuesioner_model->getSoalKegiatan($id);
        $this->load->view('templates/header_s',$data);
        $this->load->view('siswa/formSurveiKegiatan',$data);
        $this->load->view('templates/footer');
    }

    public function aksi()
    {
        $nipd = $this->session->userdata('nipd');
        $date = date('Y-m-d H:i:s');
        $kuesioner = $this->input->post('id_kuesioner',TRUE);
        $opsi = $this->input->post('opsi',TRUE);
        $saran = $this->input->post('saran',TRUE);
        $this->kuesioner_model->addAksi($nipd, $date, $kuesioner,$opsi,$saran);
        $this->session->set_flashdata('flash', 'Ditambahkan');
		redirect('siswa/surveiKegiatan');
    }
//-----------------------------------------------------------------End of survey Kegiatan

//Survei Kepuasan
    public function surveiKepuasan()
    {
        $data['page']='kepuasan';
        $this->load->view('templates/header_s',$data);
        $this->load->view('siswa/surveiKepuasan',$data);
        $this->load->view('templates/footer');
    }





//-----------------------------------------------------------------End of survey Kegiatan

}