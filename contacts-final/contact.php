<?php
  require_once "config.php";

  if (isset($_GET['contact'])) {

    // create prepared statement with anonymous variable
    $sql = "SELECT
    contact_id AS id,
    contact_name AS name,
    contact_company AS company,
    contact_portrait AS portrait,
    contact_birthday AS birthday,
    contact_street AS street,
    contact_city AS city,
    contact_state AS state,
    contact_zip AS zip,
    contact_email AS email
    FROM contacts
    WHERE contact_name = ?";

    // send the prepared statement to database
    $stmt = $pdo->prepare($sql);

    // create an array of values for variables
    $values = [remove_underscore($_GET['contact'])];

    // Execute prepared statement with values
    $result = $stmt->execute($values);

    check_for_errors($stmt);

    if ($contact = $stmt->fetch(PDO::FETCH_ASSOC)) {

      // Retrieve phone numbers for contact
      $sql = "SELECT * FROM phones WHERE contact_id = ".$contact['id'];

      // Send the query to the database
      $result = $pdo->query($sql);

      // Fetch all rows from result
      $phones = $result->fetchAll(PDO::FETCH_ASSOC);

      // Add the $phones array to $contact array
      $contact['phones'] = $phones;


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
