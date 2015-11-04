<?php
require dirname(__FILE__).'../../model/ItemCarrinho.class.php';

class FactoryItemCarrinho {
    public static function createItemCarrinho(){
        return new ItemCarrinho();
    }
}
