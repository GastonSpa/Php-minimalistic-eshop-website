<?php

namespace App\Controllers;

use \App\Models\User;
use \Core\View;

class Profile extends \Core\Controller {

    // $_SESSION['user_id'];
    // $_SESSION['username'];
    // $_SESSION['email'];
    // $_SESSION['created_at'];
    // $_SESSION['location'];
    // $_SESSION['portrait'] ;

    public function profileAction(){

        // $user = getOne($username);
        if (isset($_SESSION['username'])){
            $title = 'Hi ' . $_SESSION['username'] . ' !';
            $content = 'You are connected.';
            // echo '<p> Address :' . SESSION['address'] . '. </p>';
            // echo '<p> Location :' . SESSION['location'] . '. </p>';
        } else{
            $title = "You are not connected";
            $content = 'Something went wrong.';
            $link = 'Go back to the login page';
        }

        View::renderTemplate('Profile/index.php',
            [
                'title' => $title,
                'content' => $content,
                'session' => $_SESSION
            ]
        );

        // <br> {{user_session.name}}
        // <br> {{user_session.id}}
        // <br> {{user_session.email}}
    }
}