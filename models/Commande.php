<?php

class Commande{
   /* static public function createCommande($data){
        $query = "INSERT INTO commande(nom_com,prduit_com,qte_com,prix_com,total_com) values (:nom_com,:produit_com,:qte_com,:prix_com,:total_com)";
        $stmt = DB::connexion()->prepare($query);
        $stmt->bindParam(':nom_com',$data['nom_com']);
        $stmt->bindParam(':produit_com',$data['prduit_com']);
        $stmt->bindParam(':qte_com',$data['qte_com']);
        $stmt->bindParam(':prix_com',$data['prix_com']);
        $stmt->bindParam(':total_com',$data['total_com']);
        if($stmt->execute())
        {
            return "1";
        }else{
            return "0";
        }
        $stmt->close();
        $stmt = null;
    }*/

    static public function getAll(){
        $stmt = DB::connexion()->prepare('SELECT * FROM commande');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt =null;
    }
    static public function createCommande($data){
        $stmt = DB::connexion()->prepare('INSERT INTO commande(nom_com,prduit_com,qte_com,prix_com,total_com)
            VALUES (:fullname,:product,:qte,:price,:total)');
            $stmt->bindParam(':fullname',$data['fullname']);
            $stmt->bindParam(':product',$data['product']);
            $stmt->bindParam(':qte',$data['qte']);
            $stmt->bindParam(':price',$data['price']);
            $stmt->bindParam(':total',$data['total']);
            if($stmt->execute()){
                return '1';
            }else{
                return '0';
            }
            $stmt->close();
            $stmt = null;
    }

    
}