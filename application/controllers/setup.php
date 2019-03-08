<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setup extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('option_model', 'option');
    }

    public function index(){
        if($this->option->get_option('setup_executado') == 1):
            redirect('setup/alterar','refresh');
        else:
            redirect('setup/instalar', 'refresh');
        endif;
    }

    public function instalar(){
        $this->load->view('common/header');
        $this->load->view('common/navbar');
        if($this->option->get_option('setup_executado') == 1):
            redirect('setup/alterar','refresh');
        endif;
        $this->load->view('painel/setup');
        

        $this->load->view('common/footer');
    }
}
