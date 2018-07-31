<?php 
session_start();
  try {
    $db = new PDO("mysql:dbname=findworka;host=localhost", "root", "");
  } catch(PDOException $e) {
    die('Db connection error: '. $e);
	//echo 'This an error, please fix!';
  }
?>
