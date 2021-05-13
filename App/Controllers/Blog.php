<?php

namespace App\Controllers;

use \Core\View;

class Blog extends \Core\Controller {

    public function blogAction(){
        View::renderTemplate('Blog/index.php');
    }
}