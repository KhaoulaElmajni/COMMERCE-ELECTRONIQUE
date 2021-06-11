<?php

//role = charger les fichiers une fois pour toutes

session_start();
require_once("./bootstrap.php");

//charger le fichier
spl_autoload_register('autoload');

function autoload($class_name){
    //les dossiers que j'ai dans mon app
    $array_path = array(
        'database/',
        'app/classes/',
        'models/',
        'controllers/'
    );
    //recuperer la classe à partir de son nom

    $parts = explode('\\',$class_name);
    //array_pop recupere le dernier dossiers dans le chemin et le stokcer a $name
    $name = array_pop($parts);

    foreach($array_path as $path){
        //sprintf fct qui remplace une chose avec une autre (%s)
        //chaque path (database || controllers...) va etre concatener avec le nom  récupré
        $file = sprintf($path.'%s.php', $name);
        if(is_file($file)){
            include_once $file;
        }
    }

}

