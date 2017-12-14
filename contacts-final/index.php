<?php
  require_once "config.php";

  // Query statement to retrieve all contacts
  $sql = "SELECT
  contact_name AS name,
  contact_company AS company,
  contact_thumbnail AS thumbnail
  FROM contacts";

  // Send query statement to database
  $result = $pdo->query($sql);

  // Rretrieve all results as an array
  $contacts = update_contacts($result->fetchAll(PDO::FETCH_ASSOC));

  $template = $twig->load('index.html.twig');
  echo $template->render(["contacts" => $contacts]);
