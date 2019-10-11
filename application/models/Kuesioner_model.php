<?php

class Kuesioner_model extends CI_model
{

    public function getKategori()
    {
        return $this->db->get('kategori')->result_array();
    }

    public function addKategori()
    {
        $data = [
            "kategori" => $this->input->post('kategori', true)
        ];

        $this->db->insert('kategori', $data);
    }

    public function deleteKategori($id)
    {
        $this->db->trans_start();
			$this->db->delete('soal', array('id_kategori' => $id));
			$this->db->delete('kategori', array('id_kategori' => $id));
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
}