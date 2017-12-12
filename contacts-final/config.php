<?php
  /* Site path constants */
  define("SITE_ROOT", __DIR__);
  define("SITE_URL", "/mtm6331/week9/contacts-final");

  /* Database connection settings. */
  $dbname = "mtm6331-contacts";
  $dbuser = "root";
  $dbpass = "root";
  $dbhost = "localhost";

  // Connect to the local database using PDO.
  try {
      $pdo = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbname, $dbuser, $dbpass);
  } catch (PDOException $err) {
      header('HTTP/1.1: 500');
      echo "Database connection problem" . $err->getMessage();
      exit();
  }

  /* Load the Twig Library */
  require_once SITE_ROOT.'/vendor/autoload.php';

  /* Configure Twig */
  $loader = new Twig_Loader_Filesystem(SITE_ROOT.'/templates');
  $twig = new Twig_Environment($loader, array(
    //'cache' => SITE_ROOT.'/cache',
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
  * Custom Functions
  */
  /**
   * Replaces space with underscore (_)
   * @param string contact name
   * @return string contact name with _ instead of space
  */
  function add_underscore($name) {
    return preg_replace("/\s/", "_", $name);
  }

  /**
   * Replaces underscore (_) with space
   * @param string contact name with _ instead spaces
   * @return string contact name with space instead of _
  */
  function remove_underscore($name) {
    return preg_replace("/_/", " ", $name);
  }

  /**
  * Update the contact information
  * @param array contacts array
  * @return modified contacts array
  */
  function update_contacts($contacts) {
    return array_map(function($contact) {
      // Add a new item to the contacts array: url
      // The value is the url to the contact's detail page.
      $contact['url'] = SITE_URL."/contact/".add_underscore($contact['name']);

      // return the manipulated $contact array back to array_map()
      return $contact;
    }, $contacts);
  }

  /**
   * Searches for a contact in $contacts base on contact name with _
   * @param string contact name with _ instead spaces
   * @return array matched contact base on name
   * @return false if no match is found
  */
  function get_contact($contacts) {
    foreach($contacts as $contact) {
      if ($contact['name'] == remove_underscore($_GET['contact'])) {
        return $contact;
      }
    }

    return false;
  }

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
