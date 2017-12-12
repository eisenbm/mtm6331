<?php
  require_once "config.php";

  if (isset($_GET['error']) && $_GET['error'] == 404) {
    $page = $_SERVER['REQUEST_URI'];

    $template = $twig->load('error.html.twig');
    echo $template->render(["page" => $page]);

  // Display index template with all contacts
  }
