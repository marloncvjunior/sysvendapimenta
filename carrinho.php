<?php
include (dirname(__FILE__) . '/layout/header.php');
include (dirname(__FILE__) . '/layout/footer.php');
session_start();
print_r($_SESSION['carrinho']);
?>

<div class="container">

    <div class="row">

        <!-- Corpo da página -->
        <div class="col-md-8">
            <div class="container">
                <ol class="breadcrumb"><strong>Você está em:</strong> <li>Camino 1</li><li>Caminho 2 </li><li>Caminho 3</li></ol>
                <div class="row">
                    <table class="table">
                        <thead>
                            <th>Produto</th>
                            <th>Quantidade</th>
                            <th>Valor Unitário</th>
                            <th>Subtotal</th>
                        </thead>
                        <tbody>
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
