<?php 
require_once  'modeloDepartamento.php';
require_once  APP.'./lib/Seguridad.php';

class DAOdepartamento{

      protected $nombre;
      public function __construct($_nombre = "sin nombre"){
        $this -> nombre = $_nombre;

      }
      

      public function registrarDepartamento(){
        $valor = $this -> nombre;

        if(isset( $valor) && strlen($valor) >0 ){
            //echo "Ingresando en la base de datos " . $this->nombre;
            $modeloDepartameto = new modeloDepartamento;
            $estado =  $modeloDepartameto -> insertarDepartamento($valor);
            if($estado == "correcto"){
              $carpeta = "ingresarDepartamento";
              $estado = "exitoso";
              Seguridad::redireccionPaginas($carpeta, $estado);


            }
            else{
              $carpeta = "ingresarDepartamento";
              $estado = "incorrecto";
              Seguridad::redireccionPaginas($carpeta, $estado);

            }
            
        }
        else{
          $carpeta = "ingresarDepartamento";
          $estado = "vacio";
          Seguridad::redireccionPaginas($carpeta, $estado);
        }
      }

      public function traerDepartamento($id){
      
          $modeloDepartameto = new modeloDepartamento;
          $estado =  $modeloDepartameto -> idDepartamento($id);
          return $estado[0][0];
        
             


      }

      public function modificarDepartamento($id, $nuevo_nombre){
     



        
        $modeloDepartamento = new modeloDepartamento;
        $estado = $modeloDepartamento -> actualizarDepartamento($id, $nuevo_nombre);


        if($estado == "correcto"){
          $carpeta = "editarDepartamento";
          $estado = "exitoso";
          Seguridad::redireccionPaginas($carpeta, $estado);


        }
        else{
          $carpeta = "editarDepartamento";
          $estado = "incorrecto";
          Seguridad::redireccionPaginas($carpeta, $estado);

        }
 
        




      }

      public function eliminarDepartamento($id){
     



        
        $modeloDepartamento = new modeloDepartamento;
        $estado = $modeloDepartamento -> eliminarDepartamento($id);


        if($estado == "correcto"){
          $carpeta = "editarDepartamento";
          $estado = "exitoso";
          Seguridad::redireccionPaginas($carpeta, $estado);


        }
        else{
          $carpeta = "editarDepartamento";
          $estado = "incorrecto";
          Seguridad::redireccionPaginas($carpeta, $estado);

        }
 
      






      }





}