<?php

require_once (dirname(__DIR__) . "/model/Cliente.class.php");
require_once (dirname(__FILE__) . '/DBSelecte.class.php');
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
            $consulta = new Selecte();
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
                        $cliente->setCodCadEst($value['codcadest']);
                        $cliente->setCodCadNac($value['codcadnac']);
                        $cliente->setEndereco($value['endereco']);
                        $_SESSION['cliente'] = $cliente;

                        echo "Bem vindo " . $cliente->getNome();
                        // echo "<script>location.href='main.php'</script>";
                        print_r($_SESSION['cliente']);
                    }
                }
            }
        } else {
            //echo("vazio");
        }
    }

    public static function getClienteLogado() {
        if (isset($_SESSION['cliente'])) {

            return $_SESSION['cliente'];
        } else {
            //die("<a href='login.php'>Realize o Login/Cadastro !!!! </a>");
            // echo "<script>alert('Entre com o seu usuario ou crie uma conta');</script>";
            //echo "<script>location.href='login.php'</script>";
            $cliente = new Cliente();
            $cliente->setCodigo('1');
            $cliente->setNome('Visitante');

            return $cliente;
        }
    }

    public static function cadastraCliente($cliente) {
        unset($cliente['acao']);
        if (isset($cliente['nome']) && isset($cliente['email']) || isset($cliente['senha'])){
            $inserir = new Insert();
            $select = new Selecte();
            $listcliente = $select->exeQuery('cliente');
            $existe = false;
            foreach ($listcliente as $key => $value) {
                if ($value['email'] == $cliente['email']) {
                    $existe = true;
                }
            }
            if ($existe) {
                //echo "<script>alert('cliente já cadastrado');</script>";
                die("<a href='login.php'>Cliente já cadastrado</a>");
                //echo "asd";
                exit();
            } else {
                $inserir->exeInsert('cliente', $cliente);
                BeanCliente::autentica($cliente);
               // print_r($cliente);
            }


            //print_r($cliente);
        } else {
            echo "Não deu";
        }
    }

}
