<?php

Class ConexaoBD{
    private $serverName = "localhost";
    private $userName = "root";
    private $password = "";
    private $dbName = "projeto_final";
   

    public function __conectar(){
        $conn = new mysqli($this->serverName, $this->userName, $this->password, $this->dbName);
        return $conn;
    }


    
        
        
}







?>