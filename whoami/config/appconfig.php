<?php

define('DEFAULT_LOGIN_KIND', 'builtin');
define('DEFAULT_AUTH_SCHEME', 'builtin');

$HTTP_ROUTES = array(
	'__NONE__' => array('class' => 'WhoAmI', 'file' => 'whoami.php'),
	'login' => array('file' => PLATFORM_ROOT . 'login/app.php', 'class' => 'LoginPage', 'fromRoot' => true),
);

$CLI_ROUTES = array(
	'whoami' => array('class' => 'WhoAmI', 'file' => 'whoami.php'),
);
