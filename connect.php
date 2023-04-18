<?php
  $servername = "localhost";
  $username = "unn_w22031856";
  $password = "13791379@Mr.mm";
  $db = "unn_w22031856";
  $conn = mysqli_connect($servername, $username, $password,$db);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>