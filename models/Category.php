<?php

class Category{
    static public function getAll(){
        $stmt = DB::connexion()->prepare('SELECT * FROM category'); 
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }
}