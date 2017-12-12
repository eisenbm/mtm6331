<?php
  require_once "config.php";


if (isset($_GET['query'])) {
  // Retrieve all the contacts from the contacts database
  $sql = "SELECT
    `contact_name` as name,
    `contact_company` as company,
    `contact_thumbnail` as thumbnail
    FROM `contacts`
    WHERE `contact_name` LIKE ?;";

  $stmt = $pdo->prepare($sql);

  $values = ['%'.$_GET['query'].'%'];

  $result = $stmt->execute($values);

  check_for_errors($stmt);

  $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);

  $contacts = update_contacts($contacts);

  $template = $twig->load('index.html.twig');
  echo $template->render(["contacts" => $contacts, "search" => $_GET['query']]);

}
