<?php
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
    <p><?php echo hello('Bouchard', 'Gérard', '47'); ?></p>
  </body>
</html>
