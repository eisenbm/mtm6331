<?php
  /**
   * Using opendir, readdir, and closedir to get files from  directory.
   * Refer to Documentation (http://php.net/manual/en/function.readdir.php)
   */
  echo "<h2>Using the readdir() Function</h2>";

  if ($dh = opendir('cats/')) {
      while (($file = readdir($dh)) !== false) {
          echo "{$file} <br>";
      }

     closedir($dh);
  }

  /**
   * Using scandir to get files from  directory.
   * Refer to Documentation (http://php.net/manual/en/function.scandir.php)
   */
  echo "<h2>Using the scandir() Function</h2>";

  $files = scandir('cats/');

  foreach ($files as $file) {
    echo "{$file} <br>";
  }

  /**
   * Using scandir to get files from  directory.
   * Refer to Documentation (http://php.net/manual/en/function.scandir.php)
   */
  echo "<h2>Using the scandir() Function (No Dots)</h2>";

  $files = array_diff(scandir('cats/'), ['.', '..']);

  foreach ($files as $file) {
    echo "{$file} <br>";
  }
