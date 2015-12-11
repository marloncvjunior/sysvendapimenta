<?php

require_once (dirname(__DIR__) . '/controller/DBSelecte.class.php');
require_once(dirname(__DIR__) . "/model/Usuario.class.php");

class BeanUsuario {

    public static function autentica($parametro = null) {
     

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
                        print_r($_SESSION['usuario']);
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
            $usuario = null;

            return $usuario;
        }
    }

    public static function verificaPermissao() {
        session_start();

        if (isset($_SESSION['usuario'])) {
            echo "esta";
            //print_r($_SESSION['usuario']);
            //header('Location: index.php');
        } else {
            //print_r($_SESSION);
        
            //print_r($_SESSION['usuario']);
            //echo "nao esta";
           die("<div class='container-fluid'>
                <div class='row'>
                    <div class='col-md-12'>
			<div class='alert alert-dismissable alert-warning'>
				 
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
				</button>
				<h4>
				Alert!
				</h4> <strong>Warning! </strong> Oque está fazendo aqui ???? Autentique-se !!!! <a href='login.php' class='alert-link'>alert link</a>
			</div>
                    </div>
                </div>
            </div>");
            //header('Location: login.php');
        }
    }

}
