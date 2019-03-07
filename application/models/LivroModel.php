<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'libraries/Livro.php';

 class LivroModel extends CI_Controller{

    public function criar(){
        if(sizeof($_POST) == 0) return;

        $titulo = $this->input->post('titulo');
        $autor = $this->input->post('autor');
        $genero = $this->input->post('genero');
        $ano = $this->input->post('ano');
        $idioma = $this->input->post('idioma');
        $capa = $this->input->post('capa');
        $descr = $this->input->post('descr');
        $livro = new Livro($titulo, $autor, $genero, $ano, $idioma, $capa, $descr);
        $livro->save();
        
    }

 }

?>