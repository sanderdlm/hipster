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
		    'https://www.google.com/maps/place/Trefpunt/@51.0563,3.727171,19z/data=!4m5!3m4!1s0x0:0x24d9f92759d817f4!8m2!3d51.0561429!4d3.7271128?hl=en-US',
		    [
	            'info' => 'Trefpunt<br>Walter De Buckplein 5<br>9000 Gent',
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