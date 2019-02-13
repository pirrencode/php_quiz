<?php include "database.php"; ?>
<?php session_start(); ?>

<?php
  // Set question number
  $number = (int) $_GET['n'];

  /*
  Get Question
  $query = "SELECT  * FROM 'questions'";
  */

  $query = "SELECT * FROM questions WHERE question_number = $number";

  // Get result
  $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
  $question = $result->fetch_assoc();

  /*
  Get Choices
  $query = "SELECT  * FROM 'questions'";
  */

  $query = "SELECT * FROM choices WHERE question_number = $number";

  // Get result
  $choices = $mysqli->query($query) or die($mysqli->error.__LINE__);

  /*
   * Get total questions
  */

  $query = "SELECT * FROM questions";
  // Get result
  $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
  $total = $results->num_rows;

?>




<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>PHP Quiz</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/style.css" type="text/css">

</head>

<body>
  <header>
    <div class="container">
      <h1>PHP Quizzer</h1>
    </div>
  </header>
  <main>
    <div class="container">
      <div class="current">Question <?php echo $question['question_number']; ?> of <?php echo $total; ?></div>
      <p class="question">
        <?php echo $question['text']; ?>
      </p>
      <form method="post" action="process.php">
        <ul class="choices">
          <!-- while there are still choices for this query - do !-->
          <?php while($row = $choices->fetch_assoc()): ?>
            <li><input name="choice" type="radio" value="<?php echo $row['id']; ?>" /><?php echo $row['text']; ?></li>
          <?php endwhile; ?>
        </ul>
        <input type="submit" value="Submit" />
        <input type="hidden" name="number" value="<?php echo $number; ?>" />
      </form>
    </div>
  </main>

    <footer>
      <div class="container">
        Aleksejs Vesjolijs 2019.
      </div>
    </footer>
  <script src="js/scripts.js"></script>
</body>
</html>
