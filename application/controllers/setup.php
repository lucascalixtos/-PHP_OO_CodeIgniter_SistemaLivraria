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
        //regras de validação
        $this->form_validation->set_rules('login', 'NOME', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('email', 'EMAIL', 'trim|required|valid_email');
        $this->form_validation->set_rules('senha', 'SENHA', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('senha2', 'REPITA A SENHA', 'trim|required|min_length[6]|matches[senha]');
        //verifica validação
        if($this->form_validation->run() == FALSE):
            if(validation_errors()):
                set_msg(validation_errors());
            endif;
        else:
            $dados_form = $this->input->post();
            $this->option->update_option('user_login', $dados_form['login']);
            $this->option->update_option('user_email', $dados_form['email']);
            $this->option->update_option('user_pass',password_hash($dados_form['senha'], PASSWORD_DEFAULT));
            
            $inserido = $this->option->update_option('setup_executado', 1);
            if($inserido):
                set_msg('<p>validação ok, logue-se</p>');
                redirect('setup/login','refresh');
            endif;
        endif;

        $this->load->view('painel/setup');
        

        $this->load->view('common/footer');
    }
}
