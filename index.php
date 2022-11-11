<?php
session_start();//iniciar a sessão

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
        //rotas para categoria
        case 'cadastro-categoria':
            $categ = new CategoriaController();
            $categ->abrirCadastro();
        break;

        case 'enviar-categoria':
            $categ = new CategoriaController();
            $categ->cadastrar();
        break;
        
        case 'consulta-categoria':
            $categ = new CategoriaController();
            $categ->abrirConsulta();
        break;

        //rotas para noticia
        case 'cadastro-noticia':
            $not = new NoticiaController();
            $not->abrirCadastro();
        break;
        
        case 'consulta-noticia':
            $not = new NoticiaController();
            $not->abrirConsulta();
        break;

        case 'enviar-noticia':
            $not = new NoticiaController();
            $not->cadastrar();
        break;

        case 'excluir-noticia':
            $not = new NoticiaController();
            $not->excluir($url[1]);
        break;

        //rotas para usuário
        case 'consulta-usuario':
            $usu = new UsuarioController();
            $usu->abrirConsulta();
        break;

        case 'cadastro-usuario':
            $usu = new UsuarioController();
            $usu->abrirCadastro();
        break;

        case 'enviar-usuario':
            $usu = new UsuarioController();
            $usu->cadastrar();
        break;

        case 'excluir-usuario':
            $usu = new UsuarioController();
            $usu->excluir($url[1]);
        break;

        case 'editar-usuario':
            $usu = new UsuarioController();
            $usu->editar($url[1]);
        break;

        case 'atualizar-usuario':
            $usu = new UsuarioController();
            $usu->atualizar();
        break;

        case 'login':
            $usu = new UsuarioController();
            $usu->abrirLogin();
        break;

        case 'logar':
            $usu = new UsuarioController();
            $usu->logar();
        break;

        case 'sair':
            $usu = new UsuarioController();
            $usu->sair();
        break;

        case 'novo-usuario':
            $usu = new UsuarioController();
            $usu->novoUsuario();
        break;

        //rotas home
        case 'home':
            $home = new HomeController();
            $home->abrirHome();
        break;

        case 'categoria':
            $home = new HomeController();
            $home->abrirHomeCategoria($url[1]);
        break;

        case 'noticia':
            $home = new HomeController();
            $home->abrirNoticia($url[1]);
        break;

        case 'pesquisa':
            $home = new HomeController();
            $home->abrirHomePesquisa();
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
    $home->abrirHomeCliente();
}
?>