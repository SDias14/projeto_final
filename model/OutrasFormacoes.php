<?php

class OutrasFormacoes {
    private $id;
    private $idUsuario;
    private $inicio;
    private $fim;
    private $descricao;

    //getter e setter

public function getId() {
    return $this->id;
}

public function setId($id) {
    $this->id = $id;
}

public function getIdUsuario() {
    return $this->idUsuario;
}

public function setIdUsuario($idUsuario) {
    $this->idUsuario = $idUsuario;
}


public function getInicio() {
    return $this->inicio;
}

public function setInicio($inicio) {
    $this->inicio = $inicio;

}

public function getFim() {
    return $this->fim;
}

public function setFim($fim) {
    $this->fim = $fim;
}

public function getDescricao() {
    return $this->descricao;

}

public function setDescricao($descricao) {
    $this->descricao = $descricao;
}

//fim getter e setter

public function inserirBD(){
    require_once 'ConexaoBD.php';
    $conn = new ConexaoBD();
    $conn = $conn->__conectar();
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO outrasformacoes (idUsuario, inicio, fim, descricao) VALUES ('$this->idUsuario', '$this->inicio', '$this->fim', '$this->descricao')";

    if ($conn->query($sql) === TRUE) {
        $this->id = mysqli_insert_id($conn);
        $conn->close();
        return true;
   } else {
       $conn->close();
       return false;
}



}


public function excluirBD($id){
    require_once 'ConexaoBD.php';
    $conn = new ConexaoBD();
    $conn = $conn->__conectar();
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "DELETE FROM outrasformacoes WHERE outrasformacoes  =' " .$id ."';";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        return true;
    } else {
        $conn->close();
        return false;
    }
}


public function listaFormacoes($idUsuario){
    require_once 'ConexaoBD.php';
    $conn = new ConexaoBD();
    $conn = $conn->__conectar();
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM outrasformacoes WHERE idUsuario = '$idUsuario'";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}





}












?>