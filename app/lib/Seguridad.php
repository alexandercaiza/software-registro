<?php

class Seguridad 
{
// REDICRECCION AL LOGIN 
    static function redireccionar(){
       
        header(REDIREC);

    }
// REDIRECCIONA AL LOGIN CON VALOR VACIO 
    static function redireccionarParametro($estado){
       
        header(REDIREC."/".$estado);

    }
// VERIFICA SI LA URL DE LOGIN TIENE UN TERCER PARAMETRO
// VERIFICA SI LOS CAMPOS ESTAN VACIO O SI EL RGISTRO ES EXITOSO
    static function validarUrlInicio(){

        if(isset($_GET['url']))
       {
          $url            = rtrim($_GET['url'], '/');
          $url            = filter_var($url, FILTER_SANITIZE_URL);
          $url            = explode('/', $url);
          $tamanioArreglo = count($url);

           if( $tamanioArreglo == 3){
               return $estado = $url[2];
            }
            else{
               return  $estado = " ";
            }

        }
    }
    static function redireccionPaginas($carpeta, $estado){
        header(DIRECCION."/".$carpeta."/".$estado);
    }
}