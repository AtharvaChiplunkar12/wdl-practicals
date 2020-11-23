<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname='emp';
    $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "create table employee(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
empid VARCHAR(30) NOT NULL,
empname VARCHAR(30) NOT NULL,
designation VARCHAR(30) NOT NULL,
salary VARCHAR(30) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
  echo "Table employee created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

    mysqli_close($conn);
    ?>
