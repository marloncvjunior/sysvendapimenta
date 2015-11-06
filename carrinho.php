<?php
include (dirname(__FILE__) . '/layout/header.php');
include (dirname(__FILE__) . '/layout/footer.php');
require_once dirname(__FILE__). '/model/Carrinho.class.php';
session_start();
print_r($_SESSION['pedido']);
if ($_SESSION['pedido']) {
    $pedido = $_SESSION['pedido'];
}else{
    die("PEDIDO VAZIO");
}

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
                        
                        echo $pedido->getCliente()->getNome();
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
                        <tbody>
                            <?php
                            foreach ($pedido->getItem() as $key => $value) {
                                print_r(value);
                            }
                            ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>


                </div>
            </div>


            <!-- Barra lateral direita -->
        </div>

    </div>
</div>
