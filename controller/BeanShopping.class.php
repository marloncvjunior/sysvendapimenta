<?php
include ('db/Select.class.php');

class BeanShopping {
    public function listaProdutos(){
       $listaproduto = new Select();
       $produtos = $listaproduto->exeQuery("produto");
       //print_r($produtos);
       foreach ($produtos as $key => $value) {
           //print_r($value);
            //echo"<tr>";
            echo"<div class='col-sm-6 col-md-4' center-block>
                            <div class='thumbnail'>
                                <img src='./imagens/produtos/{$value['imagem']}' alt='...' height='171px' width='180px'>
                                <div class='caption'>
                                    <h3>{$value['descricao']}</h3>
                                    <p>...</p>
                                    <p><a href='#' class='btn btn-primary' role='button'>Adicionar no Carrinho</a> 
                                </div>
                            </div>
                            
                        </div>";
       }
      
    }
}
