<?php
require_once  'modelo-usuario.php';
class DAOUsuario
{
public function todosUsuarios(){
   $modeloUsuario = new Modelousuario;
   $$modeloUsuario -> obtenerTodosUsuarios();

}


}