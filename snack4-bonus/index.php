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
    <title>Snack 4s</title>
</head>
<body>

<!-- ## Snack 4 (Bonus)
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php 
$numbers = [];
while (count($numbers) < 15) {
    $element = rand(1, 100);
    if (!in_array($element, $numbers)) {
        $numbers[] = $element;
    }
}
?>

<p>I numeri generati casualmente sono: <?php echo join(", ",$numbers); ?> </p>

    
</body>
</html>