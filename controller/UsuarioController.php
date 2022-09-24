<?php
include_once "model/Usuario.php"; //incluir a model

class UsuarioController
{
    public function abrirCadastro()
    {
        include_once "view/cadastro_usuario.php";
    }

    public function abrirConsulta()
    {
        $usu = new Usuario();
        $dadosUsuario = $usu->consultar();
        include_once "view/consulta_usuario.php";
    }

    public function cadastrar()
    {
        $usu = new Usuario();//colocar a classe em uso
        //enviar valores do formulário para a classe
        $usu->nome      = $_POST["nome"];
        $usu->email     = $_POST["email"];
        $usu->senha     = $_POST["senha"];
        $usu->acesso    = $_POST["acesso"];
        $usu->cadastrar(); //executar o método que cadastra
        //enviar uma mensagem de confirmação
        echo "<script>
                alert('Dados gravados com sucesso!');
                window.location='".URL."cadastro-usuario';
            </script>";
    }

    public function excluir($cod)
    {
        $usu = new Usuario();
        $usu->codusuario = $cod;
        $usu->excluir();
        header("Location:".URL."consulta-usuario");
    }
}
?>