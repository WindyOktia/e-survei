<?php

class Guru_model extends CI_model
{
    public function getAll()
    {
        return $this->db->get('guru')->result_array();
    }

    public function getAmpuan()
    {
        return $this->db->get('v_ampuan')->result_array();
    }
    
    // public function getById($id_guru)
    // {
    //     $this->db->select('*');
	// 	$this->db->from('guru');
	// 	$this->db->join('ampuan', 'guru.id_guru=ampuan.id_guru');
	// 	$this->db->join('kelas', 'ampuan.id_kelas=kelas.id_kelas');
	// 	$this->db->where('ampuan.id_guru',$id_guru);
	// 	$query = $this->db->get();
	// 	return $query;
    // }

    public function add($nama, $kelas)
    {
        $this->db->trans_start();
			//INSERT TO PACKAGE
			$data = [
                "nama" => $nama
            ];
    
            $this->db->insert('guru', $data);
			//GET ID PACKAGE
			$package_id = $this->db->insert_id();
			$result = array();
			    foreach($kelas AS $key => $val){
				     $result[] = array(
				      'id_guru'  	=> $package_id,
				      'id_kelas'  	=> $_POST['kelas'][$key]
				     );
			    }      
			//MULTIPLE INSERT TO DETAIL TABLE
			$this->db->insert_batch('ampuan', $result);
		$this->db->trans_complete();
    }

    public function update($nama,$kelas,$id_guru)
    {
        $this->db->trans_start();
			//UPDATE TO PACKAGE
			$data  = array(
				'nama' => $nama
			);
			$this->db->where('id_guru',$id_guru);
			$this->db->update('guru', $data);
			
			if(!empty($kelas)){
				//DELETE DETAIL PACKAGE
				$this->db->delete('ampuan', array('id_guru' => $id_guru));

				$result = array();
					foreach($kelas AS $key => $val){
						$result[] = array(
						'id_guru'  	=> $id_guru,
						'id_kelas'  	=> $_POST['kelas_edit'][$key]
						);
					}      
				//MULTIPLE INSERT TO DETAIL TABLE
				$this->db->insert_batch('ampuan', $result);
			}
			
		$this->db->trans_complete();
    }

    public function delete($id)
    {
        $this->db->trans_start();
			$this->db->delete('ampuan', array('id_guru' => $id));
			$this->db->delete('guru', array('id_guru' => $id));
		$this->db->trans_complete();
    }
}