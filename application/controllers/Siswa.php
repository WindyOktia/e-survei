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
        $data['page']='surveiGuru';
        $data['detail']=$this->kuesioner_model->getThisGuru($idk,$idg);
        $this->load->view('templates/header_s',$data);
        $this->load->view('siswa/formSurveiGuru',$data);
        $this->load->view('templates/footer');
    }
//-----------------------------------------------------------------End of survey Guru

// Survey Kegiatan

    public function surveiKegiatan()
    {
        $data['page']='surveiKegiatan';
        $data['kuesioner']=$this->kuesioner_model->getSurveiKegiatan();
        $this->load->view('templates/header_s',$data);
        $this->load->view('siswa/evaluasiKegiatan',$data);
        $this->load->view('templates/footer');
    }

    public function formSurveiKegiatan($id)
    {   
        $data['page']='surveiKegiatan';
        $data['detail']=$this->kuesioner_model->getDetailSurveiKegiatan($id);
        $data['soal']=$this->kuesioner_model->getSoalKegiatan($id);
        $this->load->view('templates/header_s',$data);
        $this->load->view('siswa/formSurveiKegiatan',$data);
        $this->load->view('templates/footer');
    }
//-----------------------------------------------------------------End of survey Kegiatan
}