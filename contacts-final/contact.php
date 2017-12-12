<?php
  require_once "config.php";

  if (isset($_GET['contact'])) {
    $sql = "SELECT
      `contact_id` as `id`,
      `contact_name` as `name`,
      `contact_company` as `company`,
      `contact_portrait` as `portrait`,
      `contact_birthday` as `birthday`,
      `contact_street` as `street`,
      `contact_city` as `city`,
      `contact_state` as `state`,
      `contact_zip` as `zip`,
      `contact_email` as `email`
      FROM `contacts`
      WHERE `contact_name` = ?";
    $stmt = $pdo->prepare($sql);

    $values = [remove_underscore($_GET['contact'])];

    $result = $stmt->execute($values);

    check_for_errors($stmt);

    if ($contact = $stmt->fetch(PDO::FETCH_ASSOC)) {
      // reformat the birthday
      $contact['birthday'] = date('F d, Y', strtotime($contact['birthday']));

      // Get phones from phones table using contact id
      $sql = "SELECT `phone_type` as `type`, `phone_number` as `number` FROM `phones` WHERE `contact_id` = ?";
      $stmt = $pdo->prepare($sql);
      $values = [$contact['id']];

      $result = $stmt->execute($values);

      check_for_errors($stmt);

      // Retrieve all rows from database and save to $emails
      $phones = $stmt->fetchAll(PDO::FETCH_ASSOC);

      // Add the $emails array to the $contact array
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
