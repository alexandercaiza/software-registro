<?php
require_once  APP.'./lib/Seguridad.php';
require_once  'modelo-persona.php';
class DAOPersona
{
  public function __construct(){

  }

  public function ingresar_persona($nombre, $apellido,$dni, $departamento, $usuario)
  {
    if(strlen($nombre) > 0 && strlen($apellido)>0 && strlen($dni)>0 && is_numeric($departamento) && is_numeric($usuario)){
       
        echo "valores ingresados en la base de datos";
        echo "<br>";
        $contrasena = modeloPersona::regenerarContrasena();
        $modeloPersona = new modeloPersona;
       $estado = $modeloPersona -> insertarPersona($nombre, $apellido, $dni,$contrasena, $departamento,$usuario);
       if($estado == "correcto"){
        $carpeta = "ingresarPersona";
        $estado = "exitoso";
        Seguridad::redireccionPaginas($carpeta, $estado);


      }
      else{
        $carpeta = "ingresarPersona";
        $estado = "incorrecto";
        Seguridad::redireccionPaginas($carpeta, $estado);

      }
    }
    else{
        $carpeta = "ingresarPersona";
        $estado = "vacio";
        Seguridad::redireccionPaginas($carpeta, $estado);

       
    }

  }



}