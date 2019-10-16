<?php

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        
        // if($this->login_model->is_role() != "1"){
        //     redirect("forbidden/");
        // }
    }
    public function index()
    {
        $data['page']='surveiGuru';
        $this->load->view('templates/header_s',$data);
        $this->load->view('templates/footer',$data);
    }
    

    public function surveiGuru()
    {
        $data['page']='surveiGuru';
        $this->load->view('templates/header_s',$data);
        $this->load->view('templates/footer',$data);
    }

    public function surveiKegiatan()
    {
        $data['page']='surveiKegiatan';
        $this->load->view('templates/header_s',$data);
        $this->load->view('templates/footer',$data);
    }
}