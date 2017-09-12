<?php
  /*
  * Associative Arrays are similar to Simples Arrays except that instead of
  * instead of a numbered index, an associative arrays use strings.
  * Use a => to connect the index or key to the value
  */
  $address = array(
    "street" => "1385 Woodroffe Avenue",
    "city" => "Ottawa",
    "province" => "Ontario",
    "postal" => "K2G 1V8"
  );

  $address = [
    "street" => "1385 Woodroffe Avenue",
    "city" => "Ottawa",
    "province" => "Ontario",
    "postal" => "K2G 1V8"
  ];

  /*
  * Retrieving the values from an associative array uses the same syntax as
  * simple arrays. The variable name of the array following by a set of square
  * brackets, in the bracket the string index of the value you want.
  */
  echo $address["city"] . "<br>"; // Ottawa

  echo $address["postal"] . "<br>"; // K2G 1V8

  /*
  * Just like with simple arrays, you can not use echo to output an entire
  * associative array. Use print_r() or var_dump() instead.
  */
  echo "<pre>";
  print_r($address);
  echo "</pre>";

  
