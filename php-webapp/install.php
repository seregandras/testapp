<?php

require "config.php";

try 
{
	$connection = new PDO("mysql:host=$host", $username, $password, $options);
	$sql = file_get_contents("data/init.sql");
	$sql2 = file_get_contents("data/init2.sql");
	$connection->exec($sql);
	$connection->exec($sql2);
	
	echo "Database and table users created successfully.";
}

catch(PDOException $error)
{
	echo $sql . "<br>" . $error->getMessage();
}