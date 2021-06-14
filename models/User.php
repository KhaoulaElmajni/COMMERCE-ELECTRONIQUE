<?php

class User{
    static public function login($data){
        $email = $data["email_u"];
        try{
            $req = "SELECT * FROM user where email_u = :email";
            $stmt = DB::connexion()->prepare($req);
            $stmt->execute(array(":email"=>$email));
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;
        }catch(PDOException $excep){
            echo "erreur : ".$excep.getMessage();
        }
    }

    static public function createUser($data){
        $stmt = DB::connexion()->prepare('INSERT INTO user(username_u,email_u,password_u)
        VALUES (:username_u,:email_u,:password_u)');
        $stmt->bindParam(':username_u',$data['username_u']);
        $stmt->bindParam(':email_u',$data['email_u']);
        $stmt->bindParam(':password_u',$data['password_u']);
        if($stmt->execute()){
            return '1';
        }else{
            return '0';
        }
        $stmt->close();
        $stmt = null;
    }
}