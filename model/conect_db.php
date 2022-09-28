<?php
class Database{
    public static function StartUp(){
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=notas;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}
