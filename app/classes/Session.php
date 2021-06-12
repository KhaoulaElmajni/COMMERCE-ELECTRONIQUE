<?php 
ob_start();
class Session{
    static public function set($type,$message){
        setcookie($type,$message,time() + 5,"/" );
    }
}
ob_end_flush();
?> 
