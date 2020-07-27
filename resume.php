<?php
session_start();
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "portfolio";
    // Create connection
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
  
  die("Connection failed: " . $conn->connect_error);
  
  }

  $sql = "SELECT content FROM files where id=1";
  $result = mysqli_query($conn, $sql);

  foreach($result as $row1){
    $res = $row1["content"];
  }
  $_SESSION['res'] = $res;
  header("Content-Type: application/pdf");
header("Content-Length: ".strlen($res));
  header('Content-Disposition: attachment; filename=resume.pdf');
echo $res;
?>