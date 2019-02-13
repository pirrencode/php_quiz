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
      <h1>PHP Quizzer</h1>
    </div>
  </header>
  <main>
    <div class="container">
      <h2>Test Your PHP KNowledge</h2>
      <p>This is a multiple choice quiz to test your knowledge of PHP</p>
      <ul>
        <li><strong>Nuber of questions: </strong><?php echo $total; ?></li>
        <li><strong>Type of quiz: </strong>Multiple choice</li>
        <li><strong>Estimated time: </strong><?php echo $total*.5; ?> Minutes</li>
      </ul>
      <a href="question.php?n=1" class="start">Start Quiz</a>
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
