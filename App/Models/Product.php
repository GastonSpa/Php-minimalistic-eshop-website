<?php

namespace App\Models;

use PDO;

class Product extends \Core\Model {

    // protected static function getDb()
    // Get the PDO database connection
    // return db

    public static function getAll(){
        $db = static::getDB();
        $stmt = $db->query('SELECT * FROM products');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getquery($definedquery){

        switch($definedquery){
            case 'topsellers':
                $sqlQuery = "SELECT * FROM products ORDER BY sell_number DESC LIMIT 0, 3";
                break;

            case 'latest':
                $sqlQuery = "SELECT * FROM products ORDER BY id DESC LIMIT 0, 3";
                break;

            case 'topnew':
                $sqlQuery = "SELECT * FROM products ORDER BY sell_number DESC LIMIT 0, 3";
                break;

            case 'hats':
                $sqlQuery = "SELECT * FROM products WHERE category='hat'";
                break;

            case 'socks':
                $sqlQuery = "SELECT * FROM products WHERE category='socks'";
                break;

            case 'scarfs':
                $sqlQuery = "SELECT * FROM products WHERE category='scarf'";
                break;

            case 'lacoste':
                $sqlQuery = "SELECT * FROM products WHERE brand='Lacoste'";
                break;

            case 'leprintemps':
                $sqlQuery = "SELECT * FROM products WHERE vendor='Le Printemps'";
                break;

            case '3suisses':
                $sqlQuery = "SELECT * FROM products WHERE vendor='3 Suisses'";
                break;

            case 'laredoute':
                $sqlQuery = "SELECT * FROM products WHERE vendor='La Redoute'";
                break;

            default:
                $sqlQuery = "SELECT * FROM products WHERE id='3'";
                break;
        }

        $db = static::getDB();
        $stmt = $db->query($sqlQuery);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);;
    }// return indexed array of keyed array ie each entry as an keyed array in a big indexed array of entries
    // so to access : $result[i][column_name]




    public static function getOne($product_id){
        $db = static::getDB();

        // $stmt = $db->query("SELECT * FROM products WHERE id=$url_query");
        $stmt = $db->prepare("SELECT * FROM products WHERE id=:product_id");
        // $stmt->execute(array(
        //     ':product_id' => $product_id
        // ));

        $stmt->bindParam(':product_id', $product_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }



    protected function setPath($product_id){
        return '/p?id=' . $product_id; // return product link
    }

    //useless

    public static function addlink($pdo_array){
        
        foreach ($pdo_array as $key_p => $entry) {
            // foreach ($entry as $key => $value) {
                $entry['link'] = '/p?id=' . $entry['id'];
            // }
        }
        return $pdo_array;
    }

}