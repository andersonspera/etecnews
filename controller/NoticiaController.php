<?php
include_once "model/Categoria.php";
include_once "model/Noticia.php";

class NoticiaController
{
    public function abrirCadastro()
    {
        UsuarioController::validaSessao(); //validando sessão
        //buscar as categorias para exibir na lista
        $cat = new Categoria();
        $dadosCategoria = $cat->consultar();
        include_once "view/cadastro_noticia.php";
    }

    public function cadastrar()
    {
        UsuarioController::validaSessao(); //validando sessão
        $not = new Noticia();
        $not->data              = $_POST["data"];
        $not->titulo            = $_POST["titulo"];
        $not->codcategoria      = $_POST["codcategoria"];
        $not->conteudo          = $_POST["conteudo"];
        $not->imagem = "semimagem.jpg";
        if($_FILES["imagem"]["error"] == 0) //caso não tenha erro
        {
            //upload de arquivo (imagem)
            $nome_arquivo = $_FILES["imagem"]["name"];
            //pegar a extenção do arquivo
            $info = new SplFileInfo($nome_arquivo);
            $extensao   = $info->getExtension();
            $nome_arquivo = md5(microtime()) . "." . $extensao; //gerar um novo nome único de arquivo 
            $destino = "recursos/imagens/$nome_arquivo";
            $nome_temp = $_FILES["imagem"]["tmp_name"];
            move_uploaded_file($nome_temp,$destino); //enviar o arquivo para a pasta
            $not->imagem = $nome_arquivo;//nome que irá para o BD
        }

        $not->cadastrar();
        echo "<script>
                alert('Dados gravados com sucesso!');
                window.location='".URL."cadastro-noticia';
            </script>";
    }

    public function abrirConsulta()
    {
        UsuarioController::validaSessao(); //validando sessão
        $not = new Noticia();
        $dadosNoticia = $not->consultar();
        include_once "view/consulta_noticia.php";
    }

    public function excluir($cod)
    {
        UsuarioController::validaSessao(); //validando sessão

        $not = new Noticia();
        $not->codnoticia = $cod;
        //excluir arquivo
        $dadosNoticia = $not->retornar();
        if(is_file("recursos/imagens/$dadosNoticia->imagem")) unlink("recursos/imagens/$dadosNoticia->imagem");
        $not->excluir();
        header("Location:".URL."consulta-noticia");
    }
}
?>