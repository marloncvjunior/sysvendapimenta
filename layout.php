<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/layout.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
        <style>

        </style>
    </head>
    <body>

        <div class="navbar navbar-static-top navbar-inverse">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bar1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Menu</a>
            </div>
            <div class="collapse navbar-collapse pull-right" >
                <ul class="nav navbar-nav ">
                    <li class="active"><a href="#">Link 1</a></li>
                    <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                    <li></li>
                </ul>
                <div class="navbar navbar-form pull-right">
                    <form action="controller/BeanUsuario.class.php" method="POST">
                        <label class="label" for="usuario">Usuario:</label> 
                        <input type="text" name="usuario"/>
                        <label class="label" for="senha"> Senha:</label>
                        <input type="password" name="senha"/>
                        <button class="btn btn-success" type="submit">Login</button>
                    </form>
                </div>
            </div>

        </div>



        <!-- Código acima cria a barra fixa do site -->
        <div class="container-fluid">

            <div class="row">

                <div class="col-md-2 ">
                    Menu esquerda
                </div>
                <div class="col-md-8">
                    <div class="container">
                        <ol class="breadcrumb"><strong>Você está em:</strong> <li>Camino 1</li><li>Caminho 2 </li><li>Caminho 3</li></ol>
                        <div class="row">

                            <?php
                            require (dirname(__FILE__) . "/controller/BeanShopping.class.php");
                            $produtos = new BeanShopping();
                            $produtos->listaProdutos();
                            //print_r($produtos);
                            ?>

                        </div>
                    </div>

                </div>
                <div class="col-md-2">
                    <div class="thumbnail">
                        <div class="caption text-center nav navbar alert-info">
                            <span class="glyphicon glyphicon-shopping-cart"> Carrinho</span>
                             
                        </div>
                        <ul class="nav">
                        <li class="">Total da Compra: R$</li> 
                        <li>Total de Itens:</li>
                        <li><a class="btn btn-link">Lista de Itens</a></li>
                        </ul>
                    </div>
                </div>
            </div>



            <div class="navbar navbar-static-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <br><br><br><br>
                        </div>
                        <div class="col-md-3">
                            <br><br><br><br>
                        </div>
                        <div class="col-md-3">
                            <br><br><br><br>
                        </div>
                        <div class="col-md-3">
                            <br><br><br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-md-push-6">CopyRigth 2015</div>
                    </div>
                </div>
            </div>
    </body>
</html>
