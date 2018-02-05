<?php

/*

---------------------------------------
License Setup
---------------------------------------

*/

c::set('license', 'put your license key here');

c::set('languages', array(
	array(
		'code'    => 'en',
		'name'    => 'English',
		'locale'  => 'en_US.UTF-8',
		'default' => true,
		'url'     => '/'
	)
));

c::set('debug',false);

/*

---------------------------------------
Contact map
---------------------------------------
Make a JS api google maps key and put it in here
*/

c::set('plugin.styledmap.apikey', 'AIzaSyAHZD_bU3jRPTgcnZxKSWI_5tTb3-mlyuc');
c::set('plugin.styledmap.defaults.zoom', 17);
