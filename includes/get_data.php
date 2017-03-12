<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "kredit_test_task";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die();
    // die("Connection failed: " . $conn->connect_error);
  } 

  // sql to create table
  $sql = "CREATE TABLE IF NOT EXISTS `Tickets` (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  theme VARCHAR(255) NOT NULL,
  message TEXT NOT NULL,
  reg_date TIMESTAMP
  )";


  // $sql = "SELECT id, firstname, lastname FROM Tickets";
  // $result = $conn->query($sql);

  // if ($result->num_rows > 0) {
  //   // output data of each row
  //   while($row = $result->fetch_assoc()) {
  //       echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  //   }
  // } else {
  //   echo "0 results";
  // }
  $conn->close();


?>