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
        $usu->senha     = password_hash($_POST["senha"],PASSWORD_DEFAULT);
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

    public function editar($cod)
    {
        //buscar os dados na classe Usuario (model)
        $usu = new Usuario();
        $usu->codusuario = $cod;
        $dadosUsuario = $usu->retornar();
        include_once "view/editar_usuario.php"; //exibir a tela de editar dados do usuário
    }

    public function atualizar()
    {
        $usu = new Usuario();//colocar a classe em uso
        //enviar valores do formulário para a classe
        $usu->codusuario        = $_POST["codusuario"];
        $usu->nome              = $_POST["nome"];
        $usu->email             = $_POST["email"];
        $usu->senha             = password_hash($_POST["senha"],PASSWORD_DEFAULT);
        $usu->acesso            = $_POST["acesso"];
        $usu->atualizar(); //executar o método que atualizar
        //enviar uma mensagem de confirmação
        echo "<script>
                alert('Dados atualizados com sucesso!');
                window.location='".URL."consulta-usuario';
            </script>";
    }
}
?>