<?php
$censored_paragraph = str_replace(strtolower($_POST["bad-word"]), "***", strtolower($_POST['paragraph']));
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-badwords</title>
</head>
<body>
  <h1> Parola da censusare: </h1>
  <h2> <?php echo $_POST["bad-word"]; ?> </h2>
  <h1> Testo NON censurato: </h1>
  <h2> <?php echo $_POST['paragraph']; ?> </h2>
  <h1> Testo CENSURATO: </h1>
  <h3> <?= $censored_paragraph ?></h3>
</body>
</html>