<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">EtecNews</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo URL; ?>home"><i class="fa fa-house"></i> Início</a>
        </li>
        <?php
        if($_SESSION["sessao"]->acesso == 1)
        {
        ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-user"></i> Usuário
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo URL;?>cadastro-usuario"><i class="fa fa-save"></i> Cadastrar</a></li>
            <li><a class="dropdown-item" href="<?php echo URL;?>consulta-usuario"><i class="fa fa-search"></i> Consultar</a></li>
          </ul>
        </li>
        <?php } ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-list"></i> Categorias
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo URL;?>cadastro-categoria"><i class="fa fa-save"></i> Cadastrar</a></li>
            <li><a class="dropdown-item" href="<?php echo URL;?>consulta-categoria"><i class="fa fa-search"></i> Consultar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-newspaper"></i> Notícias
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo URL;?>cadastro-noticia"><i class="fa fa-save"></i> Cadastrar</a></li>
            <li><a class="dropdown-item" href="<?php echo URL;?>consulta-noticia"><i class="fa fa-search"></i> Consultar</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URL;?>sair"><i class="fa-solid fa-right-from-bracket"></i> Sair</a>
        </li>
      </ul>
    </div>
  </div>
</nav>