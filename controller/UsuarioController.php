<?php
include_once "model/Usuario.php"; //incluir a model

class UsuarioController
{
    public function abrirCadastro()
    {
        UsuarioController::validaSessao(); //validando se usuário está logado
        UsuarioController::validaAdministrador();//verificar se é administrador

        include_once "view/cadastro_usuario.php";
    }

    public function abrirConsulta()
    { 
        UsuarioController::validaSessao(); //validando sessão
        UsuarioController::validaAdministrador();//verificar se é administrador

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
        UsuarioController::validaSessao(); //validando sessão
        UsuarioController::validaAdministrador();//verificar se é administrador

        $usu = new Usuario();
        $usu->codusuario = $cod;
        $usu->excluir();
        header("Location:".URL."consulta-usuario");
    }

    public function editar($cod)
    {
        UsuarioController::validaSessao(); //validando sessão
        UsuarioController::validaAdministrador();//verificar se é administrador

        //buscar os dados na classe Usuario (model)
        $usu = new Usuario();
        $usu->codusuario = $cod;
        $dadosUsuario = $usu->retornar();
        include_once "view/editar_usuario.php"; //exibir a tela de editar dados do usuário
    }

    public function atualizar()
    {
        UsuarioController::validaSessao(); //validando sessão
        UsuarioController::validaAdministrador();//verificar se é administrador

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

    public function abrirLogin()
    {
        include_once "view/login.php";
    }

    public function logar()
    {
        $usu = new Usuario();//MODEL: usuario.php
        $usu->email = $_POST["email"];
        $dadosUsuario = $usu->logar();
        
        if($dadosUsuario &&  password_verify($_POST["senha"], $dadosUsuario->senha) )
        {
            $_SESSION['sessao'] = $dadosUsuario;
            //encontrou usuário -> vai para HOME
            header("Location:" . URL);
        }
        else
        {
            //não encontrou usuário
            echo "<script>
                    alert('E-mail ou senha inválido');
                    window.location='" . URL . "login';
                  </script>";
        }
    }

    public function sair()
    {
        session_destroy();
        header("Location:" . URL . "login"); 
    } 

    public static function validaSessao()
    {
        if(!isset($_SESSION["sessao"])) header("Location:" . URL . "login"); //volta para login
    }

    public static function validaAdministrador()
    {
        if($_SESSION["sessao"]->acesso != 1)  header("Location:" . URL); //volta para login
    }

    public function novoUsuario()
    {
        include_once "view/novo_usuario.php";
    }



}
?>