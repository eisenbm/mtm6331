<?php
  require_once "config.php";

  // If the form has been submitted.
  if (isset($_POST['add_contact'])) {
    // add to contacts array
    array_push($contacts, $form);

    // encode to json
    $json = json_encode($contacts, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

    // save back to contacts.json file
    file_put_contents(SITE_ROOT."/data/contacts.json", $json);

    // redirect back to index.php
    header("Location: ".SITE_URL);

  // If adding a new contact
  } else {
    $template = $twig->load('form.html.twig');
    echo $template->render([]);
  }
