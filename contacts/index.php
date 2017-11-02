<?php
  require_once "config.php";

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
  * Anonymous Function:
  * Manipulates each contact in the $contacts array
  * @param array contact array
  * @return array contact array (maniputated)
  *
  * array_map:
  * @return array new array with the manipuated contact arrays
  */
  $contacts = array_map(function($contact) {
    // Add a new item to the contacts array: url
    // The value is the url to the contact's detail page.
    $contact['url'] = SITE_URL."/contact/".add_underscore($contact['name']);

    // Reformat the birthday value using data() and strtotime()
    // New format: January 01, 2017
    $contact['birthday'] = date('F d, Y', strtotime($contact['birthday']));

    /**
    * Convert the address value from a single line into associative array
    * dividing the value into different parts (street, city, state ...)
    */
    if (strpos($contact['address'], ",")) {
      // The explode() function takes a string, and divides it by the delimiter
      $address = explode(", ", $contact['address']);

      // Convert $address simple array into a associative array
      $contact['address'] = [
        "street" => ($address[0] ? $address[0] : ""),
        "city" => ($address[1] ? $address[1] : ""),
        "state" => ($address[2] ? $address[2] : ""),
        "zip" => ($address[3] ? $address[3] : "")
      ];
    }

    // return the manipulated $contact array back to array_map()
    return $contact;
  }, $contacts);


  /**
  * Create a primative routing system:
  * Determine which template to display based on the query string
  */

  // Display contact template with contact details
  if (isset($_GET['contact'])) {
    $contact = get_contact($contacts);

    if ($contact) {
      $template = $twig->load('contact.html.twig');
      echo $template->render($contact);

    // Display error template if no contact found
    } else {
      $contact = trim($_GET['contact']);

      header("HTTP/1.0 404 Not Found");

      $template = $twig->load('error.html.twig');
      echo $template->render(["contact"=>$contact]);
    }

  // Display error page if 404 error is received
  } else if (isset($_GET['error']) && $_GET['error'] == 404) {
    $page = $_SERVER['REQUEST_URI'];

    $template = $twig->load('error.html.twig');
    echo $template->render(["page" => $page]);

  // Display index template with all contacts
  } else {
    $template = $twig->load('index.html.twig');
    echo $template->render(["contacts" => $contacts]);
  }
