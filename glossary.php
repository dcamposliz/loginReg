// glossary

// strlen
	// method which returns string length

	<?php
		$str = 'qwerty';
		echo strlen($str); // 6
	?>

// _POST
	// An associative array of variables passed 
	// to the current script via the HTTP POST 
	// method when using application/x-www-form-urlencoded
	// or multipart/form-data as the HTTP Content-Type in 
	// the request.

	<?php
		echo 'Hello ' . htmlspecialchars($_POST["name"]) . '!';
	?>
	// assuming the user POSTed name=Hannes
	// the example above would return:
	// Hello Hannes!

// fetch
	// from PDOStatement::fetch
	// Fetches a row from a result set associated with a PDOStatement object.
	// The fetch_style parameter determines how PDO returns the row.


