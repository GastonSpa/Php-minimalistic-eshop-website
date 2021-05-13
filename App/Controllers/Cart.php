<?php

namespace App\Controllers;

use \Core\View;

class Cart extends \Core\Controller {

    public function cartAction(){
        View::renderTemplate('Cart/index.php');
    }
}