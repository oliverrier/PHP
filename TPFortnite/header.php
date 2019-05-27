<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
        $bdd = new PDO('mysql:host=localhost;dbname=SpawnFortnite;charset=utf8', 'root', 'irohnik');
        $response = $bdd->query('SELECT image FROM spawn');
        $image = $response->fetchAll();
    ?>
    <title>TP Fortnite</title>
</head>
