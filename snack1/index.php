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
    <title>Snack 1</title>
</head>
<body>

<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. -->

<?php 
    $partite = [
        [
            "casa" => "Juventus",
            "ospite" => "Roma",
            "pt-casa" => 4,
            "pt-ospite" => 3,
        ],
        [
            "casa" => "Inter",
            "ospite" => "Milan",
            "pt-casa" => 3,
            "pt-ospite" => 2,
        ],
        [
            "casa" => "Fiorentina",
            "ospite" => "Atalanta",
            "pt-casa" => 3,
            "pt-ospite" => 0,
        ],
        [
            "casa" => "Torino",
            "ospite" => "Napoli",
            "pt-casa" => 1,
            "pt-ospite" => 1,
        ],
    ]
?>


<ul>
    <h1>Risultati di oggi:</h1>
    <?php for ($i = 0; $i < count($partite); $i++) {
      $partita = $partite[$i];
    ?>
      <li>
        <p>Partita N° <?php echo $i+1?>:
          <?php echo $partita["casa"]; ?> - 
          <?php echo $partita["ospite"]; ?> | 
          <?php echo $partita["pt-casa"]; ?> -
          <?php echo $partita["pt-ospite"]; ?>
        </p>
      </li>
    <?php } ?>
</ul>
    
</body>
</html>