<?php
  require_once "config.php";

  // If the form has been submitted.
  if (isset($_POST['add_contact'])) {

    // Create query statement to add new contact
    $sql = "INSERT INTO contacts VALUES (
      NULL,
      :name,
      :company,
      :thumbnail,
      :portrait,
      :birthday,
      :street,
      :city,
      :state,
      :zip,
      :email
    )";

    // Send prepared statement to Database
    $stmt = $pdo->prepare($sql);

    // Create an array of values
    $values = [
      ":name" => $_POST['name'],
      ":company" => $_POST['company'],
      ":thumbnail" => $_POST['thumbnail'],
      ":portrait" => $_POST['portrait'],
      ":birthday" => $_POST['birthday'],
      ":street" => $_POST['street'],
      ":city" => $_POST['city'],
      ":state" => $_POST['state'],
      ":zip" => $_POST['zip'],
      ":email" => $_POST['email']
    ];

    // Execute prepared statement with values
    $result = $stmt->execute($values);

    // Check for odbc_error
    check_for_errors($stmt);

    // Get contact_id from database
    $contact_id = $pdo->lastInsertId();

    // Add new phone number to database
    $sql = "INSERT INTO phones VALUES (
      NULL,
      :type,
      :number,
      :contact_id
    )";

    // Send prepare statement to Database
    $stmt = $pdo->prepare($sql);

    // Create an array of values
    $values = [
      ":type" => "work",
      ":number" => $_POST['phone'],
      ":contact_id" => $contact_id
    ];

    // Execute the prepared statement with values
    $result = $stmt->execute($values);

    // Check for errors
    check_for_errors($stmt);

    // redirect to the contact page for new contact
    header("Location: ".SITE_URL."/contact/".add_underscore($_POST['name']));

  // If adding a new contact
  } else {
    $template = $twig->load('form.html.twig');
    echo $template->render([]);
  }
