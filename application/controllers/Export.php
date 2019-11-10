<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Export extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library("excel");
        $this->load->model("Export_model");
    }

    public function index(){
        $this->load->view('welcome_message');
    }
    public function export($id){ 
        //membuat objek
        $objPHPExcel = new PHPExcel();
        $data = $this->db->query('SELECT v_a_guru.id_survei_guru, v_a_guru.id_guru, guru.nama, v_a_guru.responden, v_a_guru.sangat_baik, v_a_guru.baik, v_a_guru.cukup, v_a_guru.buruk, ((v_a_guru.sangat_baik * 4) + (v_a_guru.baik * 3) + (v_a_guru.cukup*2) + (v_a_guru.buruk*1)) AS Skor_guru, (SUM(CASE WHEN soal_guru.id_soal_aspek THEN 1 ELSE 0 END) * v_a_guru.responden * 4) AS Skor_maks FROM v_a_guru, soal_guru, guru WHERE v_a_guru.id_guru=guru.id_guru AND v_a_guru.id_survei_guru="'.$id.'" GROUP BY v_a_guru.id_survei_guru, v_a_guru.id_guru');
         // Nama Field Baris Pertama
        $fields = $data->list_fields();
        
        $col = 0;
        foreach ($fields as $field)
        {
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, 1, $field);
            $col++;
        }
 
        // Mengambil Data
        $row = 2;
        foreach($data->result() as $data)
        {
            $col = 0;
            foreach ($fields as $field)
            {
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $data->$field);
                $col++;
            }
 
            $row++;
        }
        $objPHPExcel->setActiveSheetIndex(0);

        //Set Title
        $objPHPExcel->getActiveSheet()->setTitle('Nilai Guru');


        $objPHPExcel->createSheet();

        // Add some data to the second sheet, resembling some different data types
        $objPHPExcel->setActiveSheetIndex(1);
        $data2 = $this->db->query('SELECT masukan_guru.id_survei_guru, masukan_guru.id_guru, guru.nama, masukan_guru.tgl_komen, masukan_guru.komentar FROM masukan_guru, guru WHERE masukan_guru.id_guru=guru.id_guru AND id_survei_guru="'.$id.'" ORDER BY guru.nama');
        $fields2 = $data2->list_fields();
        $col2 = 0;
        foreach ($fields2 as $field2)
        {
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col2, 1, $field2);
            $col2++;
        }
        $row = 2;
        foreach($data2->result() as $data2)
        {
            $col = 0;
            foreach ($fields2 as $field2)
            {
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $data2->$field2);
                $col++;
            }
 
            $row++;
        }

        // Rename 2nd sheet
        $objPHPExcel->getActiveSheet()->setTitle('Masukan');

        $objPHPExcel->setActiveSheetIndex(0);
        //Save ke .xlsx, kalau ingin .xls, ubah 'Excel2007' menjadi 'Excel5'
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

        //Header
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

        //Nama File
        header('Content-Disposition: attachment;filename="Survei_Guru"'.$id.'".xlsx"');

        //Download
        $objWriter->save("php://output");

    }

    

}

/* End of file Phpexcel.php */
/* Location: ./application/controllers/Phpexcel.php */