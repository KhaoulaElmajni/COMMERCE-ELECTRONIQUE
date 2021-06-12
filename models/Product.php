<?php

class Product{
    static public function getAll(){
        $stmt = DB::connexion()->prepare('SELECT * FROM produit'); 
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }

    static public function getProductByCat($data){
        $id = $data['id'];
        try{
            $stmt = DB::connexion()->prepare('SELECT * FROM produit WHERE cat_id_p = :id'); 
            $stmt->execute(array(":id" => $id));
            return $stmt->fetchAll();
            $stmt->close(); 
            $stmt = null; 
        }catch(PDOException $excep){
            echo "erreur " . $excep->getMessage();
        }
        
    }

    static public function getProductById($data){
        $id = $data['id'];
        try{
            $stmt = DB::connexion()->prepare('SELECT * FROM produit WHERE id_p = :id'); 
            $stmt->execute(array(":id" => $id));
            $product = $stmt->fetch(PDO::FETCH_OBJ);
            return $product;
            $stmt->close(); 
            $stmt = null; 
        }catch(PDOException $excep){
            echo "erreur " . $excep->getMessage();
        }
        
    }
}