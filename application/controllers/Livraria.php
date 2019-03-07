<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Livraria extends CI_Controller {

	public function index(){
		$this->load->view('common/header');
        $this->load->view('common/navbar');
        $v['carrossel'] = $this->load->view('elementos/carrossel','',true);
        $v['titulo'] = '<h1> Esse é o texto </h2>';
        $v['texto'] =  '<p>Apenas um teste</p>';
        $v['card_group'] = $this->load->view('elementos/card_group','',true);
        $this->load->view('elementos/layout', $v);
		$this->load->view('common/footer');
    }
    
    public function livros(){
		$this->load->view('common/header');
        $this->load->view('common/navbar');
        $this->load->view('common/footer');
    }

    public function insere_livro(){
        $this->load->view('common/header');
        $this->load->view('common/navbar');
        if(sizeof($_POST) > 0) print_r($_POST);
        $this->load->view('elementos/cadastro_livro');

        $this->load->view('common/footer');
    }
}
?>