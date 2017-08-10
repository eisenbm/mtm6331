<?php
  /*
  * PHP has a bunch functions that can be use to create
  * a manipulate images. This file looks at a few of them.
  */


  /*
  * getimagesize return an array of information about the
  * the size of an image. It requires a filename parameter.
  */
  echo "<h2>Retrieving the size of an Image.</h2>";
  $size = getimagesize('../cats/cat-1.jpg');
  echo "<pre>";
  print_r($size);
  echo "</pre>";

  /*
  * imagecreatefromjpeg creates a new image from a existing jpg image.
  * imagejpeg creates and saves an image object to a provide file path.
  * imagedestory destorys an image object and frees up memory.
  * NOTE: it will not destory the saved image.
  */
  echo "<h2>Creating a new image from existing image</h2>";
  $copy = imagecreatefromjpeg('../cats/cat-1.jpg');
  imagejpeg($copy, '../tmp/cat-1-copy.jpg');
  imagedestroy($copy);
  echo "<img src=\"../tmp/cat-1-copy.jpg\" alt=\"Cat 1 Copy\" {$size[3]}>";

  /*
  * iamgescale scales using a given new width and height.
  * If height is omitted the image will be scaled so that aspect ratio is
  * preserved.
  */
  echo "<h2>Creating a thumbnail image from existing image</h2>";
  $thumb = imagecreatefromjpeg('../cats/cat-2.jpg');
  $thumb = imagescale($thumb, 300);
  imagejpeg($thumb, '../tmp/cat-2-thumb.jpg');
  imagedestroy($thumb);

  $size = getimagesize('../tmp/cat-2-thumb.jpg');
  echo "<img src=\"../tmp/cat-2-thumb.jpg\" alt=\"Cat 2 Thumbnail\" {$size[3]} >";
