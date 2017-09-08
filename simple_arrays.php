<?php
  /*
  * Simple Arrays in PHP work the same way arrays work in JavaScript.
  * Arrays are a list of values stored in a single variable
  * Simple Arrays are zero indexed, where the first value of an array will be
  * indexed with 0
  */

  // Two ways to initialize an array:

  // Array Function
  $array = array();

  // Array Literal
  $array = [];

  /*
  * It is possible to include array items during the initiazlization statement.
  */
  $fruit = array("Apples", "Bananas", "Oranges", "Pears");
  $fruit = ["Apples", "Bananas", "Oranges", "Pears"];

  /*
  * To retreive value from array, use the variable name followed by square
  * square brackets. Inside the square backets include the number index of
  * the desired value.
  * Remember that the array index starts with 0.
  */

  // Retrieving "Bananas" from $fruit
  echo $fruit[1] . "<br>";

  // Retrieving "Pears" from $fruit
  echo $fruit[3] . "<br>";

  /*
  * If you want to output an entire Array to the page, you cannot use echo.
  * This will trigger a notice and will produce unexpected results.
  */
  echo $fruit;

  /*
  * It is better use the print_r() function or the var_dump function.
  * For best results wrap the function with <pre> tags
  */
  echo "<pre>";
  print_r($fruit);
  echo "</pre>";

  /*
  * To get the length OR the number of items in an array, use the count() or
  * sizeof() function.
  * These functions are exactly the same and interchangable.
  */
  echo count($fruit). "<br>";
  echo sizeof($fruit). "<br>";

  /*
  * It is possible to update a specific value in an array by using it's index
  * and the assignment operator.
  */
  $fruit[2] = "Strawberries";

  echo "<pre>";
  print_r($fruit);
  echo "</pre>";

  /*
  * There are a several different ways to add a new item to the end
  * of an array.
  */

  // Use the next index after the last item with the assignment operator
  $fruit[4] = "Grapes";

  echo "<pre>";
  print_r($fruit);
  echo "</pre>";

  // Use a set of empty brackets with the assignment operator
  $fruit[] = "Blueberries";

  echo "<pre>";
  print_r($fruit);
  echo "</pre>";

  // Use the array_push() function.
  // This function allow one or more items to be added at once
  array_push($fruit, "Peaches");

  echo "<pre>";
  print_r($fruit);
  echo "</pre>";

  /*
  * It is also possible to add new item in the beginning and middle of an array
  * using built-in functions
  */

  // To add one or more items to beginning of the array, use the array_unshift()
  array_unshift($fruit, "Oranges");

  echo "<pre>";
  print_r($fruit);
  echo "</pre>";

  // Use the array_splice() function, to insert items in the middle of an array
  array_splice($fruit, 4, 0, "Watermelons");

  echo "<pre>";
  print_r($fruit);
  echo "</pre>";

?>
