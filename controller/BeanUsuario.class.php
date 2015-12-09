<?php

require_once (dirname(__DIR__) . '/controller/DBSelecte.class.php');
require_once(dirname(__DIR__) . "/model/Usuario.class.php");

class BeanUsuario {

    public static function autentica($parametro = null) {
        //session_start();
        //print_r($parametro);
          $user = new Usuario();
        //print_r($user);
        
        
        if (isset($parametro['login'])) {
            // echo "cheio";

            $login = $parametro['login'];
            $senha = $parametro['senha'];
            $consulta = new Selecte();
            $userlist = $consulta->exeQuery("usuario");
           //print_r($userlist);

            foreach ($userlist as $key => $value) {
                //print_r($userlist);
                if ($value['login'] == $login) {
                    //echo 'email correto';
                    if ($value['senha'] == $senha) {
                        // echo 'senha';
                     
                        $user->setCodigo($value['codigo']);
                        $user->setLogin($value['login']);
                        $user->setNome($value['nome']);
                        $_SESSION['usuario'] = $user;
                    }
                }
            }
        }
        return $user;
    }

    public static function verifica() {
        if (isset($_SESSION['usuario'])) {

            return $_SESSION['usuario'];
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

    public static function verificaPermisso() {
        $usuario = BeanUsuario::verifica();
        if ($usuario->getCodigo()) {
            
        } else {
            header('Location: index.php');
        }
    }

}
