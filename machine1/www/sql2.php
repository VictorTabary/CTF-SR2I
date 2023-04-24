<?php
$servername = "10.1.0.147:3306";
$username = "root";
$password = "zeajkeazelkEZJLEA";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br/>";

$sql = "SELECT * FROM users;";
$result = $conn->query($sql);
echo "rows:".$result->num_rows."<br/>";
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo var_dump($row)."<br>";
  }
}

$conn->close();

// https://www.w3schools.com/php/php_mysql_create.asp

$conn->close();

?> 