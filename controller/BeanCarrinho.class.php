<?php

require_once(dirname(__DIR__) . "/model/Carrinho.class.php");
require_once(dirname(__DIR__) . "/model/Produto.class.php");
require_once (dirname(__DIR__) . "/controller/BeanCliente.class.php");
require_once dirname(__FILE__) . '/FactoryProduto.class.php';
require_once dirname(__FILE__) . '/FactoryItemCarrinho.class.php';
require_once dirname(__FILE__) . '/DBInsert.class.php';
require_once dirname(__FILE__) . '/DBDelete.class.php';

class BeanCarrinho {

    private $carrinho;

    public function __construct() {
        /*session_start();
        if (isset($_SESSION['cliente'])) {
            $cliente = $_SESSION['cliente'];
        } else {
            session_start();
            $cliente = '';
        }
        */

        $this->carrinho = new Carrinho();
    }

    public function add($codigo = null) {

        $inserir = new Insert();
        if (!isset($_SESSION['codcarrinho'])) {
            $_SESSION['codcarrinho'] = $inserir->saveCarrinho();
            //print_r($_SESSION);
        } else {
           // echo "Está criado";
        }
        if (isset($codigo['codproducar']) && isset($codigo['quant'])) {
            //echo 'carregou carrinho, cod carrinho: ';
            $quant = $codigo['quant'];
            $cod = $codigo['codproducar'];
            ($inserir->saveItemCar($_SESSION['codcarrinho'], array($cod => $quant)));
        } else {
          //  echo 'nao carregou carrinho';
        }
    }

    public function rm($produto,$carrinho) {
        $delete = new DBDelete();
        $delete->exeQueryCarrinho($produto,$carrinho);
    }

    public function resumo() {
       /* $cliente = BeanCliente::getClienteLogado();
        if ($cliente) {

            echo "Cod carrinho = " . $_SESSION['codcarrinho'];
            // echo "<script>location.href='carrinho.php'</script>";
        } else {
            echo "<script>alert('Faça o Login ou o cadastro');</script>";
            //header("Location: login.php ");
            echo "<script>location.href='login.php'</script>";
        }*/

        // print_r(array('carrinho','itemcarrinho','cliente'));
        echo "<script>location.href='carrinho.php'</script>";
    }

}
