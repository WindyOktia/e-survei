<?php

class Kelas_model extends CI_model
{
    public function getAll()
    {
        return $this->db->get('kelas')->result_array();
    }

    public function getById()
    {
        
    }

    public function add()
    {
        $data = [
            "kelas" => $this->input->post('kelas', true),
            "jurusan" => $this->input->post('jurusan', true),
            "sub" => $this->input->post('jumlah', true)
        ];

        $this->db->insert('kelas', $data);
    }

    public function edit()
    {

    }

    public function delete($id)
    {
        $this->db->trans_start();
        $this->db->delete('kelas', ['id_kelas' => $id]);
        $this->db->delete('siswa_tmp', ['id_kelas' => $id]);
        $this->db->delete('user_siswa', ['id_kelas' => $id]);
        $this->db->delete('ampuan', ['id_kelas' => $id]);
        $this->db->delete('kuesioner_tmp', ['id_kelas' => $id]);
        $this->db->trans_complete();
    }
}