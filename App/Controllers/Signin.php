<?php

namespace App\Controllers;

use \Core\View;

class Signin extends \Core\Controller {

    public function signinAction(){
        View::renderTemplate('Signin/index.php');
    }
}