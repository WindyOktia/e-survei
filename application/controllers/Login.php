<?php

class Login extends CI_controller
{
    function __construct(){
		parent::__construct();
		$this->load->model('login_model');
        $this->load->library('form_validation');
	}

    public function login()
	{
		$nipd    = $this->input->post('nipd',TRUE);
		$pass = md5($this->input->post('password',TRUE));
		$validate = $this->login_model->login($nipd,$pass);
		if($validate->num_rows() > 0){
			$data  = $validate->row_array();
			$nipd  = $data['nipd'];
			$kelas  = $data['id_kelas'];
			$nama  = $data['nama'];
			$role = $data['role'];
			$sesdata = array(
				'nama'  => $nama,
				'id_kelas'  => $kelas,
				'nipd'     => $nipd,
				'role'    => $role,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($sesdata);
			if($role==2){
				redirect('siswa/');
			}else{
				redirect('admin/');}
			
		}else{
			echo $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert"><b>NIPD</b> dan <b>Password</b> tidak cocok</div>');
			redirect('welcome/');
		}
    }
      
    public function auth()
    {
        $nipd    = $this->input->post('nipd',TRUE);
        $nama_ibu = $this->input->post('namaIbu',TRUE);
        $validate = $this->login_model->validate($nipd,$nama_ibu);
        if($validate->num_rows() > 0){
            $data  = $validate->row_array();
            $id  = $data['id'];
            $nama  = $data['nama'];
            $namaibu  = $data['nama_ibu'];
            $kelas  = $data['id_kelas'];
            $no = $data['nipd'];
            $sesdata = array(
                'id'  => $id,
                'nama'  => $nama,
                'nipd'     => $no,
                'nama_ibu'     => $namaibu,
                'id_kelas'  => $kelas,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
            if($no){
                $data['nama'] =$nama;
                redirect('login/regis',$data);
            }else{
                redirect('login/');}
            
        }else{
            echo $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert"><b>NIPD</b> dan <b>Nama Ibu</b> tidak cocok</div>');
            redirect('login/validasi');
        }
    }

    public function tbhUser()
    {
        $this->form_validation->set_rules('password', 'Password', 'required');
        $id=$this->session->userdata('id');
        if ($this->form_validation->run() == false) {
            redirect('login/validasi');
        } else {   
            $this->login_model->addUser();
            $this->login_model->deleteTmp($id);
            redirect('welcome/');
        }
    }

    public function validasi()
    {
        $this->load->view('login/validasi');
    }

    public function regis()
	{
		$this->load->view('login/register');
    }

    function logout(){
        $this->session->sess_destroy();
        redirect('welcome/');
    }
}