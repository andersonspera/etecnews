<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <?php include_once "menu_cliente.php"; ?>

    <div class="container-fluid">
        <div class="row mt-2">
            <div class="col-sm-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action bg-secondary text-white" aria-current="true">
                        Categorias
                    </a>
                    <?php
                        if(empty($id))
                        {
                            echo "<a href='".URL."' class='list-group-item list-group-item-action'><i class='fa fa-arrow-right'></i> Todas</a>"; 
                        }
                        else
                        {
                            echo "<a href='".URL."' class='list-group-item list-group-item-action'>Todas</a>"; 
                        }
                        
                        foreach ($dadosCategoria as $key => $value) {
                            if(!empty($id) && $value->codcategoria == $id)
                            {
                                echo "<a href='".URL."categoria/$value->codcategoria' class='list-group-item list-group-item-action'><i class='fa fa-arrow-right'></i> $value->nomecategoria</a>";
                            }
                            else 
                            {
                                echo "<a href='".URL."categoria/$value->codcategoria' class='list-group-item list-group-item-action'>$value->nomecategoria</a>";
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="col-sm-9">
            
                <div class="row">
                    <div class="col-12">
                        <form action="<?php echo URL;?>pesquisa" method="post">
                            <div class="input-group mb-3">
                                <input type="text" name="titulo" class="form-control" placeholder="Pesquisar..." aria-label="Recipient's username" aria-describedby="button-addon2" value="<?php if(!empty($_POST["titulo"])) echo $_POST["titulo"];?>">
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>

                    <?php
                    
                    if(!$dadosNoticia)
                    {
                        echo "<div class='col-12'>
                        <div class='alert alert-warning'>
                            <i class='fa fa-warning'></i>
                            Não foi possível localizar notícias
                        </div>
                        </div>";
                    }
                    else
                    {
                        echo "<div class='col-12'>
                            <div class='card mb-3'>
                                <img src='".URL."recursos/imagens/$dadosNoticia->imagem' class='card-img-top' alt='...'>
                                <div class='card-body'>
                                    <h5 class='card-title'>$dadosNoticia->titulo</h5>
                                    <p class='card-text'>$dadosNoticia->conteudo</p>
                                    <p class='card-text'><small class='text-muted'>Data da notícia: ". date("d/m/Y", strtotime($dadosNoticia->data)) . "</small></p>
                                    <a href='".URL."' class='btn btn-danger'><i class='fa fa-arrow-left'></i> Voltar...</a>
                                </div>
                            </div>
                        </div>";
                    }
                    
                    ?>
                    

                </div>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>