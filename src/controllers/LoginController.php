<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\UserHandler;

class LoginController extends Controller {

    public function signin() {
        if( !empty( $_SESSION['token'] ) ) {
            $this->redirect('/');
        }
        $this->render('login');
    }

    public function signup() {
        $number = date('Y').rand(10, 99).rand(10, 99).rand(10, 99).rand(10, 99);

        $this->render('signup', [
            'number' => $number
        ]);
    }

    public function signinAction() {
        $userNumber = filter_input(INPUT_POST, 'number', FILTER_VALIDATE_INT);
        $pass = filter_input(INPUT_POST, 'pass');

        if( $userNumber && $pass ) {
            $token = UserHandler::verifyLogin( $userNumber, $pass );

            if( $token ) {
                $_SESSION['token'] = $token;
                echo "logado";
            } else {
                echo 'Número e/ou senha não conferem.';
            }

        } else {
            echo 'Preencha todos os campos corretamente.';
        }
    }

    public function signupAction() {
        $name = filter_input(INPUT_POST, 'name');
        $userNumber = filter_input(INPUT_POST, 'number', FILTER_VALIDATE_INT);
        $pass = filter_input(INPUT_POST, 'pass');

        if( $name && $userNumber && $pass ) {
            
            if( UserHandler::userExists( $userNumber ) === false ) {
                $token = UserHandler::addUser( $name, $userNumber, $pass );

                $_SESSION['token'] = $token;
                echo "cadastrado";
            } else {
                echo "Usuário já cadastrado.";
            }

        } else {
            echo 'Preencha todos os campos corretamente.';
        }
    }

    public function logout() {
        $_SESSION['token'] = '';
        unset($_SESSION['token']);
        $this->redirect('/login');
    }

}