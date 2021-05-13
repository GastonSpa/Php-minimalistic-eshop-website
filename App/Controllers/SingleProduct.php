<?php

namespace App\Controllers;

use \Core\View;
use \App\Models\Product;

class SingleProduct extends \Core\Controller {

    public function singleProductAction(){
        $product = Product::getOne($_GET['id'])[0];

        // parse_str($_SERVER['QUERY_STRING'], $product_id);
        // $product = Product::getOne($product_id['id'])[0];

        View::renderTemplate('SingleProduct/index.php', [
            'product' => $product
        ]);
    }

}