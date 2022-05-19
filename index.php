<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Maria's Product of Numbers Webpage">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="MariaG">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Product of Numbers - Maria Goemans</title>
  </head>
  <body>
    <?php echo "<h1>Calculating the Product of Numbers With a For Loop</h1>"; ?>
    <!-- Div for background colour -->
    <div id="pink">
      <?php
        echo "<h3>Welcome!</h3>";
        echo "<p>Welcome! Input two positive integers below, and we will calculate their product.</p>";
        echo "<h3>Your Input:</h3>";
      ?>
      <!-- Form for user input -->
      <form action="./multiply.php" method="post" target="results">
        <label for="first number">Enter a positive integer:</label>
        <input type="number" step="1" min="0" name="first-number" placeholder="An integer..."><br><br>
        <label for="second number">Enter a second positive integer:</label>
        <input type="number" min="0" step="1" name="second-number" placeholder="Another integer..."><br><br>
        <input type="submit" value="Submit Numbers" id="styled-button">
      </form>
    </div>
    <!-- Div for background colour -->
    <div id="yellow">
      <!-- Iframe for results to be displayed -->
      <iframe id="results" name="results"></iframe>
    </div>
  </body>
</html>