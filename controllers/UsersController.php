<?php

class UsersController{
     public function auth(){
         if(isset($_POST["submit"])){
             $data["email_u"] = $_POST["email"];
             $result = User::login($data);
             if($result->email_u === $_POST["email"] && password_verify($_POST["password"],$result->password_u)){
                 $_SESSION["logged"] = true;
                 $_SESSION["email"] = $result->email_u;
                 $_SESSION["username"] = $result->username_u;
                 $_SESSION["isadmin"] = $result->isadmin_u;
                 Redirect::to("home");
             }else{
                 Session::set("error","Email ou mot de passe n'est pas correcte!");
                 Redirect::to("login");
             }
         }
     }

     public function register(){
         //options array pour crypter le mot de passe
         $options = [
             "cost" => 12
         ];
         $password = password_hash($_POST["password"],PASSWORD_BCRYPT,$options);
         $data = array(
             "username_u" => $_POST["username"],
             "email_u" => $_POST["email"],
             "password_u" => $password,
         );
         $result = User::createUser($data);
         if($result === '1'){
             Session::set("success","votre compte est bien crée!");
             Redirect::to("login");
         }else{
             echo $result;
         }
     }
     public function logout(){
         session_destroy();
         
     }
}