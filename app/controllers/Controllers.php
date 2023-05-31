<?php
require_once APP. './models/DAO-departamento.php';

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
  
  

}