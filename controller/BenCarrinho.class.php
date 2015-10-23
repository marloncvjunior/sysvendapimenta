<?php
require dirname(__FILE__."/../model/Usuario.class.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BenCarrinho
 *
 * @author will
 */
class BenCarrinho {
    public static function create(){
        $usuario = new Usuario();
        $usuario->setCodigo($_SESSION['codigo']);
        $usuario->setUsuario($_SESSION['usuario'])
        ;
    }
}
