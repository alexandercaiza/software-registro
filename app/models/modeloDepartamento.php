<?php
require_once APP .'./config/Database.php';
class modeloDepartamento
{
    public $db;
    public $valor;
    public function __construct(){
        $mysqli = new Database();
        $this -> db = $mysqli -> estaConectado();
    }

    public function insertarDepartamento($departamento){
        try{
            $db = $this -> db;
            $stmt = $db->prepare("CALL sp_insertar_departamento(?);");
            $stmt->bind_param("s",$departamento);
            $stmt->execute();
            $stmt->bind_result($estado);
            if($stmt -> fetch()){
               $valor_retorno =  $estado;

            }
            else{
                $valor_retorno =  "sin valor";
            }
         
            $stmt -> close();
            $db -> close();
            return  $valor_retorno;
           
           
        }
        catch (Exception $e) {
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }
             
          
       


    }

    public function todosDepartamento(){
        try{
            $db = $this -> db;
            $stmt = $db->query("select * from vw_mostrar_all_departamentos;");
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

    public function idDepartamento($id){
        try{
            $db = $this -> db;
            $stmt = $db->query("SELECT nombre FROM departamento where id_departamento = $id;");
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

    public function actualizarDepartamento($id, $nuevo_nombre){

        try{
            $db = $this -> db;
            $stmt = $db->prepare("CALL sp_actualizar_departamento(?,?);");
            $stmt->bind_param("is",$id,$nuevo_nombre);
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
    public function eliminarDepartamento($id){

        try{
            $db = $this -> db;
            $stmt = $db->prepare("CALL sp_eliminar_departamento(?);");
            $stmt->bind_param("i",$id);
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







}
