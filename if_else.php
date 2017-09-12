<?php
  /*
  * Conditional statements allow a program to take different actions based on
  * specific conditions.
  * Like JavaScript, PHP has two main conditional statements if/else and switch
  */

  /*
  * The if statement is the most common conditional statement in PHP.
  * If the condition of an if statement is "true", then the code inside the code
  * block will be executed.
  * If the codition is "false", the code block will be skipped.
  */
  if (2 < 3) {
    echo "Yes, 2 is less than 3";
  }

  /*
  * The else statement can be used to executed code if the condition of the
  * if statement is false.
  */
  if (2 > 3) {
    // This code will be skipped.
    echo "Yes, 2 is greater than 3";
  } else {
    echo "No, 2 is not greater than 3";
  }

  /* The else if statement can be used when you need to check for multiple
  * condition, in which each will need to execute it own seperate code.
  */
  $num = 3;
  if ($num < 3) {
    echo "{$num} is less than 3";
  } else if ($num == 3) {
    echo "{$num} is equal to 3";
  } else if ($num > 3) {
    echo "{$num} is greater than 3";
  }

?>
