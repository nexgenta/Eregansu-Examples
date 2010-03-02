<?php

/* Very simple, very straightforward application configuration for 'hello' */

define('DEFAULT_SKIN', 'hello');

$HTTP_ROUTES = array(
	'__NONE__' => array('class' => 'Page', 'templateName' => 'hello.phtml'),
);
