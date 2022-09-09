<?php
class NoticiaController
{
    public function abrirCadastro()
    {
        include_once "view/cadastro_noticia.php";
    }

    public function abrirConsulta()
    {
        include_once "view/consulta_noticia.php";
    }
}
?>