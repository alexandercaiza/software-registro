<?php
require_once APP .'./config/Database.php';
class modeloPersona{
 
    public $db;
    public $valor;
    public function __construct(){
        $mysqli = new Database();
        $this -> db = $mysqli -> estaConectado();
    }

    public function insertarPersona($nombre, $apellido, $dni,$contrasena, $departamento,$usuario){
        
         try{
            $db = $this -> db;
            $stmt = $db->prepare("CALL sp_insertar_persona(?,?,?,?,?,?);");
            $stmt->bind_param("ssssii",$nombre,$contrasena,$dni,$apellido,$departamento,$usuario);
            $stmt->execute();
            $stmt->bind_result($estado);
            if($stmt -> fetch()){
               $valor_retorno =  $estado;

            }
         
            $stmt -> close();
            $db -> close();
            return  $valor_retorno;
           
           
        }
        catch (Exception $e) {
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }
             
          
       


    }

    static function regenerarContrasena(){
        $opciones = [
            'cost' => 12,
        ];
        $contrasena = password_hash("123456789", PASSWORD_BCRYPT, $opciones);
        return $contrasena;


    }





}