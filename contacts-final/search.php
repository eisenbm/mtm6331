<?php
  require_once "config.php";

  if (isset($_GET['query'])) {

    // Retrieve all contacts whose name matches query
    $sql = "SELECT
    contact_name AS name,
    contact_company AS company,
    contact_thumbnail AS thumbnail
    FROM contacts
    WHERE contact_name LIKE ?";

    // Send our prepared statement to database
    $stmt = $pdo->prepare($sql);

    // Create values array
    $values = [
      "%".$_GET['query']."%"
    ];

    // Execute prepared statement with VALUES
    $result = $stmt->execute($values);

    // check for errors
    check_for_errors($stmt);

    // Fetch all contact from results
    $contacts = update_contacts($stmt->fetchAll(PDO::FETCH_ASSOC));

    $template = $twig->load('index.html.twig');
    echo $template->render(["contacts" => $contacts]);


  }
