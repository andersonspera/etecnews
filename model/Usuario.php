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
}
?>