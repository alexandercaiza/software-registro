<?php
require_once 'config.php';
class Database{
    // Check connection
    public function __construct(){
    }

    public function estaConectado(){
        $conectado = new  mysqli(URLBASE, USERNAME, PASSWORD, BASE);
        if (!$conectado) {
            die("Connection failed: ");
        }
        //echo "Connected successfully";
        return $conectado;
    }


    
    


}