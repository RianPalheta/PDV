<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\ProductHandler;
use src\handlers\UserHandler;

class ProductController extends Controller {

    private $loggedUser;

    public function __construct() {
        $this->loggedUser = UserHandler::checkLogin();

        if( $this->loggedUser === false ) {
            $this->redirect('/login');
        }
    }

    public function productAction() {
        $product['list'] = ProductHandler::getProducts();

        return json_encode($product);
    }

}