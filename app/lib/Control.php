<?php
require_once 'Seguridad.php';
require_once APP.'./models/modeloDepartamento.php';

class Control
{
  public function load_model($model)
  {
    require_once '../app/models/' . $model . '.php';

    return new $model;
  }

  public function load_view($view, $datos = [])
  {
    if(file_exists('../app/views/pages/' . $view . '.php'))
    {
      require_once '../app/views/pages/' . $view . '.php';
    }
    else
    {
      die("404 NOT FOUND");
    }
  }
  public function load_dashboard($view)
  {

    if(file_exists('../app/views/pages/' . $view . '.php'))
    {
      if(!empty(  $_POST['cedula']) && !empty($_POST['contrasena'])){
      
        require_once '../app/views/pages/' . $view . '.php';
  
      }
      else{
  
        Seguridad::redireccionarParametro("vacio");
      }
    }
    else
    {
      die("404 NOT FOUND");
    }

    

  }
  //FUNCIONES PARA PERSONA 
  public function ingresar_persona($view)
  {

    if(file_exists('../app/views/pages/' . $view . '.php'))
    {
      
        require_once '../app/views/pages/' . $view . '.php';
      
    }
    else
    {
      die("404 NOT FOUND");
    }

    

  }

  //FUNCIONES PARA DEPARTAMENTO
  public function ingresar_departamento($view)
  {

    if(file_exists('../app/views/pages/' . $view . '.php'))
    {
      
        require_once '../app/views/pages/' . $view . '.php';
  
    
    
    }
    else
    {
      die("404 NOT FOUND");
    }

    

  }
  public function editar_departamento($view)
  {

    if(file_exists('../app/views/pages/' . $view . '.php'))
    {
        
      $modeloDepartamento = new modeloDepartamento;
      $valores = $modeloDepartamento -> todosDepartamento();

        require_once '../app/views/pages/' . $view . '.php';
        
    
    
    }
    else
    {
      die("404 NOT FOUND");
    }

    

  }
  public function editar_departamento_id($view,$id)
  {

    if(file_exists('../app/views/pages/' . $view . '.php'))
    {
        


        require_once '../app/views/pages/' . $view . '.php';
       
        
    
    
    }
    else
    {
      die("404 NOT FOUND");
    }

    

  }

}