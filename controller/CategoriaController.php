<?php
include_once "model/Categoria.php";

class CategoriaController
{
    public function abrirCadastro()
    {
        UsuarioController::validaSessao(); //validando sessão
        include_once "view/cadastro_categoria.php";
    }

    public function abrirConsulta()
    {
        UsuarioController::validaSessao(); //validando sessão
        $cat = new Categoria();
        $dadosCategoria = $cat->consultar();
        include_once "view/consulta_categoria.php";
    }

    public function cadastrar()
    {
        UsuarioController::validaSessao(); //validando sessão
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