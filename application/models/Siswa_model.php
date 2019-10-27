<?php

class Siswa_model extends CI_model
{
    public function getUser()
    {
        $role='2';//tampilkan kecuali role admin
        return $this->db->get_where('v_user_siswa', ['role'=>$role])->result_array();
    }

    public function getNonRegis()
    {
        return $this->db->get('v_siswa_tmp')->result_array();
    }

    public function getById()
    {
        
    }

    public function add()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nipd" => $this->input->post('nipd', true),
            "nama_ibu" => $this->input->post('namaIbu', true),
            "id_kelas" => $this->input->post('kelas', true)
        ];

        $this->db->insert('siswa_tmp', $data);
    }

    public function addMulti($kelas,$nama,$nipd,$namaIbu)
    {
        $this->db->trans_start();
			$result = array();
			    foreach($nama AS $key => $val){
				     $result[] = array(
				      'nama'  	=> $_POST['siswa'][$key],
				      'nipd'  	=> $_POST['nipd'][$key],
				      'nama_ibu'  	=> $_POST['namaIbu'][$key],
				      'id_kelas'  	=> $_POST['kelas']
				     );
			    }      
			//MULTIPLE INSERT TO DETAIL TABLE
			$this->db->insert_batch('siswa_tmp', $result);
		$this->db->trans_complete();
    }

    public function updateNonRegis($nama,$nipd,$kelas,$nama_ibu,$id)
    {
        $this->db->trans_start();
            if(!empty($nama)){
                $data  = array(
                    'nama' => $nama,
                    'nipd' => $nipd,
                    'nama_ibu' => $nama_ibu
                );
                $this->db->where('id',$id);
			    $this->db->update('siswa_tmp', $data);
            }
			
			
			if($kelas != 0){
                $data  = array(
                    'id_kelas' => $kelas
                );
				$this->db->where('id',$id);
			    $this->db->update('siswa_tmp', $data);
            }
			
		$this->db->trans_complete();
    }

    public function updateUser($nama,$nipd,$kelas,$nama_ibu,$password,$id)
    {
        $this->db->trans_start();
            if(!empty($nama)){
                $data  = array(
                    'nama' => $nama,
                    'nipd' => $nipd,
                    'nama_ibu' => $nama_ibu
                );
                $this->db->where('id',$id);
			    $this->db->update('user_siswa', $data);
            }
			
			
			if($kelas != 0){
                $data  = array(
                    'id_kelas' => $kelas
                );
				$this->db->where('id',$id);
			    $this->db->update('user_siswa', $data);
            }
            
            if(!empty($password)){
                $data  = array(
                    'password' => md5($password)
                );
                $this->db->where('id',$id);
			    $this->db->update('user_siswa', $data);
            }
			
		$this->db->trans_complete();
    }

    public function delete($id)
    {
        $this->db->delete('siswa_tmp', ['id' => $id]);
    }

    public function deleteUser($id)
    {
        $this->db->delete('user_siswa', ['id' => $id]);
    }
}