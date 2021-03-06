<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;//temos em importar para usar o 

class UsuariosController extends Controller {
   
    public function add(){
        $this->render('add');
    }

    public function addAction(){
        $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
        if($nome && $email){
            $data = Usuario::select()->where('email', $email)->execute();
            if(count($data)===0){
                Usuario::insert([
                    'nome'=>$nome,
                    'email'=>$email
                ])->execute();
                $this->redirect('/');
                //redirect para index
            }

        }
            $this->redirect('/novo');
            //redirect para /novo
        
    }

    public function edit($args){

    }

    public function del($args){

    }
  
}