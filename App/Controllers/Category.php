<?php

namespace App\Controllers;

use \Core\View;
use \App\Models\User;

class Category extends \Core\Controller {

    public function categoryAction(){
        View::renderTemplate('Category/index.php', [
            'products'=>User::getAll()
        ]);
    }

    
    // public function productsAction(){
    //     View::renderTemplate('Catalog/index.html', [
    //         'products'=>User::getAll()
    //     ]);
    // }
}