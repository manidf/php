<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Array Functions</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
</head>
<body>

<h2>
<?php

	$list = [9867625, 989,232,673,2347,23456,246373,77332,445];
	echo max($list);
	echo "<hr/>";

	echo min($list);
	echo "<hr/>";

	sort($list);
	print_r($list);
?>
</h2>
</body>
</html>
