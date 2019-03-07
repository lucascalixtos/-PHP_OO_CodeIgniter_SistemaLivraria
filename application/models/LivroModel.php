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
        
        $linhaatual = 0;
        
        /*foreach($data as $row){
            if($linhaatual % 3 == 0){
                $html ='<div class="row">';
            }
            
            $html .= '<div class="col-md-4">';
            $html .= '  <div class="card"> 
                            <div class="view overlay">';
            $html .= '          <img class="card-img-top" src="'.$row['capa'].'" alt="Card image cap">';
            $html .= '          <a> <div class="mask rgba-white-slight"></div></a> 
                            </div>';
            $html .= '      <div class="card-body elegant-color white-text rounded-bottom">';
            $html .= '          <h4 class="card-title">'.$row['titulo'].'</h4>';
            $html .= '          <p class="card-text white-text mb-4">'.$row['descr'].'</p>';
            $html .= '           <a href="#!" class="white-text d-flex justify-content-end"><h5>Comprar <i class="fas fa-angle-double-right"></i></h5></a>';
            $html .= '      </div>
                        </div>';
            $html .= '</div>';
            if($linhaatual % 3 == 0){
                $html ='</div>';
            }
            $linhaatual++;
            
        }
        $html ='</div>';*/
        $contador = 0;
        foreach($data as $row){
            if($contador % 3 == 0){
                $html .= '<div class="row">';
            }
            $html .= '<div class="col-sm-3">';
            $html .= '<div class="card"> <div class="view overlay">';
            $html .= '<img class="card-img-top" src="'.$row['capa'].'" alt="Card image cap">';
            $html .= '<a> <div class="mask rgba-white-slight"></div></a> </div>';
            $html .= '<div class="card-body elegant-color white-text rounded-bottom">';
            $html .= '<h4 class="card-title">'.$row['titulo'].'</h4>';
            $html .= '<p class="card-text white-text mb-4">'.$row['descr'].'</p>';
            $html .= '<a href="#!" class="white-text d-flex justify-content-end"><h5>Preço: '.$row['preco'].' <i class="fas fa-angle-double-right"></i></h5></a>';
            $html .= '  </div>
            </div>';
            $html .= '</div>';
            if($contador % 3 == 0){
                $html .= '</div>';
            }
            $contador++;
        }
        

        return $html;
    }

 }

    /*foreach($data as $row){
            $html .= '<div class="card"> <div class="view overlay">';
            $html .= '<img class="card-img-top" src="'.$row['capa'].'" alt="Card image cap">';
            $html .= '<a> <div class="mask rgba-white-slight"></div></a> </div>';
            $html .= '<div class="card-body elegant-color white-text rounded-bottom">';
            $html .= '<h4 class="card-title">'.$row['titulo'].'</h4>';
            $html .= '<p class="card-text white-text mb-4">'.$row['descr'].'</p>';
            $html .= '<a href="#!" class="white-text d-flex justify-content-end"><h5>Comprar <i class="fas fa-angle-double-right"></i></h5></a>';
            $html .= '  </div>
            </div>';
        }*/


?>