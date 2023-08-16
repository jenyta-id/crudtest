<?php
$databaseHost = '192.168.0.37';
$databaseName = 'test';
$databaseUsername = 'root';
$databasePassword = 'jenytadb';

// Open a new connection to the MySQL server
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
