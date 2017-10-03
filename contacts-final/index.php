<?php
  /* CONSTANTS */
  define("SITE_ROOT", __DIR__);
  define("SITE_URL", "/contacts-final");

  /* Load the Twig Library */
  require_once SITE_ROOT.'/vendor/autoload.php';

  /* Configure Twig */
  $loader = new Twig_Loader_Filesystem(SITE_ROOT.'/templates');
  $twig = new Twig_Environment($loader, array(
    'cache' => SITE_ROOT.'/cache',
    'auto_reload' => true
  ));

  /* Set absolute URL to site */
  $twig->addGlobal("SITE_URL", SITE_URL);

  /* Get Contacts Data */
  $json = file_get_contents(SITE_ROOT."/data/contacts.json");
  $contacts = json_decode($json, true);

  /* Replace space with _ */
  function add_underscore($name) {
    return preg_replace("/\s/", "_", $name);
  }

  /* Replace _ with space */
  function remove_underscore($name) {
    return preg_replace("/_/", " ", $name);
  }


  /* Make changes to the contacts array */
  $contacts = array_map(function($contact) {
    // Create contact url
    $contact['url'] = SITE_URL."/contact/".add_underscore($contact['name']);

    // Formatting birthday
    $contact['birthday'] = date('F d, Y', strtotime($contact['birthday']));

    // Converting address to assoc array
    $address = explode(", ", $contact['address']);

    $contact['address'] = [
      "street" => $address[0],
      "city" => $address[1],
      "state" => $address[2],
      "zip" => $address[3]
    ];

    return $contact;
  }, $contacts);

  /* Get Contact by Name */
  function get_contact_by_name($contacts) {
    foreach($contacts as $contact) {
      if ($contact['name'] == remove_underscore($_GET['contact'])) {
        return $contact;
      }
    }

    return false;
  }

  /* Routes: Determine which template to use */

  if (isset($_GET['contact'])) {
    $contact = get_contact_by_name($contacts);

    if ($contact) {
      $template = $twig->load('contact.html.twig');
      echo $template->render($contact);
    } else {
      $contact = trim($_GET['contact']);

      header("HTTP/1.0 404 Not Found");

      $template = $twig->load('error.html.twig');
      echo $template->render(["contact"=>$contact]);
    }

  } else if (isset($_GET['error']) && $_GET['error'] == 404) {
      $page = $_SERVER['REQUEST_URI'];

      $template = $twig->load('error.html.twig');
      echo $template->render(["page" => $page]);
  } else {
    $template = $twig->load('index.html.twig');
    echo $template->render(["contacts" => $contacts]);
  }
