<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller {

public function action_index()
	{
            //Direcionamento para a view desafio.php
            $view =View::factory('desafio');
            $this->response->body($view);
	}
        public function action_desafio (){

            // Busca o upload de desafio
            
            $arquivo = $this->request->post();
            $dir = $_FILES['arquivo']['name'];
            var_dump($dir); exit;
            $view =View::factory('desafio')
                    ->set('vars',$vars);
            $this->response->body($view);
            
        }

} 
