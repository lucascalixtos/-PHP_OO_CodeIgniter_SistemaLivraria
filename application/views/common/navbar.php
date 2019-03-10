<!--Navbar -->
<nav class="navbar navbar-expand-lg elegant-color-dark text-secondary">
  <a class="navbar-brand text-light" href="<?php echo site_url()?>">Nobel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse text-secondary" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto text-secondary">
      <li class="nav-item active text-secondary">
        <a class="nav-link text-light" href="<?php echo site_url();?>">Inicio
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item text-secondary">
        <a class="nav-link text-light" href="<?php echo site_url('livros')?>">Livros</a>
      </li>
      <li class="nav-item text-secondary">
        <a class="nav-link text-light" href="<?php echo site_url('contato')?>">Contato</a>
      </li>
      <li class="nav-item text-secondary">
        <a class="nav-link text-light" href="<?php echo site_url('sobre')?>">Sobre nós</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light" href="https://www.facebook.com/Livrarianobel/">
          <i class="fab fa-facebook"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light" href="http://livrarianobel.com.br/">
        <i class="fas fa-book"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="<?= base_url('setup')?>">Painel Administrativo</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->