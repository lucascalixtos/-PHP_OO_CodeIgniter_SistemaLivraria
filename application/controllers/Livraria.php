<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Livraria extends CI_Controller {

	public function index(){
		$this->load->view('common/header');
        $this->load->view('common/navbar');
        $v['carrossel'] = $this->load->view('elementos/carrossel','',true);
        $v['titulo'] = '<h1> Bem vindo a livraria nobel</h2>';
        $v['texto'] =  '<p>A Livraria Nobel é uma empresa fundada em São Paulo no ano de 1943 pelo 
        italiano Cláudio Milano. A rede de franquias Nobel oferece aos seus clientes o melhor do mercado literário, além de papelaria e presentes em suas mais de 220 lojas espalhadas pelo Brasil e no exterior.</p>';
        $v['card_group'] = $this->load->view('elementos/card_group','',true);
        $this->load->view('elementos/layout', $v);
		$this->load->view('common/footer');
    }
    
    public function livros(){
		$this->load->view('common/header');
        $this->load->view('common/navbar');
        $this->load->model('LivroModel', 'model');
        $v['listar'] = $this->model->lista();
        $this->load->view('elementos/livros_view', $v); 

        $this->load->view('common/footer');
    }

    public function insere_livro(){
        $this->load->view('common/header');
        $this->load->view('common/navbar');
        $this->load->model('LivroModel', 'model');
        $this->model->criar();
        $this->load->view('elementos/cadastro_livro');

        $this->load->view('common/footer');
    }

    public function contato(){
        $this->load->helper('form');
        $this->load->view('common/header');
        $this->load->view('common/navbar');
        $v['mapa'] = $this->load->view('elementos/mapa', '', true);
        $v['contato'] = $this->load->view('elementos/form_contato', '', true);
        $this->load->view('elementos/view_contato', $v);
        $this->load->view('common/footer');
    }

    public function exibir(){
        $this->load->view('common/header');
        $this->load->view('common/navbar');
        
        $this->load->view('common/footer');
    }

}
?>