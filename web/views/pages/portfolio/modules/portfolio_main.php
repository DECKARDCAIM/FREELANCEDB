<section class="page-section portfolio" id="portfolio">
  <div class="container">
    <!-- Portfolio Section Heading-->
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>
    <!-- Icon Divider-->
    <div class="divider-custom">
      <div class="divider-custom-line"></div>
      <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
      <div class="divider-custom-line"></div>
    </div>
    <!-- Portfolio Grid Items-->
    <div class="row justify-content-center">
      <?php
      // Definir los elementos del portafolio en un array
      $portfolio_items = [
        [
          'title' => 'Cabin',
          'image' => 'views/assets/img/portfolio/cabin.png',
          'description' => 'Un proyecto creativo en una cabaña.',
          'id' => 'modalCabin'
        ],
        [
          'title' => 'Cake',
          'image' => 'views/assets/img/portfolio/cake.png',
          'description' => 'Pastel decorado para un evento especial.',
          'id' => 'modalCake'
        ],
        [
          'title' => 'Circus',
          'image' => 'views/assets/img/portfolio/circus.png',
          'description' => 'Escena inspirada en el circo.',
          'id' => 'modalCircus'
        ],
        [
          'title' => 'Game',
          'image' => 'views/assets/img/portfolio/game.png',
          'description' => 'Desarrollo de un videojuego creativo.',
          'id' => 'modalGame'
        ],
        [
          'title' => 'Safe',
          'image' => 'views/assets/img/portfolio/safe.png',
          'description' => 'Caja fuerte para mantener la seguridad.',
          'id' => 'modalSafe'
        ],
        [
          'title' => 'Submarine',
          'image' => 'views/assets/img/portfolio/submarine.png',
          'description' => 'Un submarino explorando las profundidades del océano.',
          'id' => 'modalSubmarine'
        ]
      ];




foreach ($portfolio_items as $item) {
        ?>
        <div class="col-md-6 col-lg-4 mb-5">
          <div class="portfolio-item mx-auto" data-bs-toggle="modal" href="#<?php echo $item['id']; ?>">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <a class="portfolio-link" data-bs-toggle="modal" href="#<?php echo $item['id']; ?>">
              <img class="img-fluid" src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>" />
            </a>
          </div>
        </div>
        <?php
      }
      ?>
    </div>
  </div>
</section>

<!-- Modales para cada ítem del portafolio -->
<?php foreach ($portfolio_items as $item): ?>
  <div class="portfolio-modal modal fade" id="<?php echo $item['id']; ?>" tabindex="-1"
    aria-labelledby="<?php echo $item['id']; ?>Label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="<?php echo $item['id']; ?>Label"><?php echo $item['title']; ?></h5>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <img class="img-fluid rounded mb-4" src="<?php echo $item['image']; ?>"
                  alt="<?php echo $item['title']; ?>" />
                <p><?php echo $item['description']; ?></p>
                <button class="btn btn-primary" data-bs-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar ventana
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>






















      
