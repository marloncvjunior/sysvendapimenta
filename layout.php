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
            <div class="container"
                 <div class="collapse navbar-collapse" id="bar1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Link 1</a></li>
                        <li><a href="#">Link 2</a></li>
                        <li><a href="#">Link 3</a></li>
                </div>
                </ul>
            </div>

            <!-- Código acima cria a barra fixa do site -->
            <div class="container">
                <ol class="breadcrumb"><strong>Você está em:</strong> <li>Camino 1</li><li>Caminho 2 </li><li>Caminho 3</li></ol>
                <div class="row">
                   
                        <?php
                        require (dirname(__FILE__)."/controller/BeanShopping.class.php");
                        $produtos = new BeanShopping();
                        $produtos->listaProdutos();
                        //print_r($produtos);
                        
                        
                                
                        ?>
                    
                    </div>
                </div>
            </div>



    </body>
</html>
