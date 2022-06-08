<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>

<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
    $name = isset($_GET["name"]) ? $_GET["name"] : null;
    $mail = isset($_GET["mail"]) ? $_GET["mail"] : null;
    $age = isset($_GET["age"]) ? $_GET["age"] : null;
    $at = strpos($mail, "@");
    $dot = strpos($mail, ".");
?>

<?php if (strlen($name) > 3 && $at == true && $dot == true && is_numeric($age)) { ?>
    <h1>ACCESSO RIUSCIUTO!</h1>
    <!-- ad es http://localhost/php-snacks-b1/snack2/?name=tizio&mail=tizio@mail.it&age=20 -->
<?php } else { ?>
    <h1>ACCESSO NEGATO</h1>
<?php } ?>
    
</body>
</html>