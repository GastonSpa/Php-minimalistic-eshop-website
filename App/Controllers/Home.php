<?php

namespace App\Controllers;

use \Core\View;
use \App\Models\Product;

class Home extends \Core\Controller {

    // Show the index page
    // return void
    public function indexAction(){
        View::renderTemplate('Home/index.php', [
            'topsellers'=>Product::getquery('topsellers'),
            'latest'=>Product::getquery('latest'),
            'hats'=>Product::getquery('hats'),
            'scarfs'=>Product::getquery('scarfs'),
        ]);
    }
}