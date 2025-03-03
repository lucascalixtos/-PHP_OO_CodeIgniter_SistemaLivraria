<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Livraria extends CI_Controller {

	public function index(){
        $this->load->view('common/header');
        $this->load->view('common/navbar');
        
        $this->load->model('CarrosselModel');
        $carrossel = $this->CarrosselModel->carrossel_select();
        
        $this->load->model('CardModel');
        $card = $this->CardModel->card_select();

        $this->load->model('TextoModel');
        $texto = $this->TextoModel->texto_select();
        redirect('livraria/inicio/'.$carrossel.'/'.$card.'/'.$texto.'', 'refresh');

        $this->load->view('common/footer');
    }

    public function inicio($carrossel, $card, $texto){
		$this->load->view('common/header');
        $this->load->view('common/navbar');

        $this->load->model('CarrosselModel');
        $data = $this->CarrosselModel->carrossel_data($carrossel);
        $v['carrossel'] = $this->load->view('elementos/carrossel',$data,true);

        $this->load->model('CardModel');
        $data = $this->CardModel->card_data($card);
        $v['card'] = $this->load->view('elementos/card_group',$data,true);

        $this->load->model('TextoModel');
        $data = $this->TextoModel->texto_data($texto);
        $v['texto_inicio'] = $this->load->view('elementos/texto_inicio',$data,true);
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

    public function detalhar($id){
        $this->load->view('common/header');
        $this->load->view('common/navbar');
        $this->load->model('LivroModel');
        $data = $this->LivroModel->livro_data($id);
        $v['livro'] = $this->load->view('elementos/detalhes',$data,true);
        $this->load->view('elementos/layout_detalhar',$v);
        $this->load->view('common/footer');
    }

    public function sobre(){
        $this->load->view('common/header');
        $this->load->view('common/navbar');
        $v['sobre'] = $this->load->view('elementos/sobre','',TRUE);
        $this->load->view('elementos/layout_sobre',$v);

        $this->load->view('common/footer');
    }

}
?>