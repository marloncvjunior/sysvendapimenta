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
                        $codcar=0;
                        if (isset($_SESSION['codcarrinho'])) {

                            $codcar = $_SESSION['codcarrinho'];
                            $listpedido = ($pedido->listarPedido($codcar));
                            print_r($codcar);
                            //include_once './layout/listcarrinho.php';
                        }
                        ?>
                        <tbody>
                            <?php
                            $subtotal = 0;
                            $sub = 0;
                            $quant = 0;
                            $preco = 0;
                            foreach ($listpedido as $key => $value) {
                                $sub = $value['quantidade'] * $value['preco'];
                                $quant += $value['quantidade'];
                                $preco += $value['preco'];

                                echo "<tr>
                                <td> <img src='./imagens/produtos/{$value['imagem']}' alt='...' height='121px' width='127px'> {$value['descricao']}<spam class=' glyphicon'></spam></td>
                                <td>{$value['quantidade']}</td>
                                <td>R$ {$value['preco']}</td>
                                <td>R$ " . number_format($sub, 2) . "</td>
                            </tr>";
                                $subtotal += $sub;
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Totais</td>
                                <td><?php echo $quant; ?></td>
                                <td>R$ <?php echo number_format($preco, 2); ?></td>
                                <td>R$ <?php echo number_format($subtotal, 2); ?></td>
                            </tr>
                            <tr>

                                <td><a class="btn btn-warning" href="main.php">Voltar as compras</a></td>
                                <td></td>
                                <td></td>
                                <td><a class="btn btn-success" href="venda.php?codcar=<?php echo $codcar; ?>">Finalizar Carrinho</a></td>

                            </tr>
                        </tfoot>
                    </table>


                </div>
            </div>


            <!-- Barra lateral direita -->
        </div>

    </div>
</div>
