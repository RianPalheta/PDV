<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\ProductHandler;
use src\handlers\UserHandler;

class HomeController extends Controller {

    private $loggedUser;

    public function __construct() {
        $this->loggedUser = UserHandler::checkLogin();

        if( $this->loggedUser === false ) {
            $this->redirect('/login');
        }
    }

    public function index() {

        $productList = ProductHandler::getProducts();

        $this->render('home', [
            'loggedUser' => $this->loggedUser,
            'product' => $productList
        ]);
    }

}