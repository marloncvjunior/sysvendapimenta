<?php

require_once(dirname(__DIR__) . "/model/Carrinho.class.php");
require_once(dirname(__DIR__) . "/model/Produto.class.php");
require_once (dirname(__DIR__) . "/controller/BeanCliente.class.php");
require_once dirname(__FILE__) . '/FactoryProduto.class.php';
require_once dirname(__FILE__) . '/FactoryItemCarrinho.class.php';
require_once dirname(__FILE__) .'/DBInsert.class.php';
require_once dirname(__FILE__) .'/DBDelete.class.php';


class BeanCarrinho {

    private $carrinho;

    public function __construct() {
        //session_start();
        if (isset($_SESSION['usuario'])) {
            $cliente = $_SESSION['usuario'];
        } else {
            session_start();
            $cliente = '';
        }
        //

        $this->carrinho = new Carrinho();
    }

    public function add($codigo = null) {
        if (isset($codigo['codproducar']) && isset($codigo['quant'])) {
            echo 'carregou carrinho';
            $quant = $codigo['quant'];
            $cod = $codigo['codproducar'];
            $_SESSION['carrinho'][$cod] = $quant;
            //print_r($codigo);
            //print_r($_SESSION['carrinho']);
            /* $produto = new Produto();

              $select = new Select();
              $retorno = $select->exeQueryCod('produto', $cod);
              //print_r(($retorno));
              $produto->arrayToProduct($retorno);
              //print_r($this->carrinho);
              $this->carrinho->addProduto($produto, $quant);
              $_SESSION['carrinho'][$cod] = $this->carrinho; */
        } else {
            echo 'nao carregou carrinho';
        }
    }

    public function rm() {
        $delete = new DBDelete();
        $delete->exeQuery($codigo, $tabela);
        
        
    }

    public function resumo() {
        $cliente = BeanCliente::getClienteLogado();
        if ($cliente) {
            // header("Location: carrinho.php ");
            //echo "Fechando carrinho";
            
            //print_r($cliente);
            //$this->carrinho->setCliente($cliente);
            //$fabricaitemcarrinho = new FactoryItemCarrinho();
            //$array = $_SESSION['carrinho'];
            //$this->carrinho->setItem($fabricaitemcarrinho->createItemCarrinhoArray($array));
            $produto = $_SESSION['carrinho'];
            print_r($produto);
           $inserir = new Insert();
           print_r ($inserir->saveCarrinho($produto)) ;
           // echo "<script>location.href='carrinho.php'</script>";
        } else {
            echo "<script>alert('Faça o Login ou o cadastro');</script>";
            //header("Location: login.php ");
             echo "<script>location.href='login.php'</script>";
        }
        //session_start(); 
        // print_r($this->carrinho);
        // $_SESSION['pedido'] = ($this->carrinho);
       // $_SESSION['pedido'] = (serialize($this->carrinho));
        // print_r(json_decode(($_SESSION['pedido'])));
    }

}
