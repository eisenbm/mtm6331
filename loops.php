<?php
  /**
   * The for loop are the most complex loops in PHP.
   * The for loop takes three expressions:
   *    - the initializer
   *    - the condition
   *    - the iterator
   */

  echo "<h2>The for Loop</h2>";

  for ($i = 0; $i < 10; $i++) {
    echo "{$i} <br>";
  }

  echo "<h2>Using a for Loop with an array</h2>";

  $colors = ['Blue', 'Orange', 'Red', 'Green'];
  $length = count($colors);

  for ($i = 0; $i < $length; $i++) {
    echo "{$colors[$i]} <br>";
  }

  /**
   * The foreach loop allows for a easier way to iterate over Arrays`
   * The foreach loop can only be used with Array or Objects.
   * Each value is store is a variable one at a time.
   */

  echo "<h2>Using a foreach Loop with an array</h2>";

  $colors = ['Blue', 'Orange', 'Red', 'Green'];

  foreach ($colors as $color) {
     echo "{$color} <br>";
  }

  /**
   * It is also possible to get the key as well as the value
   * from the array using foreach. This is especially useful with
   * associative arrays.
   */

  echo "<h2>Retrieving array key and value using foreach Loop</h2>";

  $colors = ['Blue', 'Orange', 'Red', 'Green'];

  foreach ($colors as $key => $color) {
     echo "{$key}: {$color} <br>";
  }


  /**
   * While loops are used when you want to keep looping until a specific
   * condition is met.
   */

  echo "<h2>The while Loop</h2>";

  $random = 0;

  while($random !== 7) {
    $random = rand(1, 10);
    echo "{$random} <br>";
  }

  echo "<h2>Using a while loop with an array</h2>";

  $i = 0;

  while($i < 10) {
    echo "{$i} <br>";
    $i++;
  }
