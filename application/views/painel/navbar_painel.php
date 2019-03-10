<!--Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark default-color">
  <a class="navbar-brand" href="<?php echo site_url()?>">Nobel - Painel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" target='_blank' href="<?php echo site_url();?>">Ver site
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('setup/mudar')?>">Alterar Site</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('setup')?>">configs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('setup/logout')?>">sair</a>
      </li>
    </ul>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->