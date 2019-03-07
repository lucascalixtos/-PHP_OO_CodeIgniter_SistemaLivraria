<?php

class Livro{
    private $titulo;
    private $autor;
    private $genero;
    private $ano;
    private $idioma;
    private $capa;
    private $descr;
    private $preco;

    private $db;
    function __construct($titulo = null, $autor = null, $genero = null, $ano = null, $idioma = null, $capa = null, $descr = null, $preco = null){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->genero = $genero;
        $this->ano = $ano;
        $this->idioma = $idioma;
        $this->capa = $capa;
        $this->descr = $descr;
        $this->preco = $preco;

        $ci = &get_instance();
        $this->db = $ci->db;
    }

   public function save(){
        $sql = "INSERT INTO livros (titulo, autor, genero, ano, idioma, capa, descr, preco) 
       VALUES ('$this->titulo', '$this->autor', '$this->genero', '$this->ano', '$this->idioma', '$this->capa', '$this->descr', '$this->preco')"; 
        $this->db->query($sql);
    }

    public function getALL(){
        $sql = "SELECT * FROM livros";
        $res = $this->db->query($sql);
        return $res->result_array();
     }
    
  
}

?>