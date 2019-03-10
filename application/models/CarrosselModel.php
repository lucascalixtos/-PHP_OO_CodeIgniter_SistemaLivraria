<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'libraries/Carrossel.php';

 class CarrosselModel extends CI_Model{

    public function criar(){
        if(sizeof($_POST) == 0) return;

        $img1 = $this->input->post('img1');
        $img2 = $this->input->post('img2');
        $img3 = $this->input->post('img3');
        $carrossel = new Carrossel($img1, $img2, $img3);
        $carrossel->save();  
    }

    public function carrossel_data($id){
        $sql = "SELECT * FROM carrossel WHERE id = $id";
        $res = $this->db->query($sql);
        $data = $res->result_array();
        return $data[0];
    }

    
    public function carrossel_select(){
        $maxid = 0;
        $row = $this->db->query('SELECT MAX(id) AS `maxid` FROM `carrossel`')->row();
        if ($row) {
           $maxid = $row->maxid; 
        }
        return $maxid;
    }

     
}

