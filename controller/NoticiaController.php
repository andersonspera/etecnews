<?php
include_once "model/Categoria.php";

class NoticiaController
{
    public function abrirCadastro()
    {
        //buscar as categorias para exibir na lista
        $cat = new Categoria();
        $dadosCategoria = $cat->consultar();
        include_once "view/cadastro_noticia.php";
    }

    public function abrirConsulta()
    {
        include_once "view/consulta_noticia.php";
    }
}
?>