<?php

/**
 * Error notice for db query
 */
function confirmQuery($result) {
	global $dbConnection;

	if ( ! $result) {
		die("QUERY FAILED ." . mysqli_error($dbConnection));
	} else {
		echo "updated";
	}
	return $result;
}
