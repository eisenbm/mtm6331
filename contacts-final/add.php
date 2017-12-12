<?php
  require_once "config.php";

  // If the form has been submitted.
  if (isset($_POST['add_contact'])) {

    // Add new contact to the contacts table
    $sql = "INSERT INTO `contacts` VALUES (NULL,:name,:company,:thumbnail,:portrait,:birthday,:street,:city,:state,:zip);";

    $stmt = $pdo->prepare($sql);

    $values = [
      ':name' => $form['name'],
      ':company' => $form['company'],
      ':thumbnail' => $form['thumbnail'],
      ':portrait' => $form['portrait'],
      ':birthday' => $form['birthday'],
      ':street' => $form['street'],
      ':city' => $form['city'],
      ':state' => $form['state'],
      ':zip' => $form['zip'],
      ':email' => $form['email']
    ];

    $result = $stmt->execute($values);

    check_for_errors($stmt);

    // Getting the contact id
    $contact_id = $pdo->lastInsertId();

    // Add new phone number to the phones table
    $sql = "INSERT INTO `phones` (`phone_id`, `phone_type`, `phone_number`, `contact_id`) VALUES (NULL,:type,:number,:contact_id)";

    $stmt = $pdo->prepare($sql);

    $values = [
      ':type' => "work",
      ':number' => $form['phone'],
      ':contact_id' => $contact_id
    ];

    $result = $stmt->execute($values);

    check_for_errors($stmt);

    // redirect back to index.php
    header("Location: ".SITE_URL."/contact/add_underscores(".$form['name'].")");


  // If adding a new contact
  } else {
    $template = $twig->load('form.html.twig');
    echo $template->render([]);
  }
