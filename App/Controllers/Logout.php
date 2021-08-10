<?php

namespace App\Controllers;

// use PDO;
use \Core\View;
// use \App\Models\User;

class Logout extends \Core\Controller {

    public function logoutAction(){
        View::renderTemplate('Logout/index.php');
    }





    public function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        header('location:' . URLROOT . '/users/login');
    }
}