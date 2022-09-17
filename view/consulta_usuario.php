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

    <title>EtecNews - Usuários</title>
</head>
<body>
    <?php include_once "menu.php"; ?>

    <div class="container">
        <?php 
        if(!$dadosUsuario)
        {
            echo "<div class='row mt-3'>
                <div class='col-sm-10 mx-auto alert alert-danger'>
                    <i class='fa fa-warning'></i> Ainda não há registros cadastrados na tabela
                </div>
            </div>";
        }
        ?>

        <div class="row mt-3">
            <div class="col-sm-10 rounded border mx-auto p-3 shadow">
                <h5 class="text-center">Consulta de Usuários</h5>
                    <table class="table table-striped" id="tabela">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Acesso</th>
                            <th scope="col">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($dadosUsuario as $value)
                            {
                                $value->acesso = $value->acesso == 1 ? "Administrador" : "Usuário";                            

                                echo "<tr>
                                    <th scope='row'>$value->codusuario</th>
                                    <td>$value->nome</td>
                                    <td>$value->email</td>
                                    <td>$value->acesso</td>
                                    <td></td>
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