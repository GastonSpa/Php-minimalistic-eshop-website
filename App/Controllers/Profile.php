<?php

namespace App\Controllers;

use \App\Models\User;
use \Core\View;

class Profile extends \Core\Controller {

    public function profileAction(){

        // $user = getOne($username);
        if (isset($_SESSION['user_name'])){
            $title = '<h2> Hi' . $_SESSION['user_name'] . '! </h2>';
            $content = '<p>You are connected.</p>';
            // echo '<p> Address :' . SESSION['address'] . '. </p>';
            // echo '<p> Location :' . SESSION['location'] . '. </p>';
        } else{
            $title = "<h2> You are not connected </h2>";
            $content = '<p>Something went wrong.</p>';
            $content .= '<p><a href="/login">Go back to the login page</a></p>';
        }

        View::renderTemplate('Profile/index.php'
            ,[
                'title' => $title,
                'content' => $content,
            ]
        );
    }
}