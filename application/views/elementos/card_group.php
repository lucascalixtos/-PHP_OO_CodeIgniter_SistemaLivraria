<!-- Card deck -->
<div class="card-deck">

  <!-- Card -->
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" width="700px" height="400px" src="<?= base_url('assets/img/'.$img1)?>" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title"><?= $title1 ?></h4>
      <!--Text-->
      <p class="card-text"><?= $label1 ?></p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <a href="<?= base_url('livros') ?>"><button type="button" class="btn btn-light-blue btn-md">Clique aqui</button></a>

    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" width="700px" height="400px" src="<?= base_url('assets/img/'.$img2) ?>" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title"><?=$title2?></h4>
      <!--Text-->
      <p class="card-text"><?= $label2?></p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <a href="<?= base_url('contato') ?>"><button type="button" class="btn btn-light-blue btn-md">Clique aqui</button></a>

    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" width="700px" height="400px"  src="<?= base_url('assets/img/'.$img3) ?>" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title"><?=$title3?></h4>
      <!--Text-->
      <p class="card-text"><?=$label3?></p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <a href="<?= base_url('sobre') ?>"><button type="button" class="btn btn-light-blue btn-md">Clique aqui</button></a>

    </div>

  </div>
  <!-- Card -->

</div>
<!-- Card deck -->