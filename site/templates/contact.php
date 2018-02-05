<?php snippet('header') ?>

<main class="main" role="main">
  
  <div class='wrap'>
  	
    <div class="column contact">
      <?= $page->text()->kirbytext() ?>
    </div>

    <div class="column">

		<?php
		echo $page->styledmap(
		    'Trefpunt', 		// title
		    'https://www.google.be/maps/place/Veldstraat+22,+9000+Gent/@51.0531549,3.7199671,17z/data=!3m1!4b1!4m5!3m4!1s0x47c37146bc241a11:0xcc35705fcc294f0!8m2!3d51.0531515!4d3.7221558',
		    [
	            'info' => 'Hipster Inc<br>Veldstraat 22<br>9000 Gent',
	        ],
		    'map-style'
		);
		?>

    </div>
  </div>

  <div class="column contacts">
    <?php foreach($page->contacts()->toStructure() as $contact): ?>
        <div class='contact-card'>
          <div><strong><?= $contact->name; ?></strong> (<?=$contact->role; ?>)</div>
          <div><?= $contact->email; ?></div>
        </div>
    <?php endforeach ?>
  </div>

</main>

<?php snippet('footer') ?>