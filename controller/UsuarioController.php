<?php
class UsuarioController
{
    public function abrirCadastro()
    {
        include_once "view/cadastro_usuario.php";
    }

    public function abrirConsulta()
    {
        include_once "view/consulta_usuario.php";
    }
}
?>