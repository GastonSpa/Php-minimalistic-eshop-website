<?php

namespace App\Controllers;

use \Core\View;

class About extends \Core\Controller {

    public function aboutAction(){
        View::renderTemplate('About/index.php');
    }
}