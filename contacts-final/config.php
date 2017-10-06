<?php
  /* Site path constants */
  define("SITE_ROOT", __DIR__);
  define("SITE_URL", "/mtm6331/week6/contacts-final");

  /* Load the Twig Library */
  require_once SITE_ROOT.'/vendor/autoload.php';

  /* Configure Twig */
  $loader = new Twig_Loader_Filesystem(SITE_ROOT.'/templates');
  $twig = new Twig_Environment($loader, array(
    'cache' => SITE_ROOT.'/cache',
    'auto_reload' => true
  ));

  // Set absolute URL to site to a Twig Global Variable
  $twig->addGlobal("SITE_URL", SITE_URL);

  // Get contact data from JSON File
  // Retrieve file content using file_get_contents
  // file_get_contents returns a string
  $json = file_get_contents(SITE_ROOT."/data/contacts.json");
  // convert json string to array
  // json_decode take two parameters: json string, boolean
  // Boolean == true, return array, false return an object
  $contacts = json_decode($json, true);
