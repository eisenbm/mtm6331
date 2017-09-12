<?php
  /*
  * Conditional statements allow a program to take different actions based on
  * specific conditions.
  * Like JavaScript, PHP has two main conditional statements if/else and switch
  */

  /*
  * Switch statements are an alternative to if/else statements, and in some
  * cases are more efficient.
  * If multiple condition share the same result, stacking cases in a controlled
  * fall through can be very effective. 
  */

  // Days in the month
  $month = "April";

  switch($month) {
    case "January":
    case "March":
    case "May":
    case "July":
    case "August":
    case "October":
    case "December":
      echo "{$month} has 31 days";
      break;

    case "April":
    case "June":
    case "September":
    case "November":
      echo "{$month} has 30 days";
      break;

    case "Febraury":
      echo "{$month} has 28 or 29 days";
      break;

    default:
      echo "${month} is not a valid month";
  }
?>
