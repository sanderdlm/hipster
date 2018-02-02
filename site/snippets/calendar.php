<section class="calendar">
<?php
$b = strtotime("midnight", time());
$e = strtotime("tomorrow", $b) - 1;

if (!$calendar->getAllEvents()):
	echo l::get('calendar-no-entry');
else: ?>
	<?php foreach ($calendar->getEvents() as $event): ?>
		<div class="event<?php e($event->isPast(), ' past'); e($event->getBeginTimestamp() >= $b && $event->getBeginTimestamp() <= $e, ' today'); ?>">
			<div class='heading'><?= $event->getBeginStr().' ― '.$event->getField('name'); ?></div>
			<div class='meta'><?= strtoupper($event->getField('location')).' // uur // '.($event->getField('price') == 0 ? 'Gratis' : '€'.$event->getField('price')); ?></div>
		</div>
		<hr>
	<?php endforeach; ?>
<?php endif; ?>
</section>