<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'put your license key here');

c::set('languages', array(
	array(
		'code'    => 'nl',
		'name'    => 'Nederlands',
		'locale'  => 'nl',
		'default' => true,
		'url'     => '/'
	)
));

c::set('debug',true);

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

c::set('plugin.styledmap.apikey', 'AIzaSyAHZD_bU3jRPTgcnZxKSWI_5tTb3-mlyuc');
c::set('plugin.styledmap.defaults.zoom', 17);
