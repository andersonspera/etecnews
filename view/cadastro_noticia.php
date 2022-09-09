<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- FontAwesome CSS -->  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>EtecNews - Notícias</title>
</head>
<body>
    <?php include_once "menu.php"; ?>

    <div class="container">
        <div class="row mt-3 px-2">
            <div class="col-sm-8 rounded border mx-auto p-3 shadow">
                <h5 class="text-center">Cadastro de Notícias</h5>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="data">Data da notícia</label>
                        <input type="date" name="data" id="data" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <input type="text" name="titulo" id="titulo" placeholder="Informe o título da notícia" class="form-control" required>
                    </div>
                    <div class="form-group" required>
                        <label for="codcategoria">Categoria</label>
                        <select name="codcategoria" id="codcategoria" class="form-control">
                            <option value="">Selecione...</option>
                        </select>
                    </div>
                    <div class="form-group" required>
                        <label for="codcategoria">Imagem</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="form-group">
                        <label for="titulo">Conteúdo</label>
                        <textarea name="conteudo" id="conteudo" class="form-control" placeholder="Informe o conteúdo da notícia"></textarea>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success mt-3">Gravar</button>
                    </div>                    
                </form>
            </div>
        </div>
    </div>
<!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>