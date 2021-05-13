<?php

namespace App\Controllers;

use \Core\View;

class Order extends \Core\Controller {

    public function orderAction(){
        View::renderTemplate('Order/index.php');
    }
}