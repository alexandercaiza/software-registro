<?php
class Usuario
{
    private $id_usuario;
    private $usuario;

    public function __construct($id_usuario_, $usuario_){
        $this ->  $id_usuario = $id_usuario_;
        $this ->  $usuario = $usuario_;

    }

    public function getIdUsuario(){
        return $this ->  $id_usuario;
    }
    public function getUsuario(){
        return $this ->  $usuario;
    }

    


}