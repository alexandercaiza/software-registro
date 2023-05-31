<?php

class Views extends Control
{

  public function inicio()
  {
    $datos = [
      "title" => "Inicio"
    ];
    $this->load_view('inicio', $datos);
  }

  public function update($id)
  {
    echo "Update view " . $id;
  }
  
  public function dashboard()
  {

    $this->load_dashboard('dashborad');
  
  }
//PAGINAS PARA PERSONAS
  public function ingresarPersona()
  {
    $this->ingresar_persona('ingresar-persona');
    
  
  }
  public function editarPersona()
  {
   echo "editando personas";
    
  
  }
  public function editarContrasena()
  {
    echo "cambiando la contrasena";
    
  
  }
  // PAGINAS PARA DEPARTAMENTO
  public function ingresarDepartamento()
  {
   
    $this ->ingresar_departamento("ingresar-departamento");
    
  
  }
  public function editarDepartamento()
  {
    $this -> editar_departamento("editar-departamento");
    
  
  }
  public function editarDeapartamentoId($id){

    $this -> editar_departamento_id("form-editar-departamento",$id);
  }

  public function eliminarDepartamento(){


    
  }
  // PAGINA PARA LOS USUARIOS
  public function ingresarUsuario()
  {
    echo "ingresando usuario";
    
  
  }
  public function editarUsuario()
  {
    echo "editar usuario";
    
  
  }

}