<?php
class HomeController
{
    public function abrirHome()
    {
        UsuarioController::validaSessao(); //validando sessão
        include_once "view/home.php";
    }

    public function abrirHomeCliente()
    {
        $cat = new Categoria();
        $dadosCategoria = $cat->consultar();

        $not = new Noticia();
        $dadosNoticia = $not->consultar();

        include_once "view/home_cliente.php";
    }

    public function abrirHomeCategoria($id)
    {
        $cat = new Categoria();
        $dadosCategoria = $cat->consultar();

        $not = new Noticia();
        $not->codcategoria = $id;
        $dadosNoticia = $not->consultar_categoria();

        include_once "view/home_cliente.php";
    }

    public function abrirHomePesquisa()
    {
        $cat = new Categoria();
        $dadosCategoria = $cat->consultar();

        $not = new Noticia();
        $not->titulo = "%" . $_POST["titulo"] . "%";
        $dadosNoticia = $not->consultar_titulo();

        include_once "view/home_cliente.php";
    }

    public function abrirNoticia($id)
    {
        $cat = new Categoria();
        $dadosCategoria = $cat->consultar();

        $not = new Noticia();
        $not->codnoticia = $id;
        $dadosNoticia = $not->retornar();

        include_once "view/noticia_cliente.php";
    }
}
?>