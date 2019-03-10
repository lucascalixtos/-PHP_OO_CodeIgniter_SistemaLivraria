<?php

    class Card{
        private $img1;
        private $title1;
        private $label1;
        private $img2;
        private $title2;
        private $label2;
        private $img3;
        private $title3;
        private $label3;

        private $db;

        function __construct($img1 = NULL, $title1 = NULL, $label1 = NULL, $img2 = NULL, $title2 = NULL, 
        $label2 = NULL, $img3 = NULL, $title3 = NULL, $label3 = NULL ){
            $this->img1 = $img1;
            $this->title1= $title1;
            $this->label1= $label1;
            $this->img2 = $img2;
            $this->title2= $title2;
            $this->label2= $label2;
            $this->img3 = $img3;
            $this->title3= $title3;
            $this->label3= $label3;
            $ci = &get_instance();
            $this->db = $ci->db;
        }

        public function save(){
            $sql = "INSERT INTO cards(img1, title1, label1, 
            img2, title2, label2, img3, title3, label3) 
            VALUES ('$this->img1', '$this->title1', '$this->label1','$this->img2', '$this->title2', 
            '$this->label2','$this->img3', '$this->title3', '$this->label3')"; 
             $this->db->query($sql);
        }

        
    }

?>