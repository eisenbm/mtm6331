<?php
  /*
  * ASSIGNMENT: PHP Error Handling and Debugging
  * The objective of this assignment is to use the debugging techniques
  * shown in class to find all the syntax and logic bugs in the script and fix
  * them.
  *
  * You are finished when the page loads with the expected results.
  */

  echo "<h1>Assignment: PHP Error Handling Debugging</h1>";

  /* ADD YOUR NAME AND GREETING HERE: */
  $your_name = "Michael Eisenbraun";
  $greeting = "Hello";

  /* GREETING: Output a greeting when $your_name and $greeting are set */
  echo "<h2 style=\"margin-left: 30px;\">Greeting</h2>";

  if ($your_name == "Your Name" && $greeting = "Your Greeting") {
    echo "<h3 style=\"padding: 10px; background-color: #F6CCD1; color: #5F111A;\">You did not provide a name and greeting.</h3>";
  }

  if ($your_name && $greeting) {
    echo "<h3 style=\"margin: 0 60px; padding: 25px; background-color: #C0DEFF; color: #033078; border: 3px solid #033078; \">{$greeting}, My name is {$your_name}.</h3>";
  }

  /* RAINBOW: Output the colors of the rainbow
  * There should be a div for each color with the color background
  * and the name of the color in the div.
  */
  echo "<h2 style=\"margin-left: 30px;\">Rainbow</h2>";

  $colors = ["red", "orange", "yellow", "green", "blue", "indigo", "violet"];

  foreach ($colors as $color) {
    echo "<div style=\"margin: 0 60px; padding: 25px; color: #fff; text-transform: uppercase; text-shadow: 1px 1px 5px rgba(0,0,0,0.5); background-color: {$color}\">{$color}</div>";
  }

  /* LUCKY NUMBER 7: Output random numbers until 7 is picked.
  * Numbers that are not 7 should be displayed in light gray.
  * The number 7 should be displayed in black.
  */
  echo "<h2 style=\"margin-left: 30px;\">Lucky Number 7</h2>";

  $rand = 0;

  echo "<div style=\"margin: 0 60px\">";
  while ($rand != 7) {
    $rand = rand(1, 12);
    $color = "#ccc";

    if ($rand == 7) {
      $color = "#000";
    }

    echo "<p style=\"margin: 0px 10px 15px 0; height: 50px; width: 50px; border: 3px solid {$color}; color: {$color}; line-height: 50px; text-align: center; float: left; font-size: 16px; \">{$rand}</p>";
  }

  if ($rand == 7) {
    echo "<h3 style=\"clear: both; margin: 10px 10px 0 0; \"><strong>Winner! Winner! Chicken Dinner!</strong></h3>";
  }

  echo "</div>";


  /* HAPPY HIPPO, ANGRY DUCK: Chooses the emotion at random and finds that
  * appropriate animal. Each animal must have one emotion, and one emotion per
  * animal. The DUCK is always ANGRY.
  */
  echo "<h2 style=\"margin-left: 30px;\">Happy Hippo, Angry Duck</h2>";

  $emotions = ['Happy', 'Angry', 'Sad', 'Worried', 'Grumpy', 'Excited', 'Confused'];
  $animals = ['Hippo', 'Duck', 'Chicken', 'Rabbit', 'Moose', 'Dog', 'Cow'];

  // Randomizes the arrays
  shuffle($emotions);
  shuffle($animals);

  echo "<div style=\"margin: 0 60px\">";
  foreach($emotions as $emotion) {
    if ($emotion == 'Angry') {
      $duck = array_search('Duck', $animals);

      echo "<p style=\"padding: 10px; background-color: #F6CCD1; color: #5F111A;\">{$emotion} {$animals[$duck]}</p>";
      array_splice($animals, $duck, 1);
    } else {
      // If Duck is the next animal, move to the back
      if ($animals[0] == 'Duck') {
        $duck = array_shift($animals);
        array_push($animals, $duck);
      }
      $animal = array_shift($animals);
      echo "<p style=\"padding: 10px; background-color: #FFF2C0; color: #725300;\">{$emotion} {$animal}</p>";
    }
  }




?>
