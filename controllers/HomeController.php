<?php

class HomeController{
    public function index($page){
        //nous les importons pas les views car ils sont deja importés au 'autoload' 
        include('views/'.$page.'.php');
    } 
}
