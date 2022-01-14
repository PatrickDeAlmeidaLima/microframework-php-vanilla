<?php

use \App\Core\Controller;
use \App\Auth;

class Users extends Controller{

    public function cadastrar(){
        
        Auth::checkLogin();

        $mensagem = array();

        if (isset($_POST['cadastrar'])):
            $nome = $_POST['nome'];
            $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
            $email = $_POST['email'];

            $user = $this->model('User');
            $user->nome = $nome;
            $user->senha = $senha;
            $user->email = $email;

            $mensagem[] = $user->save();
        endif;

        $this->view('users/cadastrar', $dados = ['mensagem'=>$mensagem]);
    }
}