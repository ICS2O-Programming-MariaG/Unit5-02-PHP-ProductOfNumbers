<?php
  //initializing the sum variable
  $sum = 0;

  //getting the user's two inputted numbers
  $firstNum = intval($_POST['first-number']);
  $secondNum = intval($_POST['second-number']);

  //using a for loop to repeatedly add the first number to the sum, finding the product through addition
  for ($counter = 1; $counter <= $secondNum; $counter++) {
    $sum = $sum + $firstNum;
  }

  //displaying the sum/product to the screen
  echo "The product of the two numbers is " . $sum . ".";
?>
