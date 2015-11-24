<?php
include (dirname(__FILE__) . '/layout/header.php');
include (dirname(__FILE__) . '/layout/footer.php');
require_once dirname(__FILE__) . '/model/Carrinho.class.php';
require_once dirname(__FILE__) . '/controller/BeanPedido.class.php';
$pedido = new BeanPedido();
$listpedido = null;

print_r($listpedido);
?>

<div class="container">

    <div class="row">

        <!-- Corpo da página -->
        <div class="col-md-8">
            <div class="container">
                <ol class="breadcrumb"><strong>Você está em:</strong> <li>Camino 1</li><li>Caminho 2 </li><li>Caminho 3</li></ol>
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        ?>
                    </div>
                </div> 
                <div class="row">
                    <table class="table">
                        <thead>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Valor Unitário</th>
                        <th>Subtotal</th>
                        </thead>
                        <?php
                        session_start();
                        if (isset($_SESSION['codcarrinho'])) {
                            
                            $codcar = $_SESSION['codcarrinho'];
                            $listpedido = ($pedido->listarPedido($codcar));
                            print_r($codcar);
                            include_once './layout/listcarrinho.php';
                        }
                        ?>
                    </table>


                </div>
            </div>


            <!-- Barra lateral direita -->
        </div>

    </div>
</div>
