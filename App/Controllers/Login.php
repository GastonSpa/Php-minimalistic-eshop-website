<?php

namespace App\Controllers;

// use PDO;
use \Core\View;
use \App\Model\User;

class Login extends \Core\Controller {

    public function loginAction(){
        View::renderTemplate('Login/index.php');
    }

    // link to form
    // link to db

    // search user
    public function logme(){
        User::loging();
        View::renderTemplate('Profile/index.php');
    }

public function log(){
    // if (isset($_POST['hidden'])) {
    //     $username = $_POST['username'];
    //     $password = $_POST['password'];
    //     $connection = Model::getDb();
    //     $query = $connection->prepare("SELECT * FROM users WHERE username=:username"); // :username
    //     $query->bindParam("username", $username, PDO::PARAM_STR);
    //     $query->execute();
    //     $result = $query->fetch(PDO::FETCH_ASSOC);
    //     if (!$result) {
    //         echo '<p class="error">Connection to database failed.</p>';
    //     } else {
    //         if (password_verify($password, $result['password'])) {
    //             $_SESSION['user_id'] = $result['id'];
    //             echo '<p class="success">Congratulations, you are logged in!</p>';
    //         } else {
    //             echo '<p class="error">Username password combination is wrong!</p>';
    //         }
    //     }
    // }

    View::renderTemplate('Profile/index.php');
}

    // Get the PDO database connection
    // protected static function getDb(){

    // return $db

    // send to Profile page
}