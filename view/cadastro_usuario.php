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
    <title>EtecNews - Usuários</title>
</head>
<body>
    <?php include_once "menu.php"; ?>

    <div class="container">
        <div class="row mt-3 px-2">
            <div class="col-sm-8 rounded border mx-auto p-3 shadow">
                <h5 class="text-center">Cadastro de Usuários</h5>
                <form action="<?php echo URL;?>enviar-usuario" method="post">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" placeholder="Informe o nome completo" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" placeholder="Informe o e-mail" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" placeholder="•••••••••••••••" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="acesso">Nível de Acesso</label>
                        <select name="acesso" id="acesso" class="form-control" required>
                            <option value="">Selecione...</option>
                            <option value="1">Administrador</option>
                            <option value="2">Usuário</option>
                        </select>
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