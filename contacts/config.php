<?php
  /* Site path constants */
  define("SITE_ROOT", __DIR__);
  define("SITE_URL", "/mtm6331/week9/contacts");

  /* Load the Twig Library */
  require_once SITE_ROOT.'/vendor/autoload.php';

  /* Configure Twig */
  $loader = new Twig_Loader_Filesystem(SITE_ROOT.'/templates');
  $twig = new Twig_Environment($loader, array(
    'cache' => SITE_ROOT.'/cache',
    'auto_reload' => true
  ));

  // Set absolute URL to site to a Twig Global Variable
  $twig->addGlobal("SITE_URL", SITE_URL);

  // Add custom phone filter to Twig
  $twig->addFilter(new Twig_SimpleFilter('phone', function ($num) {
      return ($num)?'('.substr($num,0,3).') '.substr($num,3,3).'-'.substr($num,6,4):'&nbsp;';
  }));

  // Define $contacts so that it equals something
  $contacts = [];

  /**
  * Check for error returned from the database
  * @param object a prepared statement object
  * @return exit if a error has been returned.
  */
  function check_for_errors($stmt) {
    $errorInfo = $stmt->errorInfo();

    if (isset($errorInfo[2])) {
    	echo $errorInfo[2];
    	exit;
    }
  }

  // Get contact data from JSON File
  // Retrieve file content using file_get_contents
  // file_get_contents returns a string
  $json = file_get_contents(SITE_ROOT."/data/contacts.json");
  // convert json string to array
  // json_decode take two parameters: json string, boolean
  // Boolean == true, return array, false return an object
  $contacts = json_decode($json, true);
