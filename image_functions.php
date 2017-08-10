<?php
  /*
  * PHP has a bunch functions that can be use to create
  * a manipulate images. This file looks at a few of them.
  */

  echo '<h2>Retrieving the size of an Image.</h2>';
  echo "<pre>";
  print_r(getimagesize('cats/cat-1.jpg'));
  echo "</pre>";
