<?php
//classes necessárias
include_once "controller/HomeController.php";
include_once "controller/UsuarioController.php";
include_once "controller/CategoriaController.php";
include_once "controller/NoticiaController.php";

//minha url
define('URL','http://localhost/morato/etecnews/');

if(isset($_GET['url']))
{
    $url = explode('/', $_GET['url']);
    switch($url[0])
    {
        case 'cadastro-usuario':
            $usu = new UsuarioController();
            $usu->abrirCadastro();
        break;
        
        case 'consulta-usuario':
            $usu = new UsuarioController();
            $usu->abrirConsulta();
        break;

        case 'cadastro-categoria':
            $categ = new CategoriaController();
            $categ->abrirCadastro();
        break;
        
        case 'consulta-categoria':
            $categ = new CategoriaController();
            $categ->abrirConsulta();
        break;

        case 'cadastro-noticia':
            $not = new NoticiaController();
            $not->abrirCadastro();
        break;
        
        case 'consulta-noticia':
            $not = new NoticiaController();
            $not->abrirConsulta();
        break;

        case 'enviar-usuario':
            $usu = new UsuarioController();
            $usu->cadastrar();
        break;

        default:
            echo "página não encontrada<br>
            Verificar se existe a rota criada<br>
            Tentando acessar a rota: $url[0]";
            //poderá depois abrir uma página de aviso
        break;

    }

}
else
{
    //abrir a página inicial
    $home = new HomeController();
    $home->abrirHome();
}
?>