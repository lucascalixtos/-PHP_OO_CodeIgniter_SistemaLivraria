<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('set_msg')):
    //envia uma mensagem via session
    function set_msg($msg = null){
        $ci = & get_instance();
        $ci->session->set_userdata('aviso', $msg);
    }
endif;

if(!function_exists('get_msg')):
    //retorna uma mensagem definida por set_msg
    function get_msg($destroy = TRUE){
        $ci = & get_instance();
        $retorno = $ci->session->userdata('aviso');
        if($destroy) $ci->session->unset_userdata('aviso');
        return $retorno;
    }
endif;

if(!function_exists('verifica_login')):
    //retorna uma mensagem definida por set_msg
    function verifica_login($redirect='setup/login'){
        $ci = & get_instance();
        if($ci->session->userdata('logged') != TRUE):
            set_msg('<p>Acesso restrito! FAÇA LOGIN</p>');
            redirect($redirect,'refresh');
        endif;
    }
endif;