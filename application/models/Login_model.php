<?php

class Login_model extends CI_model
{
    function login($nipd,$pass)
    {   
        $this->db->where('nipd',$nipd);
        $this->db->where('password',$pass);
        $result = $this->db->get('user_siswa',1);
        return $result;
    }

    function validate($nipd,$nm_ibu){
        $this->db->where('nipd',$nipd);
        $this->db->where('nama_ibu',$nm_ibu);
        $result = $this->db->get('siswa_tmp',1);
        return $result;
    }

    function deleteTmp($id)
    {
        $this->db->delete('siswa_tmp', ['id' => $id]);
    }

    function addUser()
    {
        $data = [
            "nama" => $this->session->userdata('nama'),
            "nipd" => $this->session->userdata('nipd'),
            "nama_ibu" => $this->session->userdata('nama_ibu'),
            "id_kelas" => $this->session->userdata('id_kelas'),
            "password" => md5($this->input->post('password', true)),
            "role" => 2
        ];

        $this->db->insert('user_siswa', $data);
    }

    function addUserAdmin()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nipd" => $this->input->post('nipd', true),
            "nama_ibu" => 'admin',
            "id_kelas" => '0',
            "password" => md5($this->input->post('password', true)),
            "role" => 1
        ];

        $this->db->insert('user_siswa', $data);
    }

    function is_role()
    {
        return $this->session->userdata('role');
    }

    function getAdmin()
    {
        $role='1';//tampilkan role admin
        $ibu='admin';//tampilkan role admin
        return $this->db->get_where('user_siswa', ['role'=>$role,'nama_ibu'=>$ibu])->result_array();
    }

    function deleteAdmin($id)
    {
        $this->db->delete('user_siswa', ['id' => $id]);
    }
}