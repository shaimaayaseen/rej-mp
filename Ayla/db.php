<?php 

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "master-piece-shaima";

  // create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (!$conn) {

    die("Connection Failed : " . mysqli_connect_error()); 
    
  }


?>