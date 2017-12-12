<?php
  require_once "config.php";

  $template = $twig->load('index.html.twig');
  echo $template->render(["contacts" => $contacts]);
