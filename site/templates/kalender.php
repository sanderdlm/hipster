<?php snippet('header') ?>

<main class="main" role="main">
  
  <div class='wrap'>
  	
    <div class="column">
      <?php $calendar = calendar($page->calendar()->yaml()); ?>
      <?php
      snippet('calendar', array(
      	'calendar'  => $calendar,
      	'fields'        => array(
      		'name'       => l::get('title')
      		)
      	));
      	?>
    </div>

    <div class="column">

		<?php foreach($page->images() as $image): ?>
		  <figure>
		    <?= $image->resize(700); ?>
		    <?php if($image->caption()->isNotEmpty()): ?>
		      <figcaption>
		        <?= $image->caption()->kirbytext() ?>
		      </figcaption>
		    <?php endif ?>
		  </figure>  
		<?php endforeach ?>

    </div>
  </div>

  <div class="column">
    <?= $page->intro()->kirbytext() ?>
  </div>

</main>

<?php snippet('footer') ?>