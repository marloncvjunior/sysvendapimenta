<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BeanUsuario
 *
 * @author will
 */
class BeanUsuario {
    public static function autentica() {
       
       $usuario = $_POST['usuario'];
       $senha = $_POST['senha'];
       $consulta = new Select();
       $userlist = $consulta->exeQuery("usuario");
       foreach ($userlist as $key => $value) {
           if($value['usuario'] == $usuario){
               if ($value['senha'] == $senha) {
                   session_start();
                   $_SESSION['usuario'] = $value['codigo'];
                   
               }
           }
       }
       
    }
    public static function cadastrar(){
        $_POST;
    }
}
