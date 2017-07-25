<?php
  session_start();
  require_once('connect.php');
  $ques = $_POST['question'];

  $sql = "INSERT INTO admin (question)
  VALUES ('$ques')";

  $result=$conn->query($sql);

  if ($result) {
      echo "Thank you, we will get back to you soon";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
  header("Location: page.php");


?>
