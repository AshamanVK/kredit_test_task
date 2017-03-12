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
  $conn->query($sql);

  $sql = "SELECT reg_date, theme, message FROM Tickets";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='row'>";
        echo "<div class='col col-3'>".$row["reg_date"]."</div>";
        echo "<div class='col col-3'>".$row["theme"]."</div>";
        echo "<div class='col col-3'>".$row["message"]."</div>";
        echo "</div>";
    }
  } else {
    echo "нет тикетов";
  }
  $conn->close();


?>