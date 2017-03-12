<?php

if(isset($_REQUEST)) {

  $theme = $_POST['theme'];
  $message = $_POST['message'];

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "kredit_test_task";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die();
    die("Connection failed: " . $conn->connect_error);
  } 

  // sql to create table
  $sql = "CREATE TABLE IF NOT EXISTS `Tickets` (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  theme VARCHAR(255) NOT NULL,
  message TEXT NOT NULL,
  reg_date TIMESTAMP
  )";
  $conn->query($sql);

  $sql_add = "INSERT INTO Tickets (theme, message) VALUES ('$theme', '$message')";
  $conn->query($sql_add);

  $conn->close();

}

?>
