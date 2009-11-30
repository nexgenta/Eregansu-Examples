<?php

/* Instance configuration */

/* The instance configuration governs settings which are unique to a particular
 * instance of an application—for example, they specify particular database
 * parameters or filesystem paths.
 *
 * This is contrast to the appconfig which specifies parameters shared between
 * all copies of a particular application.
 */

/* Use googleapis.com for jQuery: if you do not define this, the platform will
 * expect to be able to find jQuery in /jquery/x.y.z/jquery.min.js (where x.y.z
 * is the version number).
 */
 
define('SCRIPTS_USE_GAPI', true);

$BUILTIN_USERS = array(
	'test' => array(
		'uuid' => 'd0f855cd-7c2d-42a7-81f1-b0505d77b70e',
		'name' => 'test',
		'password' => 'DWk525JxUDIJI', /* The word "secret" (without quotes) */
	),
);
