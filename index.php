<?php
require (dirname(__FILE__). "/controller/BeanShopping.class.php");
$produtos = new BeanShopping();
//print_r($produtos);
$produtos->listaProdutos();