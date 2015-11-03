<?php
require (dirname(__FILE__) . './layout/header.php');
?>

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
                    <div class="col-md-5">Produto</div>
                    <div class="col-md-2">Quantidade</div>
                    <div class="col-md-2">Valor Unitário</div>
                    <div class="col-md-3">Subtotal</div>
                  
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
                    <li class="">Cliente:<?php echo "".$_SESSION['carrinho']['cliente']->getNome(); ;?> </li>
                    <li class="">Total da Compra: R$ <?php echo "".$_SESSION['usuario']->getValorTotal();?> </li> 
                    <li>Total de Itens:<?php echo "";?></li>
                    <li><a class="btn btn-link">Lista de Itens</a></li>
                </ul>
            </div>
        </div>
    </div>

<?php
require (dirname(__FILE__) . './layout/footer.php');
?>
