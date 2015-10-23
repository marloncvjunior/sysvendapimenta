<?php
//Classe utilizada para conecção com o banco de dados
class Connection {
    private $dsn = 'mysql:dbname=webpepper;host=127.0.0.1';
    private $username = "root";
    private $passwd = "";
    private static $conn = "";
    
    public function __construct() {
   
}
    public function conectar(){
    try{
     $this->conn = new PDO($this->dsn, $this->username, $this->passwd);//Instancia classe pdo passando argumento (bd:nomedocanco;caminhodoservidor)
    //echo 'Tudo Ok';
    //print_r($this->conn);
   }catch(PDOException $pdoerror){ 
       die($pdoerror->getTraceAsString());//Caso ocorra alguma execeção, mostra a excessão. die encerra um script e mostra argumento na tela;
   }
    return $this->conn; // retorna uma instancia PDO
    }
    
  
}
