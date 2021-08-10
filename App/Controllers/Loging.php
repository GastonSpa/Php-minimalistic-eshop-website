<?php

namespace App\Controllers;

// use PDO;
// use \Core\View;
use \App\Models\User;
use \App\Controllers\Profile;

class Loging extends \Core\Controller {

    // public function __call(){

    // }
    public function logingAction(){
        
        $data = [
            'title' => 'Login page',
            'username' => '',
            'password' => '',
            'usernameError' => '',
            'passwordError' => ''
        ];

        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'usernameError' => '',
                'passwordError' => '',
            ];
            // Check if username is empty
            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter a username.';
            }

            // Check if password is empty
            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter a password.';
            }

            //Check if all errors are empty
            if (empty($data['usernameError']) && empty($data['passwordError'])) {
                $loggedInUser = User::loginToDb($data['username'], $data['password']); // USer:: (static)  or   $this->  (non-static)
                // loginToDb return user infos or false
                if (isset($loggedInUser['id'])) { //test if array ? flo
                    $this->createUserSession($loggedInUser);
                } else {
                    $data['passwordError'] = 'Password or username is incorrect. Please try again.';
                    // self::loginAction(); // success
                    // self::loginAction(); // success
                    // $this->view('users/login', $data);
                }
            }
        } else { //if method ain't POST
            $data = [
                'username' => '',
                'password' => '',
                'usernameError' => '',
                'passwordError' => ''
            ];
        }
        // always execute the following at the end of the function whatever happens
        // Profile->profileAction();
        // $this->loginAction();
        $result = new Profile(['/profile']);
        $result->profileAction();
        // $this->loginAction();
        // $this->view('users/login', $data);
    }

    // populate $_SESSION
    public function createUserSession($user) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['created_at'] = $user['created_at'];
        // $_SESSION['location'] = $user['location'];
        // $_SESSION['portrait'] = $user['portrait'];
        // header('location:' . URLROOT . '/pages/index');
    }

}