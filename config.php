<?php

/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'localhost';
$databaseName = 'webphp';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
