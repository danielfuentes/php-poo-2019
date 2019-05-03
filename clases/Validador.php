<?php
class Validador{
    public function validacionUsuario($usuario,$repassword){
        $errores=array();
        $nombre = trim($usuario->getNombre());
        
        if(isset($nombre)) {
            if(empty($nombre)){
                $errores["nombre"]= "El campo nombre no debe estar vacio";
            }
        }
    
        $email = trim($usuario->getEmail());
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores["email"]="Email invalido !!!!!";
        }
        $password= trim($usuario->getPassword());
   
        if(isset($repassword)){
            $repassword = trim($repassword);
        }
        
        if(empty($password)){
            $errores["password"]= "Hermano querido el campo password no lo podés dejar en blanco";
        }elseif (strlen($password)<6) {
            $errores["password"]="La contraseña debe tener como mínimo 6 caracteres";
        }
        if(isset($repassword)){
            if ($password != $repassword) {
                $errores["repassword"]="Las contraseñas no coinciden";
            }
        }
    
        return $errores;
    }

}

