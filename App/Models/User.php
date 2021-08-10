<?php

namespace App\Models;

use PDO;

class User extends \Core\Model {

    // protected static function getDb() from Model
    // Get the PDO database connection
    // return db

    public static function getAll(){
        $db = static::getDB();
        $stmt = $db->query('SELECT * FROM users');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getOne($username){
        $db = static::getDB();
        $stmt = $db->query("SELECT * FROM users WHERE username=$username");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    // populate $_SESSION['user_id']
    public function loginToDb2(){
        if (isset($_POST['hidden'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $connection = Model::getDb();
            $query = $connection->prepare("SELECT * FROM users WHERE username=:username"); // :username
            $query->bindParam(":username", $username, PDO::PARAM_STR);
            $query->execute();
            $result = $query->fetch(PDO::FETCH_ASSOC);
            if (!$result) {
                echo '<p class="error">Connection to database failed.</p>';
            } else {
                if (password_verify($password, $result['password'])) {
                    $_SESSION['user_id'] = $result['id'];
                    $_SESSION['user_name'] = $result['username'];
                    echo '<p class="success">Congratulations, you are logged in!</p>';
                } else {
                    echo '<p class="error">Username password combination is wrong!</p>';
                }
            }
        }
    }


    // search db for username & password params and check if they're okay then return user infos or false
    public static function loginToDb($username, $password) {
        $db = parent::getDb();
        // $db->query("SELECT * FROM users WHERE username=$username");
        // // $db->bind(":username", $username); // , PDO::PARAM_STR
        // $user_info = $db->single();

        $stmt = $db->prepare('SELECT * FROM users WHERE username=:username');
        $stmt->execute(array(
            ':username' => $username
        )); // error : return bool
        // if (password_verify($password, $user_info['password'])) {
            // username must be unique
            // les erreurs ne sont pas récupéré
        $user_info = $stmt->fetch(PDO::FETCH_ASSOC);
        // var_dump($user_info); // array vide
        if ($password == $user_info['password']) {
            return $user_info;
        } else {
            return false;
        }


        // $req = db->prepare('SELECT * FROM users WHERE username=:username');
        // $req->execute(array(
        //     'username' => $username
        // ));


        // $this->db->query('SELECT * FROM users WHERE username = :username');
        // $this->db->bind(':username', $username);
        // $row = $this->db->single();
        // $hashedPassword = $row->password;
        // if (password_verify($password, $hashedPassword)) {
        //     return $row;
        // } else {
        //     return false;
        // }
    } //used in App\Controllers\Login

    //Find user by email. Return bool
    public function findUserByEmail($email) {

        $db = parent::getDb();
        $db->query("SELECT * FROM users WHERE email=:email");
        $db->bind(":email", $email);

        //Prepared statement
        // $this->db->query('SELECT * FROM users WHERE email = :email');
        //Email param will be binded with the email variable
        // $this->db->bind(':email', $email);

        //Check if email is already registered
        if($db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    } // used in email retriever page (ie login page?)
}