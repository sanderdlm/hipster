<section class="calendar">
<?php
if (!$calendar->getEvents()):
	echo l::get('calendar-no-entry');
else: ?>
	<?php foreach ($calendar->getEvents() as $key => $event): ?>
		<div class="event<?php e($event->isPast(), ' past'); ?>">
			<div class='heading'><?= $event->getBeginStr().' ― '.$event->getField('name'); ?></div>
			<div class='meta'><?= strtoupper($event->getField('location')).' // '.date('h', $event->getBeginTimestamp()).'u'.date('i', $event->getBeginTimestamp()).' // '.($event->getField('price') == 0 ? 'Free' : '€'.$event->getField('price')); ?></div>
		</div>
		<?php if($key > 5){
			break;
		}
		?>
		<hr>
	<?php endforeach; ?>
<?php endif; ?>
</section>