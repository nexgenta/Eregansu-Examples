whoami
======

This is a simple test of the authentication system, as well as session handling.

Create a suitable config/config.php file (a symlink from config.default.php should be fine).

On the command-line, run:

	$ ./eregansu whoami
	
This will produce output similar to the below:

	You are:
	Array
	(
	    [name] => mo
	    [passwd] => ********
	    [uid] => 502
	    [gid] => 12
	    [gecos] => Mo McRoberts
	    [dir] => /Users/mo
	    [shell] => /bin/bash
	    [scheme] => posix
	    [uuid] => 00000000-0000-0000-0000-000000000502
	)

See the code in [platform/lib/cli.php](http://github.com/nexgenta/eregansu/blob/master/lib/cli.php) and [platform/posix.php](http://github.com/nexgenta/eregansu/blob/master/posix.php) for the gory details here. The values you see will be different on your system, as they’re taken from your operating system’s authentication layer.

Now, point your web server at the whoami directory and navigate to it using your web browser. You should be greeted with the message:

	You are nobody.

This is [whoami.php’s](http://github.com/nexgenta/Eregansu-Examples/blob/master/whoami/app/whoami.php) way of telling you that the current session has no user.

Log in by adding 'login' to the end of the path in the URL and entering the username “test” and the password “secret” (both without quotes). These details are defined in [config.php](http://github.com/nexgenta/Eregansu-Examples/blob/master/whoami/config/config.default.php). If you log in successfully, you will be redirected back to the root, and see the following output:

	You are:
	Array
	(
	    [uuid] => d0f855cd-7c2d-42a7-81f1-b0505d77b70e
	    [name] => test
	    [password] => DWk525JxUDIJI
	    [scheme] => builtin
	    [iri] => builtin:test
	    [ttl] => 1259531609
	)

See the [BuiltinAuth class](http://github.com/nexgenta/eregansu/blob/master/auth.php) for the code behind this authentication system.

Note that, as there is no identity database present, you can’t log in with any other kind of authentication system, such as OpenID (you would authenticate successfully, but be denied access to actually log in). You can see this in action by visiting /login/openid instead of just /login.

