<?php
  require_once "config.php";

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
  }
