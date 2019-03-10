<?php

    class Texto{
        private $titulo;
        private $texto;

        private $db;

        function __construct($titulo = NULL, $texto = NULL){
            $this->titulo = $titulo;
            $this->texto = $texto;
    

            $ci = &get_instance();
            $this->db = $ci->db;
        }

        public function save(){
            $sql = "INSERT INTO texto(titulo, texto) 
            VALUES ('$this->titulo', '$this->texto')"; 
             $this->db->query($sql);
        }



        public function getById($id){
            $rs = $this->db->get_where('livros', "id = $id");
           return $rs->row_array();
        }

        
    }

?>