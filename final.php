<?php session_start(); ?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>PHP Quiz Final Score</title>
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
      <h2>You're Done!</h2>
      <p>Congrats! You have completed the test.</p>
      <p>
        Final Score <?php echo $_SESSION['score']; ?></p>
      <a href="question.php?n=1" class="start">Take Again</a>
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
<?php session_destroy(); ?>﻿
