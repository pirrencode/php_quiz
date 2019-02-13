<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
//Check to see if score is set
// isset is php function to see if some value is set
  if(!isset($_SESSION['score'])){
    $_SESSION['score'] = 0;
  }

  if($_POST){
      // echo "Ive been submitted";
      // These inputs come from the name atribute on the questions form
      $number = $_POST['number'];
      $selected_choice = $_POST['choice'];

      // echo $number.'<br>';
      // echo $selected_choice;
      // Redirect user to next question, setting variable next
      $next = $number+1;

      /*
       * Get total questions
      */


      $query = "SELECT * FROM questions";
      // Get result
      $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
      $total = $results->num_rows;

      /*
       * Get correct choice
      */

      $query = "SELECT * FROM choices WHERE question_number = $number AND is_correct = 1";

      // Get result
      $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

      // Get row
      $row = $result->fetch_assoc();

      // Set correct choice

      $correct_choice = $row['id'];

      // Compare
      if($correct_choice == $selected_choice){
        // Answer is correct, setting session score imncremented by one
        $_SESSION['score']++;
      }
      // if it's last question - then we want to redirect
      // if it's not, then we set n to the next value.
      if($number == $total) {
        header("Location: final.php");
        $sql = "INSERT INTO userlist (score) VALUES ('$score');";
        mysqli_query($mysqli, $sql);
        exit();
      } else {
        header("Location: question.php?n=".$next);
      }
  }
