<?php

require_once APP .'./config/Database.php';
class Modelousuario

{
    public $db;
    public function __construct(){
        $mysqli = new Database();
        $this -> db = $mysqli -> estaConectado();

    }

    public function obtenerTodosUsuarios(){
        try{
            $db = $this -> db;
            $stmt = $db->query("select * from vw_all_usuarios;");
            $arreglo = array(); 
            
             while($row=$stmt -> fetch_all()){
                $arreglo = $row;
                                  
             }
             $db -> close();
             return $arreglo;
            
           
           
        }
        catch (Exception $e) {
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }

    }




}