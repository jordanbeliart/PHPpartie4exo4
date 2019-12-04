<?php
$name = 'Bouchard';
$firstname = 'Gérard';
$age = 45;
function hello($name, $firstname, $age){
  return 'Bonjour ' . $firstname . ' ' . $name . ', tu as ' . $age . ' ans';
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP partie4 exo4</title>
  </head>
  <body>
    <p><?php echo hello($name, $firstname, $age); ?></p>
  </body>
</html>
