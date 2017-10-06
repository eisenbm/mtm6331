<?php
  /**
  * When working with an external JSON file in PHP you must
  * first retrieve the file contents using the
  * file_get_contents() function.
  * This function will return a string of the file's content.
  */
  $json = file_get_contents("data/people.json");

  /**
  * $json contains JSON as a string, which not that useful.
  * To make it more useful you must first convert it to
  * an array. We do this using the json_decode() function.
  * This function takes two arguments, the json string a boolean
  * true: returns an array
  * false: returns an object
  */
  $people = json_decode($json, true);

  echo "<h2>Out Array of JSON Data</h2>";
  /*
  * Output the $people array.
  */
  echo "<pre>";
  print_r($people);
  echo "</pre>";

  /**
  * $people contains an multidimensional associative array.
  * To convert this array back to JSON, we will use the json_encode() function.
  * This function takes a single argument, this argument can be many different
  * types but typically is an array.
  * The function returns a JSON string.
  */
  echo "<h2>Out JSON String from array</h2>";
  /*
  * Output the $json string.
  */
  $json = json_encode($people);
  echo "<pre>";
  echo $json;
  echo "</pre>";

  /**
  * Additional optional parameters can be added to the json_encode(), including
  * flags that affect how the JSON string is created.
  * One such flag, JSON_PRETTY_PRINT, will output the JSON is a more easily
  * readable format.
  */
  echo "<h2>Out JSON String from array using Pretty Print</h2>";
  /*
  * Output the $json string.
  */
  $json = json_encode($people, JSON_PRETTY_PRINT);
  echo "<pre>";
  echo $json;
  echo "</pre>";
