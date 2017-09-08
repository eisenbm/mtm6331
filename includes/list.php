<?php
    $animals = ["Dog", "Cat", "Mouse", "Duck", "Hippo", "Cow", "Pig"];
?>

<ul>
  <?php for ($i = 0; $i < count($animals); $i++) : ?>
    <li><?php echo $animals[$i]; ?></li>
  <?php endfor; ?>
</ul>
