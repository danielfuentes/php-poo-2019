<?php
class ArmarRegistro{
    public function armarUsuario($registro){
        $usuario = [
            "nombre"=>$registro->getNombre(),
            "email"=>$registro->getEmail(),
            "password"=> password_hash($registro->getPassword(),PASSWORD_DEFAULT),
            "perfil"=>1
        ];
    
        return $usuario;
    }
}