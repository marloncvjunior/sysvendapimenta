<?php
include (dirname(__FILE__) . './layout/header.php');
require (dirname(__FILE__) . "/controller/BeanShopping.class.php");
require (dirname(__FILE__) . "/controller/BeanCarrinho.class.php");
include (dirname(__FILE__) . '/layout/footer.php');

$carrinho = new BeanCarrinho();
$carrinho->add($_GET);

if (isset($_GET['logout']) && $_GET['logout'] == 'true') {
    session_destroy();
}else{}
if (isset($_GET['resumo']) && $_GET['resumo'] == 'true') {
    $carrinho->resumo();
}else{}

//print_r($carrinho);
//var_dump($carrinho);
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
                    //print_r($_SESSION['carrinho']);
                    $produtos = new BeanShopping();
                    $listaprodutos = $produtos->listaProdutos();
                   // print_r($listaprodutos);
                    foreach ($listaprodutos as $key => $value) {
                        //print_r($value);

                        echo "<div class='col-sm-6 col-md-4 center'>
                            <div class='thumbnail'>
                                <img src='./imagens/produtos/{$value['imagem']}' alt='...' height='121px' width='127px'>
                                <div class='caption'>
                                    <h3>{$value['descricao']}</h3>
                                    <p>...</p>
                                    <form>
                                    <p><label for='quant'>Quant: </label> <input type='number' name='quant' size='3'/>
                                    <button type='submit' formaction='".$_SERVER['SCRIPT_NAME']."'name='codproducar' value='".$value['codigo']."' class='btn btn-primary' role='button'>Adicionar no Carrinho
                                        </button>
                                        </a> 
                                    </form>
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
                    <li class="">Cliente:<?php echo "";?> </li>
                    <li class="">Total da Compra: R$ <?php echo "";?> </li> 
                    <li>Total de Itens:<?php echo "";?></li>
                    <li><a class="btn btn-link" href="main.php?resumo=true">Lista de Itens</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


