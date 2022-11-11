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
    <!-- CSS DataTables -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    <title>EtecNews - Notícias</title>
</head>
<body>
    <?php include_once "menu.php"; ?>

    <div class="container">
        <div class="row mt-3 px-2">
            <div class="col-sm-10 rounded border mx-auto p-3 shadow">
                <h5 class="text-center">Consulta de Notícias</h5>
                    <table class="table table-striped" id="tabela">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Título</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Data</th>
                            <th scope="col">Imagem</th>
                            <th scope="col">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            foreach($dadosNoticia as $value) {
                            //caso não tenha imagem irá buscar uma imagem padrão    
                            if(!is_file("recursos/imagens/$value->imagem")) $value->imagem = "semimagem.jpeg";
                            echo "<tr>
                                    <th scope='row'>$value->codnoticia</th>
                                    <td>$value->titulo</td>
                                    <td>$value->nomecategoria</td>
                                    <td>". date("d/m/Y",strtotime($value->data)) . "</td>
                                    <td><img src='recursos/imagens/$value->imagem' class='img-thumbnail' width='100px'></td>
                                    <td>
                                    <a href='". URL ."excluir-noticia/$value->codnoticia' onclick='return confirm(\"Tem certeza?\")' class='btn btn-outline-danger btn-sm'><i class='fa fa-trash'></i> Excluir</a>
                                    </td>
                                </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- JQuery-->
    <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
    <!-- JS DataTables -->
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    
    <script>
        $(document).ready( function () {
            $('#tabela').DataTable();
        } );
    </script>
</body>
</html>