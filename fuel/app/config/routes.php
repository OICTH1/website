<?php
return array(
	'_root_'  => 'welcome/inde',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route

	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);
