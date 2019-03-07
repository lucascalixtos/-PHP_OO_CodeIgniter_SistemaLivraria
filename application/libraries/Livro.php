<?php

class Livro{
    private $titulo;
    private $autor;
    private $genero;
    private $ano;
    private $idioma;
    private $capa;
    private $descr;

    private $db;
    function __construct($titulo = null, $autor = null, $genero = null, $ano = null, $idioma = null, $capa = null, $descr = null){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->genero = $genero;
        $this->ano = $ano;
        $this->idioma = $idioma;
        $this->capa = $capa;
        $this->descr = $descr;

        $ci = &get_instance();
        $this->db = $ci->db;
    }

   public function save(){
        $sql = "INSERT INTO livros (titulo, autor, genero, ano, idioma, capa, descr) 
       VALUES ('$this->titulo', '$this->autor', '$this->genero', '$this->ano', '$this->idioma', '$this->capa', '$this->descr')"; 
        $this->db->query($sql);
    }

    public function getALL(){
        $sql = "SELECT * FROM livros";
        $res = $this->db->query($sql);
        return $res->result_array();
     }
    
  
}

?>