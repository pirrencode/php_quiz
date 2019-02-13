<?php
  include "database.php";
  session_start();
  // getting values from form on sql_insert_data transfered here
  // with POST method
  $firstname = $_POST['firstname'];
  $quiz = $_POST['quiz'];

  //input directly into DB
  $sql = "INSERT INTO userlist (firstname, quiz) VALUES ('$firstname','$quiz');";
  mysqli_query($mysqli, $sql);
  // Procede to Quiz
  header("Location: quiz.php");
?>
