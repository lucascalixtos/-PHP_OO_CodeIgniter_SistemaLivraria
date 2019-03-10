<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'libraries/Texto.php';

 class TextoModel extends CI_Model{

    public function criar(){
        if(sizeof($_POST) == 0) return;
        
        $titulo= $this->input->post('titulo');
        $texto = $this->input->post('texto');
  
        $text = new Texto($titulo, $texto);
        $text->save();  
       
    }

    public function texto_data($id){
        $sql = "SELECT * FROM texto WHERE id = $id";
        $res = $this->db->query($sql);
        $data = $res->result_array();
        return $data[0];
    }

    
    public function texto_select(){
        $maxid = 0;
        $row = $this->db->query('SELECT MAX(id) AS `maxid` FROM `texto`')->row();
        if ($row) {
           $maxid = $row->maxid; 
        }
        return $maxid;
    }

     
}

