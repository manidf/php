<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Functions scope</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
</head>
<body>

<h2>
	<?php

		$number = 100;
		$number = 1000;

		$number = "Manny";
		echo $number . "<br/>";

		define("NAME", 1000);
		echo NAME;

	?>
</h2>
</body>
</html>
