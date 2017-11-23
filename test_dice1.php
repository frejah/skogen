<?php
require "config.php";
?>

<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tärning</title>
    <h1>En tärning</h1>


<p>Tärningen kastas 6 gånger, här är resultatet.</p>

<?php
//To save the outcome of each dice roll
$rolls = [];

//Roll the dice
$times = 6;
for ($i = 0; $i <$times; $i++) {
    $rolls[] = rand(1, 6);
}

//Print out the results
$html = "<ul>";
foreach ($rolls as $val) {
    $html .= "<li>{$val}</li>";
}
$html .= "</ul>";
?>

<?= $html ?>

