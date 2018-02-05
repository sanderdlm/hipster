<?php snippet('header') ?>
<main class="main" role="main">
  <div class='wrap'>  
    <div class="column">
      <?= $page->text()->kirbytext() ?>
    </div>
    <div class="column">
      <?php foreach($page->images() as $image): ?>
          <figure>
              <?= $image->resize(700); ?>
              <?php if($image->caption()->isNotEmpty()): ?>
                  <figcaption><?= $image->caption()->kirbytext() ?></figcaption>
              <?php endif ?>
          </figure>  
      <?php endforeach ?>
    </div>
  </div>
</main>
<?php snippet('footer') ?>