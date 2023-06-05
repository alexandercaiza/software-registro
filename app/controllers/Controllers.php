<?php
require_once APP. './models/DAO-departamento.php';
require_once APP. './models/DAO-persona.php';

class Controllers 
{

 //CONMTROLADORES DE DEPARTAMENTO
 //INGRESA UN DEPARTAMENTO

  public function departamento()
  {
    $nombre = $_POST['nombreDepartamento'];
    $daoDepartamento = new DAOdepartamento($nombre);
    $daoDepartamento ->registrarDepartamento();


  }

  public function editardepartamento()
  {
    $nombre = $_POST['nombreDepartamento'];
    $id = $_POST['id'];

    $daoDepartamento = new DAOdepartamento($nombre);
    $daoDepartamento -> modificarDepartamento($id, $nombre);


  }

  public function eliminarDepartamento($id){

    $daoDepartamento = new DAOdepartamento($nombre);
    $daoDepartamento -> eliminarDepartamento($id);


  }
  //METODO PARA INGRESAR UNA PERSONA A LA BASE DE DATOS 

  public function ingresarPersona(){
    echo "Ingreso la persona";
     $DaoPersona = new DAOPersona;
    echo $nombre = $_POST['nombre'];
    echo $apellido = $_POST['apellido'];
    echo $dni = $_POST['dni'];
    echo $departamento = $_POST['departamento'];
    echo $usuario = $_POST['usuario'];
    $DaoPersona -> ingresar_persona($nombre, $apellido,$dni, $departamento, $usuario);



  }
  
  

}