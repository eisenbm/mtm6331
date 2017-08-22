<?php
	require "includes/debugbar.php";

	//ini_set('display_errors','on');


	register_shutdown_function(function() {
		$success_msg = '<h1 style="position: fixed; top: 0; left: 0; width: 100%; background: #EFD6D6; color: #993031; padding: 15px; margin: 0px;">%s</h1>';
		$error_msg = '<h1 style="position: fixed; top: 0; left: 0; width: 100%; background:#D8EECE; color: #2E662C; padding: 15px; margin: 0px;">%s</h1>';

		$error = error_get_last();

		if (!empty($error)) {
			echo sprintf($error_msg, 'There are some errors on the page.');
		} else {
			echo sprintf($success_msg, 'Great! You have successfully found all the errors.');
		}
	});

	//var_dump((object) range(0, 1000000000));

	$name = "John Smith";

	$bio = "I am a boring person, but I still talk a lot. Blah, blah, blah.";

	echo "<h1 style=\"margin: 100px 0 0 0;\">My name is " . $name . ".";
	$bio;

	$names = [
		'Jack',
		'Dick',
		'Harry'
	];


	echo "";
