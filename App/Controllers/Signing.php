<?php

namespace App\Controllers;

// use PDO;
// use \Core\View;
use \App\Models\User;
use \App\Controllers\Profile;

class Signing extends \Core\Controller {

    // public function __call(){

    // }
    public function signingAction(){
        
        $data = [
            'title' => 'Login page',
            'username' => '',
            'password' => '',
            'confirm_password' => '',
            'email' => '',
            'usernameError' => '',
            'passwordError' => '',
            'confirm_passwordError' => '',
            'emailError' => '',
        ];

        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'email' => trim($_POST['email']),
                'usernameError' => '',
                'passwordError' => ''
            ];
            // Check if username is empty
            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter a username.';
            }

            // Check if password is at least 7 letters long
            if (strlen($data['password']) < 8 ) {
                $data['passwordError'] = 'Please enter a password containing at least 8 letters.';
            }

            // Check if confirm_password equals password
            if ($data['confirm_password'] !== $data['password']) {
                $data['confirm_passwordError'] = 'Please enter the same password for the Confirm password field.';
            }

            // Check if email is an email
            if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Please enter the same password for the Confirm password field.';
            }

            //Check if all errors are empty
            if (empty($data['usernameError']) && empty($data['passwordError']) && empty($data['confirm_passwordError']) && empty($data['emailError'])) {
                $loggedInUser = User::loginToDb($data['username'], $data['password']); // User:: (static)  or   $this->  (non-static)
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
                'title' => 'Login page',
                'username' => '',
                'password' => '',
                'confirm_password' => '',
                'email' => '',
                'usernameError' => '',
                'passwordError' => '',
                'confirm_passwordError' => '',
                'emailError' => '',
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