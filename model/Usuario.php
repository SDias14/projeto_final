<?php

class Usuario {
    private $id;
    private $nome;
    private $cpf;
    private $email;
    private $dataNascimento;
    private $senha;

    //getter e setter

public function getId() {
    return $this->id;
}

public function setId($id) {
    $this->id = $id;
}

public function getNome() {
    return $this->nome;
}

public function setNome($nome) {
    $this->nome = $nome;
}

public function getCpf() {
    return $this->cpf;
}

public function setCpf($cpf) {
    $this->cpf = $cpf;
}

public function getEmail() {
    return $this->email;
}

public function setEmail($email) {
    $this->email = $email;
}

public function getDataNascimento() {
    return $this->dataNascimento;
}

public function setDataNascimento($dataNascimento) {
    $this->dataNascimento = $dataNascimento;
}

public function getSenha() {
    return $this->senha;
}

public function setSenha($senha) {
    $this->senha = $senha;
}

//fim getter e setter


public function inserirBD(){
    $conn = new ConexaoBD();
    $conn = $conn->__conectar();
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO usuario (nome, cpf, email, dataNascimento, senha) VALUES ('$this->nome', '$this->cpf', '$this->email', '$this->dataNascimento', '$this->senha')";

    if ($conn->query($sql) === TRUE)
    {
        $this->id = mysqli_insert_id($conn);
        $conn -> close();
        return true;
    } else {
        $conn -> close();
        return false;
    } 

    





  




}

public function carregarUsuario($cpf)
{
    require_once 'ConexaoBD.php';


    $conn = new ConexaoBD();
    $conn = $conn->__conectar();
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM usuario WHERE cpf = '$cpf'";
    $result = $conn->query($sql);
    $r = $result->fetch_object();
    if ($r != null)
    {
        $this->id = $r->idUsuario;
        $this->nome = $r->nome;
        $this->cpf = $r->cpf;
        $this->email = $r->email;
        $this->dataNascimento = $r->dataNascimento;
        $this->senha = $r->senha;
        $conn -> close();
        return true;
    }
    else
    {
        $conn -> close();
        return false;
    }
    


}


public function atualizarBD()
{
    require_once 'ConexaoBD.php';
    $conn = new ConexaoBD();
    $conn = $conn->__conectar();
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "UPDATE usuario SET nome = '$this->nome', cpf = '$this->cpf', email = '$this->email', dataNascimento = '$this->dataNascimento', senha = '$this->senha' WHERE idUsuario = '$this->id'";

    if ($conn->query($sql) === TRUE)
    {
        $this->id = mysqli_insert_id($conn);
        $conn -> close();
        return true;
    } else {
        $conn -> close();
        return false;
    } 


}

}



?>