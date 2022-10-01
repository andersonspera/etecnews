<?php
class Usuario
{
    //atributos da tabela usuário
    public $codusuario;
    public $nome;
    public $email;
    public $senha;
    public $acesso;

    public function __construct() //será executado ao usar a classe
    {
        include_once "Conexao.php"; //incluindo conexão
    }

    public function cadastrar()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para cadastrar (INSERT)
        $cmd = $con->prepare("INSERT INTO usuario (nome, email, senha, acesso) 
        VALUES (:nome,:email,:senha,:acesso)");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":nome",    $this->nome);
        $cmd->bindParam(":email",   $this->email);
        $cmd->bindParam(":senha",   $this->senha);
        $cmd->bindParam(":acesso",  $this->acesso);

        $cmd->execute(); //executar o comando
    }

    public function consultar()
    {
        $con = Conexao::conectar();//acessar o BD
        $cmd = $con->prepare("SELECT * FROM usuario"); //comando SQL
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
        $cmd = $con->prepare("UPDATE usuario SET
                                        nome    = :nome,
                                        email   = :email,
                                        senha   = :senha,
                                        acesso  = :acesso
                            WHERE codusuario = :codusuario");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":codusuario",      $this->codusuario);
        $cmd->bindParam(":nome",            $this->nome);
        $cmd->bindParam(":email",           $this->email);
        $cmd->bindParam(":senha",           $this->senha);
        $cmd->bindParam(":acesso",          $this->acesso);

        $cmd->execute(); //executar o comando
    }

    public function retornar()
    {
        $con = Conexao::conectar();//acessar o BD
        $cmd = $con->prepare("SELECT * FROM usuario
        WHERE codusuario = :codusuario"); //comando SQL
        $cmd->bindParam(":codusuario", $this->codusuario);
        $cmd->execute();//executar o comando SQL
        return $cmd->fetch(PDO::FETCH_OBJ);
    }

}

?>