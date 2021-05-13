<?php

namespace App\Controllers;

use \Core\View;

class Contact extends \Core\Controller {

    public function contactAction(){
        View::renderTemplate('Contact/index.php');
    }
}