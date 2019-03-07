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
        $preco = $this->input->post('preco');
        $livro = new Livro($titulo, $autor, $genero, $ano, $idioma, $capa, $descr, $preco);
        $livro->save();
        
    }

    public function lista(){
        $html = '';
        $livro = new Livro();
        // organiza a lista e depois retorna o resultado
        $data = $livro->getAll();
       
        //FUNCIONANDO:
        /*$count = 0;
        foreach($data as $row){
            if($count ==0){
                $html .= '<div class="row mb-4">';
            }
            $html .= '<div class="col-md-4">';
            $html .= '<div class="card">';
            
            
            $html .= '<img src="'.$row['capa'].'" width="210px">';
            $html .=  '<h4 class="card-title">'.$row['titulo'].'</h4>';
     
            $html .= '</div>';
            $html .= '</div>';

            $count++;

            if($count == 0){
                $html .= '</div>';
            }else 
            if($count == 3){
                $count = 0;
            }
        }*/
        $html .= '<table class="table mx-auto align-middle" >';
        $html .= '<tr><th scope="col" class="align-middle">Capa</th><th scope="col" class="align-middle">Titulo</th><th scope="col" class="align-middle">Autor</th><th scope="col" class="align-middle">Gênero</th><th scope="col" class="align-middle">Preço</th></tr>';
        foreach($data as $row){
            $html .= '<tr>';
            $html .= '<th scope="col"><img src="'.$row['capa'].'" width="120px"></th>';
            $html .= '<th scope="col">'.$row['titulo'].'</th>';
            $html .= '<th scope="col">'.$row['autor'].'</th>';
            $html .= '<th scope="col">'.$row['genero'].'</th>';
            $html .= '<th><button type="button" class="btn btn-dark">R$'.$row['preco'].',00</button></th></tr>';
            }
                $html .= '</table>';
                return $html;
        }

    }

?>