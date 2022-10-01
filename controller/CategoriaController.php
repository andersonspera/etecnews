<?php
include_once "model/Categoria.php";

class CategoriaController
{
    public function abrirCadastro()
    {
        include_once "view/cadastro_categoria.php";
    }

    public function abrirConsulta()
    {
        $cat = new Categoria();
        $dadosCategoria = $cat->consultar();
        include_once "view/consulta_categoria.php";
    }

    public function cadastrar()
    {
        $cat = new Categoria();//colocar a classe em uso
        //enviar valores do formulário para a classe
        $cat->nomecategoria = $_POST["nomecategoria"];
        $cat->cadastrar(); //executar o método que cadastra
        //enviar uma mensagem de confirmação
        echo "<script>
                alert('Dados gravados com sucesso!');
                window.location='".URL."cadastro-categoria';
            </script>";
    }
}
?>