<?php

require(dirname(__DIR__) . "..\model\Cliente.class.php");
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
class BeanCliente {

    public static function autentica($parametro = null) {

        if (isset($parametro['email'])) {
           // echo "cheio";

            $usuario = $parametro['email'];
            $senha = $parametro['senha'];
            $consulta = new Select();
            $userlist = $consulta->exeQuery("cliente");
            //print_r($userlist);
            foreach ($userlist as $key => $value) {
                //print_r($userlist);
                if ($value['email'] == $usuario) {
                    //echo 'email correto';
                    if ($value['senha'] == $senha) {
                        session_start();
                        $cliente = new Cliente();
                        $cliente->setCodigo($value['codigo']);
                        $cliente->setEmail($value['email']);
                        $cliente->setNome($value['nome']);
                        $_SESSION['usuario'] = $cliente;

                        //echo "Bem vindo " . $cliente->getNome();
                    }
                }
            }
        }  else {
            //echo("vazio");
        }
    }
}  