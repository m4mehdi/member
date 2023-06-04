<?php

$servername = "localhost";
$username = "dbuser";
$password = "123";
$dbname="member";
$db = new mysqli($servername, $username, $password, $dbname);

if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  


  ?>
