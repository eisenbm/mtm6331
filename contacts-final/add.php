<?php
  require_once "config.php";

  /**
   * Validates form data
   * @param array $_POST form data
   * @return array Success: santized form data
   * @return array Failure: "failed" == true; "errors" == array of failed inputs
  */
  function validate($form) {
    // $errors array will be used to hold invalid inputs
    $errors = [];

    // Loop over form inputs; $input is input name, $value is input value
    foreach($form as $input => $value) {
      // Look for email inputs
      if (strpos($input, 'email') !== FALSE) {
        // Santize email value
        $form[$input] = filter_var(trim($value), FILTER_SANITIZE_EMAIL);
        // validate email format, if failed add to $errors array.
        if (!filter_var($form[$input], FILTER_VALIDATE_EMAIL)) {
            array_push($errors, $input);
        }
      // Look for phone inputs
    } else if (strpos($input, 'phone') !== FALSE) {
          // strip all non-numbers from phone value
          $form[$input] = preg_replace('/\D/', '', $value);
          // verify that phone value contains 10 or 0 numbers.
          if (strlen($form[$input]) != 10 && strlen($form[$input]) != 0) {
              array_push($errors, $input);
          }
        // All other inputs
      } else {
          // strip any tags and trailing white space from values
          $form[$input] = strip_tags(trim($value));

          // verify that values are not empty
          if (empty($form[$input]) !== FALSE) {
              array_push($errors, $input);
          }
      }
    }

    // If any input failed to valid, $errors will have items
    if (count($errors)) {
      return ['failed' => true , 'errors' => $errors];
    }

    return $form;
  }

  /**
  * Create a primative routing system:
  * Determine which template to display based on the query string
  */

  // If the form has been submitted.
  if (isset($_POST['add_contact'])) {
    // validate form data
    $form = validate($_POST);

    // validation failed: return back to the form.
    if (isset($form['failed'])) {
      $template = $twig->load('form.html.twig');
      echo $template->render(["form" => $_POST, "errors" => $form['errors']]);

    // validate passed: save new contact to json file.
    } else {
      // add to contacts array
      array_push($contacts, $form);

      // encode to json
      $json = json_encode($contacts, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

      // save back to contacts.json file
      file_put_contents(SITE_ROOT."/data/contacts.json", $json);

      // redirect back to index.php
      header("Location: ".SITE_URL);
    }

  // If adding a new contact
  } else {
    $template = $twig->load('form.html.twig');
    echo $template->render([]);
  }
