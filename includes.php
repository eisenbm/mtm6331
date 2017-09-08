<?php $title = "PHP Includes"; ?>
<?php require_once "includes/header.php"; ?>
  <body>
    <?php require "includes/nav.html"; ?>
    <header>
      <h1><?php echo $title; ?></h1>
    </header>
    <main>
      <section>
        <?php include "includes/list.php"; ?>
      </section>

      <section>
        <?php include "includes/list.php" ?>
      </section>
    </main>
    <footer>
      <?php require "includes/nav.html"; ?>
    </footer>
  </body>
</html>
