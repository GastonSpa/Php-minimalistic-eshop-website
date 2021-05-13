<?php

namespace App\Controllers;

// use PDO;
use \Core\View;
use \App\Model\User;

class Logout extends \Core\Controller {

    public function logoutAction(){
        View::renderTemplate('Logout/index.php');
    }

}