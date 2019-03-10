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

    public function login(){
        $this->load->view('common/header');
        $this->load->view('common/navbar');
        if($this->option->get_option('setup_executado') != 1):
            redirect('setup/instalar','refresh');
        endif;
        //regras de validação
        $this->form_validation->set_rules('login', 'NOME', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('senha', 'SENHA', 'trim|required|min_length[6]');
        //verifica validação
        if($this->form_validation->run() == FALSE):
            if(validation_errors()):
                set_msg(validation_errors());
            endif;
        else:
            $dados_form = $this->input->post();
            if($this->option->get_option('user_login') == $dados_form['login']):
                //Usuario existe
                if(password_verify($dados_form['senha'], $this->option->get_option('user_pass'))):
                    //senha ok, faz login
                    $this->session->set_userdata('logged', TRUE);
                    $this->session->set_userdata('user_login', $dados_form['login']);
                    $this->session->set_userdata('user_email', $this->option->get_option('user_email'));
                    //faz redirect para o painel
                    redirect('setup/alterar');
                else:
                    set_msg('<p>Senha incorreta</p>');

                endif; //senha incorreta
            else:
                set_msg('<p>Senha inexistente</p>');
            endif;
        endif;
        $this->load->view('painel/login');
 
        $this->load->view('common/footer');
    }

    public function alterar(){
        verifica_login();
        $this->load->view('common/header');
        $this->load->view('painel/navbar_painel');

        $this->form_validation->set_rules('login', 'NOME', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('email', 'EMAIL', 'trim|required|valid_email');
        $this->form_validation->set_rules('senha', 'SENHA', 'trim|min_length[6]');
        
        if(isset($_POST['senha']) && $_POST['senha'] != ''):
            $this->form_validation->set_rules('senha', 'REPITA A SENHA', 'trim|required|min_length[6]|matches[senha]');
        endif;

        if($this->form_validation->run() == FALSE):
            if(validation_errors()):
                set_msg(validation_errors());
            endif;
        else:
            $dados_form = $this->input->post();
            $this->option->update_option('user_login', $dados_form['login']);
            $this->option->update_option('user_email', $dados_form['email']);
            if(isset($dados_form['senha']) && $dados_form['senha'] != ''):
                $this->option->update_option('user_pass',password_hash($dados_form['senha'], 
                PASSWORD_DEFAULT));
            endif;
            set_msg('<p>Alteração feita com sucesso</p>');
        endif;

        $_POST['login'] = $this->option->get_option('user_login');
        $_POST['email'] = $this->option->get_option('user_email');
        $this->load->view('painel/config');
        $this->load->view('common/footer');
    }

    public function logout(){
        $this->session->unset_userdata('logged');
        $this->session->unset_userdata('user_login');
        $this->session->unset_userdata('user_email');
        set_msg('<p> Você saiu do painel</p>');
        redirect('','refresh');
    }

    public function mudar(){
        $this->load->view('common/header');
        $this->load->view('painel/navbar_painel');
        $this->load->view('painel/mininav');
        
        $this->load->view('common/footer');
    }

    public function insere_livro(){
        $this->load->view('common/header');
        $this->load->view('painel/navbar_painel');
        $this->load->view('painel/mininav');
        $this->load->model('LivroModel', 'model');
        $this->model->criar();
        $data['titulo'] = "Cadastrar livro"; 
        $data['acao'] = "Cadastrar"; 
        $this->load->view('elementos/cadastro_livro', $data);
        $this->load->view('common/footer');
    }

    public function modifica(){
        $this->load->view('common/header');
        $this->load->view('painel/navbar_painel');
        $this->load->view('painel/mininav');
        $this->load->model('LivroModel','model');
        $v['editar'] = $this->model->lista_editar();
        $this->load->view('painel/lista_editar', $v);
        $this->load->view('common/footer');
    }

    public function edit($id){
        $this->load->view('common/header');
        $this->load->view('painel/navbar_painel');
        $this->load->view('painel/mininav');
        $this->load->model('LivroModel', 'model');
        $this->model->atualizar($id);

        $data['titulo'] = "Editar livro"; 
        $data['acao'] = "Atualizar"; 
        $data['livro'] = $this->model->carrega_livro($id);

        $this->load->view('elementos/cadastro_livro', $data);
        $this->load->view('common/footer');
    }

    public function delete($id){
        $this->load->model('LivroModel', 'model');
        $this->model->delete($id);
        redirect('setup/modifica');
    }

    public function modifica_inicio(){
        $this->load->view('common/header');
        $this->load->view('painel/navbar_painel');
        $this->load->view('painel/mininav');
        $this->load->view('painel/mininav2');
        //Form carrossel
        $this->load->model('CarrosselModel');
        $this->CarrosselModel->criar();
        $v['form'] = $this->load->view('painel/carrossel_form', '', TRUE);
        
        $this->load->view('painel/modifica_inicio', $v);
        $this->load->view('common/footer');
    }

    public function modifica_cards(){
        $this->load->view('common/header');
        $this->load->view('painel/navbar_painel');
        $this->load->view('painel/mininav');
        $this->load->view('painel/mininav2');
        //Form cards
        $this->load->model('CardModel');
        $this->CardModel->criar();
        $v['form'] = $this->load->view('painel/card_form','', TRUE);
        $this->load->view('painel/modifica_inicio', $v);
        $this->load->view('common/footer');
    }

}
