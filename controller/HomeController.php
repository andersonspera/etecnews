<?php
class HomeController
{
    public function abrirHome()
    {
        UsuarioController::validaSessao(); //validando sessão
        include_once "view/home.php";
    }
}
?>