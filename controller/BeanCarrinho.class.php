<?php

require(dirname(__DIR__) . "/model/Carrinho.class.php");
require(dirname(__DIR__) . "/model/Produto.class.php");
require (dirname(__DIR__) . "/controller/BeanCliente.class.php");
require_once dirname(__FILE__).'/FactoryProduto.class.php';
require_once dirname(__FILE__).'/FactoryItemCarrinho.class.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BenCarrinho
 *
 * @author will
 */
class BeanCarrinho {

    private $carrinho;

    public function __construct() {
        //session_start();
        if (isset($_SESSION['usuario'])) {
            $cliente = $_SESSION['usuario'];
        }else{
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
            $_SESSION['carrinho'][$cod] = $this->carrinho;*/
            
        } else {
            echo 'nao carregou carrinho';
        }
    }

    public function rm($codigo = null) {
        
    }
    public function resumo(){
        $cliente = BeanCliente::getClienteLogado();
        //print_r($cliente);
        $this->carrinho->setCliente($cliente);
        $fabricaitemcarrinho = new FactoryItemCarrinho();
        $array = $_SESSION['carrinho'];
        $this->carrinho->setItem($fabricaitemcarrinho->createItemCarrinhoArray($array));
        print_r($this->carrinho);
        $_SESSION['pedido'] = serialize($this->carrinho);
        if ($cliente) {
           // header("Location: carrinho.php ");
            //echo "Fechando carrinho";
            echo "<script>location.href='carrinho.php'</script>";
           
        }  else {
            echo "<script>alert('Faça o Login ou o cadastro');</script>";
            //header("Location: login.php ");
           // echo "<script>location.href='login.php'</script>";
        }
        
    }

}
