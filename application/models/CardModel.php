<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'libraries/Card.php';

 class CardModel extends CI_Model{

    public function criar(){
        if(sizeof($_POST) == 0) return;
        
        $img1 = $this->input->post('img1');
        $title1 = $this->input->post('title1');
        $label1 = $this->input->post('label1');
        $img2 = $this->input->post('img2');
        $title2 = $this->input->post('title2');
        $label2 = $this->input->post('label2');
        $img3 = $this->input->post('img3');
        $title3 = $this->input->post('title3');
        $label3 = $this->input->post('label3');
        $card = new Card($img1, $title1, $label1, $img2, $title2, $label2, $img3, $title3, $label3);
        $card->save();  
       
    }

    public function card_data($id){
        $sql = "SELECT * FROM cards WHERE id = $id";
        $res = $this->db->query($sql);
        $data = $res->result_array();
        return $data[0];
    }

    
    public function card_select(){
        $maxid = 0;
        $row = $this->db->query('SELECT MAX(id) AS `maxid` FROM `cards`')->row();
        if ($row) {
           $maxid = $row->maxid; 
        }
        return $maxid;
    }

     
}

