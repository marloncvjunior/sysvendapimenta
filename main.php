<?php
require (dirname(__FILE__) . './layout/header.php');
require (dirname(__FILE__) . "/controller/BeanShopping.class.php");
require (dirname(__FILE__) . "/controller/BeanCliente.class.php");
require (dirname(__FILE__) . "/controller/BeanCarrinho.class.php");
BeanCliente::autentica($_REQUEST);
$carrinho = new BeanCarrinho();
print_r($carrinho);
?>

<!-- Código acima cria a barra fixa do site -->
<div class="container-fluid">

    <div class="row">

        <div class="col-md-2 ">
            Menu esquerda
        </div>



        <!-- Corpo da página -->
        <div class="col-md-8">
            <div class="container">
                <ol class="breadcrumb"><strong>Você está em:</strong> <li>Camino 1</li><li>Caminho 2 </li><li>Caminho 3</li></ol>
                <div class="row">

                    <?php
                    $produtos = new BeanShopping();
                    $listaprodutos = $produtos->listaProdutos();
                    //print_r($listaprodutos);
                    foreach ($listaprodutos as $key => $value) {
                        //print_r($value);

                        echo "<div class='col-sm-6 col-md-4 center'>
                            <div class='thumbnail'>
                                <img src='./imagens/produtos/{$value['imagem']}' alt='...' height='121px' width='127px'>
                                <div class='caption'>
                                    <h3>{$value['descricao']}</h3>
                                    <p>...</p>
                                    <p><a href='#' class='btn btn-primary' role='button'>Adicionar no Carrinho</a> 
                                </div>
                            </div>
                            
                        </div>";
                    }
                    ?>

                </div>
            </div>


            <!-- Barra lateral direita -->
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                <div class="caption text-center nav navbar alert-info">
                    <span class="glyphicon glyphicon-shopping-cart"> Carrinho</span>

                </div>
                <ul class="nav">
                    <li class="">Cliente:<?php echo "" ;?> </li>
                    <li class="">Total da Compra: R$ <?php echo "";?> </li> 
                    <li>Total de Itens:<?php echo "";?></li>
                    <li><a class="btn btn-link">Lista de Itens</a></li>
                </ul>
            </div>
        </div>
    </div>

    <?php
    require (dirname(__FILE__) . './layout/footer.php');
    ?>

