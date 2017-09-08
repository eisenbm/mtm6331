<?php
  /*
  * PHP variables work like variables in JavaScript. However, instead of using
  * var to declare a variable, variable names start with a dollar sign ($)
  * Variables can be strings, numbers, boolean, dates, and arrays
  */
  $string = "The Meaning of Life, Universe, and Everything";
  $number = 42;
  $boolean = true;

  /*
  * Changing the value of an initialize variable is a simple as using the
  * assignment expression
  */
  $string = "The Ultimate Question";

  /*
  * To retrieve the value of a variable, use variable name or identifier
  */
  echo $string . "<br>";
  echo $number . "<br>";
  echo $boolean  . "<br>";

  /*
  * To delete variable, use the unset() function
  */
  unset($string);

  var_dump($string);
