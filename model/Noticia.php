<?php
class Noticia
{
    //atributos da tabela usuário
    public $codnoticia;
    public $titulo;
    public $data;
    public $codcategoria;
    public $imagem;
    public $conteudo;

    public function __construct() //será executado ao usar a classe
    {
        include_once "Conexao.php"; //incluindo conexão
    }

    public function cadastrar()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para cadastrar (INSERT)
        $cmd = $con->prepare("INSERT INTO noticia (titulo, data,codcategoria,imagem,conteudo) 
        VALUES (:titulo,:data,:codcategoria,:imagem,:conteudo)");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":titulo",          $this->titulo);
        $cmd->bindParam(":data",            $this->data);
        $cmd->bindParam(":codcategoria",    $this->codcategoria);
        $cmd->bindParam(":imagem",          $this->imagem);
        $cmd->bindParam(":conteudo",        $this->conteudo);

        $cmd->execute(); //executar o comando
    }

    public function consultar()
    {
        $con = Conexao::conectar();//acessar o BD
        $cmd = $con->prepare("SELECT * FROM noticia JOIN categoria
        ON categoria.codcategoria = noticia.codcategoria"); //comando SQL
        $cmd->execute();//executar o comando SQL
        return $cmd->fetchAll(PDO::FETCH_OBJ);
    }

    public function consultar_categoria()
    {
        $con = Conexao::conectar();//acessar o BD
        $cmd = $con->prepare("SELECT * FROM noticia JOIN categoria
        ON categoria.codcategoria = noticia.codcategoria
        WHERE categoria.codcategoria = :codcategoria"); //comando SQL
        $cmd->bindParam(":codcategoria",    $this->codcategoria);
        $cmd->execute();//executar o comando SQL
        return $cmd->fetchAll(PDO::FETCH_OBJ);
    }

    public function consultar_titulo()
    {
        $con = Conexao::conectar();//acessar o BD
        $cmd = $con->prepare("SELECT * FROM noticia JOIN categoria
        ON categoria.codcategoria = noticia.codcategoria
        WHERE titulo LIKE :titulo"); //comando SQL
        $cmd->bindParam(":titulo",    $this->titulo);
        $cmd->execute();//executar o comando SQL
        return $cmd->fetchAll(PDO::FETCH_OBJ);
    }

    public function excluir()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para excluir (DELETE)
        $cmd = $con->prepare("DELETE FROM noticia 
        WHERE codnoticia = :codnoticia");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":codnoticia",    $this->codnoticia);
        $cmd->execute(); //executar o comando
    }

    public function atualizar()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para cadastrar (INSERT)
        $cmd = $con->prepare("UPDATE noticia SET
                                        titulo          = :titulo,
                                        data            = :data,
                                        codcategoria    = :codcategoria,
                                        imagem          = :imagem,
                                        conteudo        = :conteudo
                            WHERE codnoticia = :codnoticia");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":codnoticia",      $this->codnoticia);
        $cmd->bindParam(":titulo",          $this->titulo);
        $cmd->bindParam(":data",            $this->data);
        $cmd->bindParam(":codcategoria",    $this->codcategoria);
        $cmd->bindParam(":imagem",          $this->imagem);
        $cmd->bindParam(":conteudo",        $this->conteudo);

        $cmd->execute(); //executar o comando
    }

    public function retornar()
    {
        $con = Conexao::conectar();//acessar o BD
        $cmd = $con->prepare("SELECT * FROM noticia
        WHERE codnoticia = :codnoticia"); //comando SQL
        $cmd->bindParam(":codnoticia", $this->codnoticia);
        $cmd->execute();//executar o comando SQL
        return $cmd->fetch(PDO::FETCH_OBJ);
    }

}

?>