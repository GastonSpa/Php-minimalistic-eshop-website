<?php

namespace App\Controllers;

// use PDO;
use \Core\View;
use \App\Models\User;
// use \App\Controllers\Profile;

class Login extends \Core\Controller {

    public function disconnectAction(){
        View::renderTemplate('Login/index.php', 
        [
            'sendForm' => "loging"

            // 'sendForm' => '$this->$log()'
            // 'sendForm' => self::log()
            // 'sendForm' => "login/log"
            // 'sendForm' => "parent::log"
            // 'passwordError' => $data['passwordError'],
            // 'usernameError' => $data['usernameError']
        ]
        );
    }


}