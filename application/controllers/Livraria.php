<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Livraria extends CI_Controller {

	public function index(){
		$this->load->view('common/header');
        $this->load->view('common/navbar');
        $v['carrossel'] = $this->load->view('elementos/carrossel','',true);
        $v['texto'] = '<h1> Esse é o texto </h2> <p>Apenas um teste</p>';
        $this->load->view('elementos/layout', $v);
		$this->load->view('common/footer');
	}
}
?>