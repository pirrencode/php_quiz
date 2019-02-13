<?php include "database.php"; ?>
<?php
/*
 * Get Total Questions
*/

$query = "SELECT * FROM questions";

// Get results
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
      <h1>Technical task - Aleksejs Vesjolijs</h1>
    </div>
  </header>
  <main>
    <div class="container">
      Please enter your name:<br>
      <form action="insert.inc.php" method="post">

      <input type="text" name="firstname" placeholder="Your name">
      <p>
        Please choose Test:<br>
      <select name="quiz">
      <option value="test1">Select Test N1</option>
      <option value="test2">Select Test N2</option>
      <option value="test0"></option>
      </select>
      <br>
      <button type="submit" name="quizstart">Start</button>

    </form>
    </div>
  </main>

    <footer>
      <div class="container">
        Aleksejs Vesjolijs 2019
      </div>
    </footer>
  <script src="js/scripts.js"></script>
</body>
</html>
