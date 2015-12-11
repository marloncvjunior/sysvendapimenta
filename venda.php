<?php
include (dirname(__FILE__) . './header.php');

require_once dirname(__FILE__) . '/model/Carrinho.class.php';
require_once dirname(__FILE__) . '/controller/BeanPedido.class.php';
require_once dirname(__FILE__) . '/controller/BeanCliente.class.php';
require_once dirname(__FILE__) . '/controller/BeanVenda.class.php';
$pedido = new BeanPedido();
$listpedido = null;
session_start();
if (isset($_REQUEST['gravar'])) {
    
        $vendare = $_REQUEST;
        $venda = new BeanVenda();
        unset($vendare['gravar']);
        unset($vendare['nome']);
        $vendare['codigo'] = null;
        $vendare['cliente'] = BeanCliente::getClienteLogado()->getCodigo();
        if ($vendare['cliente'] == 1) {
         echo "<script>alert('Faça Login ou cadastre-se !!!!')</script>";
    } else {
        $venda->gravarVenda($vendare);
        die();
    }
    
}
?>
<script type="text/javascript">
    $(document).ready(function () {
        $("#gravar").click(function () {
           // alert('foi');
           //var descricao = $(this).parents('div').find('#descricao').val();
           var codcadnac = $(this).parents('div').find('#codcadnac').val();
           var codcadest = $(this).parents('div').find('#codcadest').val();
          if((!isNaN(codcadnac) && (!isNaN(codcadest)))){
              alert('tudo certo');
              return true;
          }else{
              alert('Insira um valor válido');
              return false;
          }
           //alert('descricao = '+valueOf(descricao)+' preco= '+valueOf(preco)+' estoque= '+valueOf(estoque);
          // valueOf(preco);
           
        });
    });
</script>
<div class="row ">
    <div class="col-md-7 ">
        <form class="form-horizontal">
            <fieldset>

                <!-- Form Name -->
                <legend>Dados Cliente</legend>

                <?php
                //echo $_SESSION['codcarrinho'];
                $cliente = null;
                $cliente = BeanCliente::getClienteLogado();
                if ($cliente->getCodigo() != 1) {
                    //print_r($cliente);
                    $cliente = BeanCliente::getClienteLogado();
                } else {
                    
                }
                echo " 
                <div class='form-group'>
                    <input type='hidden' name='carrinho' value='{$_SESSION['codcarrinho']}'/>
                    <label class='col-md-4 control-label' for='textinput'>Nome</label>  
                    <div class='col-md-5'>
                        <inut id='' name='codigocli' value='{$cliente->getCodigo()}'/>
                        <input id='textinput' name='nome' placeholder='' class='form-control input-md' type='text' value='{$cliente->getNome()}'>
                        <span class='help-block'>Nome completo</span>  
                    </div>
                </div>

                <!-- Text input-->
                <div class='form-group'>
                    <label class='col-md-4 control-label' for='textinput'>Cpf/Cnpj</label>  
                    <div class='col-md-5'>
                        <input id='codcadnac' name='codcadnac' placeholder='' class='form-control input-md' required='' type='text' value='{$cliente->getCodCadNac()}'>

                    </div>
                </div>

                <!-- Text input-->
                <div class='form-group'>
                    <label class='col-md-4 control-label' for='textinput'>I.E</label>  
                    <div class='col-md-5'>
                        <input id='codcadest' name='codcadest' placeholder='' class='form-control input-md' required='' type='text' value='{$cliente->getCodCadEac()}'>
                        <span class='help-block'>Inscrição Estadual/ Não utilizar R.G</span>  
                    </div>
                </div>

                <!-- Text input-->
                <div class='form-group'>
                    <label class='col-md-4 control-label' for='textinput'>Endereço</label>  
                    <div class='col-md-8'>
                        <input id='endereco' name='endereco' placeholder='' class='form-control input-md' type='text' value='{$cliente->getEndereco()}'>
                        <span class='help-block'>Endereço Completo</span>  
                    </div>
                </div>

                <!-- Button (Double) -->
                <div class='form-group'>
                    <label class='col-md-4 control-label' for='button1id'></label>
                    <div class='col-md-8'>
                       
                    </div>
                </div>  
                ";
                ?>
                <div class='form-group'>
                    <div class="row">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6">
                            <button type="submit" formaction="venda.php" formmethod="post" class="btn btn-success" name="gravar" value="venda" id="gravar">Finalizar Venda</button>
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>

    </div>
    <div class="col-md-5 ">
        <div class="row">
            <table class="table">
                <thead>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Valor Unitário</th>
                <th>Subtotal</th>
                </thead>
                <?php
                // print_r($_SESSION['codcarrinho']);
                if (isset($_SESSION['codcarrinho'])) {

                    $codcar = $_SESSION['codcarrinho'];
                    $listpedido = ($pedido->listarPedido($codcar));
                    //  print_r($codcar);
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

                </tfoot>
            </table>


        </div>
    </div>
</div>
<?php
include (dirname(__FILE__) . './footer.php');