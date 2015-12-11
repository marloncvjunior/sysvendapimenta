<?php
if(!session_status()){
    session_start();
}
include (dirname(__FILE__) . './header.php');

require_once dirname(__DIR__) . '/controller/BeanUsuario.class.php';
require_once (dirname(__DIR__) . '/model/Usuario.class.php');


BeanUsuario::verificaPermissao();

include (dirname(__FILE__) . './footer.php');
?>
