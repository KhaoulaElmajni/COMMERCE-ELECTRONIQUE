<?php

class DB{
    static public function connexion(){
        $db = new PDO("mysql:host=localhost:3307;dbname=boutique","root","");
        $db->exec("set names utf8");
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
        return $db;
    }
}