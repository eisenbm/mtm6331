<?php
  require_once "config.php";

  // Retrieve all the contacts from the contacts database
  $sql = "SELECT
    `contact_name` as name,
    `contact_company` as company,
    `contact_thumbnail` as thumbnail
    FROM `contacts`";

  $result = $pdo->query($sql);
  $contacts = $result->fetchAll(PDO::FETCH_ASSOC);

  $contacts = update_contacts($contacts);


  $template = $twig->load('index.html.twig');
  echo $template->render(["contacts" => $contacts]);
