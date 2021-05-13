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
    public function loging(){
        if (isset($_POST['hidden'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $connection = Model::getDb();
            $query = $connection->prepare("SELECT * FROM users WHERE username=:username"); // :username
            $query->bindParam("username", $username, PDO::PARAM_STR);
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

}
// inherit models