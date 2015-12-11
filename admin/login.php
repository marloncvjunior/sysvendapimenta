<?php
session_start();
require_once dirname(__DIR__) . '/controller/BeanUsuario.class.php';
include (dirname(__FILE__) . './headerindex.php');


require_once (dirname(__DIR__) . '/model/Usuario.class.php');

if (isset($_POST['logar'])) {
    $paramentro = $_POST;
    unset($_POST['logar']);
   $usuario = BeanUsuario::autentica($_POST);
  
    if ($usuario->getCodigo()) {
        $_SESSION['usuario'] = $usuario;
        echo "<script>alert('Bem vindo {$usuario->getNome()} ');</script>";
        echo "<script>location.href='index.php'</script>";
        //echo 'auten';
    }else{
         //header("Location:produto.php");
       die("<a href='login.php'>Usuario ou senha inválidos !!!!</a>");
      //  echo 'nao auten';
    }
    
}
?>
<div class="row">
    <div class="col-md-12">

        <form class="form-horizontal" method="Post" action="login.php">
            <fieldset>

                <!-- Form Name -->
                <legend>Login Administrador</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Login:</label>  
                    <div class="col-md-4">
                        <input id="textinput" name="login" placeholder="" class="form-control input-md" required="" type="text">

                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="senha">Senha: </label>
                    <div class="col-md-4">
                        <input id="senha" name="senha" placeholder="" class="form-control input-md" type="password">

                    </div>
                </div>

                <!-- Button (Double) -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="logar"></label>
                    <div class="col-md-8">
                        <button id="logar" name="logar" class="btn btn-success" >Login</button>
                        <button id="resete" name="resete" class="btn btn-danger">Cancelar</button>
                    </div>
                </div>

            </fieldset>
        </form>


    </div>
    
</div>
<?php

include (dirname(__FILE__) . './footer.php');