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
<body class="bg-secondary">
   
    <div class="container">
        <div class="row mt-3">
            <div class="col-sm-6 mx-auto">
                <div class="card p-4">
                    <h4 class="alert-heading">Criar Conta</h4>
                    <hr>
                    <form action="<?php echo URL;?>enviar-usuario" method="post">

                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" id="nome" placeholder="Informe seu nome" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="Informe seu e-mail" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="password" name="senha" id="senha" placeholder="Informe sua senha" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="acesso">Nível de Acesso</label>
                            <select name="acesso" id="acesso" class="form-control" required>
                                <option value="">Selecione...</option>
                                <option value="1">Administrador</option>
                                <option value="2">Usuário</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success mt-3"><i class="fa fa-save"></i> Cadastrar</button>
                        <a href="<?php echo URL;?>login" class="btn btn-secondary mt-3"><i class="fa fa-arrow-left"></i> Voltar</a>
                    
                    </form>
                    <hr>
                    <p class="mb-0 text-center">Professor <strong>Anderson Spera</strong></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>