<?php
require_once (dirname(__FILE__) . '/header.php');
require_once dirname(__FILE__) . '/controller/BeanCliente.class.php';
require_once dirname(__FILE__).'/controller/DBInsert.class.php';



if(isset($_REQUEST['acao'])){
if ($_REQUEST['acao'] == "login") {
    BeanCliente::autentica($_REQUEST);
   
}else{
   BeanCliente::cadastraCliente($_REQUEST);
 
}
}else{
    //echo "não carregou usuario"; 
}



?>

<div class="container">

    <!-- Corpo da página -->
    <div class="container">
       
        <div class="col-md-12">
 <ol class="breadcrumb"><strong>Você está em:</strong> <li>Camino 1</li><li>Caminho 2 </li><li>Caminho 3</li></ol>
            <div class="row">
                <div class="col-md-6">
                    <div class='thumbnail center'>
                        Login
                        
                       <form action="<?php echo $_SERVER['SCRIPT_NAME'];?>" method="POST">
                        <label class="label label-info" for="email">Email:</label> 
                        <input type="text" name="email" required="true"/><br>
                        <label class="label label-info" for="senha"> Senha:</label>
                        <input type="password" name="senha" required="true"/><br>
                        <button class="btn btn-success" type="submit" value="login" name="acao">Login</button>
                    </form>
                    </div>
                </div>

         
            <div class="col-md-6">
                <div class='thumbnail center'>
                   <form action="<?php echo $_SERVER['SCRIPT_NAME'];?>" method="POST">
                       <p>Cadastro</p>
                        <label class="label label-info" for="nome"  >Nome:</label> 
                        <input type="text" name="nome" class="" required="true"/><br>
                        <label class="label label-info" for="email">Email:</label> 
                        <input type="text" name="email" required="true"/><br>
                        <label class="label label-info" for="senha"> Senha:</label>
                        <input type="password" name="senha" required="true"/><br>
                        <button class="btn btn-success" type="submit" value="cad" name="acao">Cadastro</button>
                    </form>

                </div>

            </div>
        </div>
    </div>


    <!-- Barra lateral direita -->
</div>

</div>

<?php
include (dirname(__FILE__) . '/footer.php');
?>

