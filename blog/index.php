<?php

require_once "config.php";

/**
* NOTE: PDO Object is store in $pdo
*/

/**
* 1. Add a "title" index to the $page array with the value of the page title
*/
$page = [];

/**
* 2. Create a SQL query to SELECT the FIVE most recent PUBLISHED post ORDER BY date
*/


/**
* 3. Send the SQL query to the Database using the PDO Object
*/


/**
* 4. Fetch all the results returned from the Database.
* Return an associative array
*/


/**
* 5. Load the twig template for displaying the list of posts
*/
$template = $twig->load('list.html.twig');

/**
* 6. Render the template with the posts returned from the database and the $page array.
*/
echo $template->render([]);
