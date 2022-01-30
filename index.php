<?php

require_once __DIR__ . '/classes/Movie.php';

$movies = [
    new Movie("Spider-Man: No Way Home", "Jon Watts", "	Kevin Feige & Amy Pascal", "fantasy", 148, "Sony Pictures", 200),
    new Movie("Nightmare Alley", "Guillermo del Toro", "J. Miles Dale & Guillermo del Toro", " thriller psicologico", 150, "Walt Disney Studios", 60)
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies list</title>
</head>
<body>
    <h1>Film al cinema</h1>
    <?php foreach($movies as $movie) { ?>

        <h3><?php echo $movie->title ?></h3>
        <ul>
            <li>Direttore: <?php  echo "<strong>{$movie->director}</strong>" ?></li>
            <li>Produttore: <?php  echo "<strong>{$movie->producer}</strong>" ?></li>
            <li>Genere: <?php  echo "<strong>{$movie->genre}</strong>" ?></li>
            <li>Durata: <?php  echo "<strong>{$movie->runningTime}min</strong>" ?></li>
            <li>Distributore: <?php  echo "<strong>{$movie->distributor}</strong>" ?></li>
            <li>Budjet: <?php  echo "<strong>{$movie->budjet} millioni</strong>" ?></li>
        </ul>

    <?php } ?>


</body>
</html>
