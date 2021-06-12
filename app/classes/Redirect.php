<?php
ob_start();
class Redirect{
    static public function to($page){
        header('location:'.$page);
    }
}
ob_end_flush();
?>