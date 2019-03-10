<?php

    class Carrossel{
        private $img1;
        private $img2;
        private $img3;

        private $db;

        function __construct($img1 = NULL,$img2 = NULL,$img3 = NULL){
            $this->img1 = $img1;
            $this->img2 = $img2;
            $this->img3 = $img3;

            $ci = &get_instance();
            $this->db = $ci->db;
        }

        public function save(){
            $sql = "INSERT INTO carrossel(img1, img2, img3) 
            VALUES ('$this->img1', '$this->img2', '$this->img3')"; 
             $this->db->query($sql);
        }

        
    }

?>