<?php
class Categoria
{
    //atributos da tabela usuário
    public $codcategoria;
    public $nomecategoria;

    public function __construct() //será executado ao usar a classe
    {
        include_once "Conexao.php"; //incluindo conexão
    }

    public function cadastrar()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para cadastrar (INSERT)
        $cmd = $con->prepare("INSERT INTO categoria (nomecategoria) 
        VALUES (:nomecategoria)");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":nomecategoria", $this->nomecategoria);
        $cmd->execute(); //executar o comando
    }

    public function consultar()
    {
        $con = Conexao::conectar();//acessar o BD
        $cmd = $con->prepare("SELECT * FROM categoria"); //comando SQL
        $cmd->execute();//executar o comando SQL
        return $cmd->fetchAll(PDO::FETCH_OBJ);
    }

    public function excluir()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para excluir (DELETE)
        $cmd = $con->prepare("DELETE FROM usuario 
        WHERE codusuario = :codusuario");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":codusuario",    $this->codusuario);
        $cmd->execute(); //executar o comando
    }

    public function atualizar()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para cadastrar (INSERT)
        $cmd = $con->prepare("UPDATE categoria SET
                                        nomecategoria    = :nomecategoria
                            WHERE codcategoria = :codcategoria");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":codcategoria",      $this->codcategoria);
        $cmd->bindParam(":nomecategoria",     $this->nomecategoria);
        $cmd->execute(); //executar o comando
    }

    public function retornar()
    {
        $con = Conexao::conectar();//acessar o BD
        $cmd = $con->prepare("SELECT * FROM categoria
        WHERE codcactegoria = :codcategoria"); //comando SQL
        $cmd->bindParam(":codcategoria", $this->codcategoria);
        $cmd->execute();//executar o comando SQL
        return $cmd->fetch(PDO::FETCH_OBJ);
    }

}

?>