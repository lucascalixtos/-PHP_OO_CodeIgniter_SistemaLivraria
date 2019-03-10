<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'libraries/Livro.php';

 class LivroModel extends CI_Model{

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
        $html .= '<table class="table mx-auto justify-content-center" >';
        $html .= '<tr><th scope="col" class="justify-content-center" >Capa</th><th scope="col" >Titulo</th><th scope="col" >Autor</th><th scope="col" >Gênero</th><th scope="col">Preço</th></tr>';
        foreach($data as $row){
            $html .= '<tr>';
            $html .= '<th scope="col"><img src="'.base_url('assets/img/'.$row['capa']).'" width="120px"></th>';
            $html .= '<th scope="col">'.$row['titulo'].'</th>';
            $html .= '<th scope="col">'.$row['autor'].'</th>';
            $html .= '<th scope="col">'.$row['genero'].'</th>';
            $html .= '<th><a href="'.base_url('livraria/detalhar/'.$row['id']).'"><button type="button" class="btn btn-dark">R$'.$row['preco'].',00</button></a></th></tr>';
            }
                $html .= '</table>';
                return $html;
        }
        
        public function lista_editar(){
            $html = '';
            $livro = new Livro();
            // organiza a lista e depois retorna o resultado
            $data = $livro->getAll();
            $html .= '<table class="table mx-auto justify-content-center" >';
            $html .= '<tr><th scope="col" class="justify-content-center" >Capa</th><th scope="col" >Titulo</th><th scope="col" >Autor</th><th scope="col" >Gênero</th><th scope="col">Preço</th><th scope="col">Modificar</th></tr>';
            foreach($data as $row){
                $html .= '<tr>';
                $html .= '<th scope="col"><img src="'.base_url('assets/img/'.$row['capa']).'" width="120px"></th>';
                $html .= '<th scope="col">'.$row['titulo'].'</th>';
                $html .= '<th scope="col">'.$row['autor'].'</th>';
                $html .= '<th scope="col">'.$row['genero'].'</th>';
                $html .= '<th><button type="button" class="btn btn-dark">R$'.$row['preco'].',00</button></th>';
                $html .='<th scope="col">'.$this->icones($row['id']).'</th></tr>';
                }
                    $html .= '</table>';
                    return $html;
            }

            private function icones($id){
                $html = '';
                $html .= '<a href="'.base_url('setup/edit/'.$id).'"><i class="far fa-edit mr-3 text-primary"></i></a>';
                $html .= '<a href="'.base_url('setup/delete/'.$id).'"><i class="far fa-trash-alt text-danger"></i></a>';
                return $html;

            }
            
            public function carrega_livro($id){
                $livro = new Livro();
                return $livro->getById($id);
            }

            public function atualizar($id){
                if(sizeof($_POST) == 0) return;
        
                $data = $this->input->post();
                $livro = new Livro();
                if($livro->update($data, $id))
                    redirect('setup/modifica');    
            }

            public function delete($id){
                $livro = new Livro();
                $livro->delete($id);
            } 
            
            
    public function livro_data($id){
        $sql = "SELECT * FROM livros WHERE id = $id";
        $res = $this->db->query($sql);
        $data = $res->result_array();
        return $data[0];
    }
    }


    

?>