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
    <td><a class="btn btn-success" href="login.php">Finalizar Carrinho</a></td>

</tr>
</tfoot>