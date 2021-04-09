<?php
namespace src\handlers;

use src\models\Product;

class ProductHandler {
    
    public static function getProducts() {
        $products = Product::select()->execute();

        return $products;
    }

}
/*
'name' => 'Rian',
'idade' => 18,
'altura' => '1,78',
'comida' => 'açaí',
'casa' => 'mãe'
*/