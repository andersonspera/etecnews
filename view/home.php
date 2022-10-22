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
    <title>EtecNews - Início</title>
</head>
<body>
    <?php include_once "menu.php"; ?>
   
    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Boas-vindas! <?php echo $_SESSION["sessao"]->nome; ?></h4>
                    <p>Este é um projeto para gerenciamento de notícias desenvolvido com a linguagem PHP e banco de dados MySQL como parte da disciplina de <strong>Programação Web III</strong> do curso de <strong>Desenvolvimento de Sistemas</strong> na <strong>Etec de Francisco Morato</strong></p>
                    <hr>
                    <p class="mb-0">Professor <strong>Anderson Spera</strong></p>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>