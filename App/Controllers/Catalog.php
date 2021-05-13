<?php

namespace App\Controllers;

use \Core\View;
use \App\Models\Product;

class Catalog extends \Core\Controller {

    // public function productsAction(){
    //     View::renderTemplate('Catalog/index.php');
    // }

    // public function productsAction(){
    //     View::renderTemplate('Catalog/index.html', [
    //         'products'=>Product::getAll()
    //     ]);
    // }

    public function catalogAction(){
        View::renderTemplate('Catalog/index.php', [
            'all_products'=>Product::getAll(),
            'topsellers'=>Product::getquery('topsellers'),
            'hats'=>Product::getquery('hats'),
            // 'displayhats'=>Product::getquery('hats'),
            'scarfs'=>Product::getquery('scarfs'),
            'socks'=>Product::getquery('socks'),
            'lacoste'=>Product::getquery('lacoste'),
            'laredoute'=>Product::getquery('laredoute'),
            '3suisses'=>Product::getquery('3suisses'),
            'leprintemps'=>Product::getquery('leprintemps')
        ]);
    }

}