<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller {

public function action_index()
	{
            //Direcionamento para a view desafio.php
            $view =View::factory('desafio')
                ->bind('subir', $subir); //passada a variálvel subir zerada, no caso de ser a primeira abertura.
            $this->response->body($view);
	}
        public function action_desafio (){

            // Busca o upload de desafio
            
            $arquivoCompleto = $_FILES['arquivo']['name'];
            Upload::$default_directory ='upload'; //Path
            $subir = Upload::save($_FILES['arquivo'],$arquivoCompleto); // salva o arquivo
            $leituras = file($subir,2); //divide o arquivo de upload em um array, onde cada registro é um item
            $len = 0; // define a var que será o contador de campos
            
            //Quebra as linhas em campos
            foreach ($leituras as $leitura){
            //O If é para excluir o cabeçalho(nome das colunas) do arquivo
            if ($leituras[0] != $leitura)
                {
                $campos[$len] = explode("\t", $leitura);
                $len ++;
                }
            }
            
            /*echo '<pre>';
            var_dump($campos);
            echo '</pre>';
            exit;*/
            
            $model_desafio = new Model_Desafio('default');
            
            foreach ($campos as $campo){
            $id_purchaser = $model_desafio->insert_purchaser($campo[0]);
            $id_item = $model_desafio->insert_item($campo[1],$campo[2]);
            $id_addr = $model_desafio->insert_adress($campo[4]);
            $id_merchant = $model_desafio->insert_merchant($campo[5], $id_addr[0]);
            $model_desafio->insert_purchase($campo[3], $id_item[0], $id_merchant[0], $id_purchaser[0]);
            }
            //refaz a view com as variaveis
            $view =View::factory('desafio')
                    ->bind('subir',$subir)
                    ->bind('campos', $campos);
            $this->response->body($view);
            
        }

} 
