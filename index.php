<?php 
require __DIR__ . '/database/db.php';

require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Actor.php';
require_once __DIR__ . '/Models/Director.php';



// Array Movies
$films = [$inception, $independence_day];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Movie</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="style\style.css">

</head>
<body>

    <header>
        <h1>Movie PHP</h1>
    </header>

    <main>
        <div class="container">
            <ul class="list-group">
                <?php foreach($films as $film) :?>
                <li class="list-group-item card m-3">
                    <div class="card-body">
                        <h5 class="card-title">
                            <strong>Titolo: </strong><?php echo $film->getMovieInfo('title') ?>
                        </h5>
                        <p class="card-text">
                            <strong>Trama: </strong><?php echo $film->getMovieInfo('description') ?>
                        </p>
                        <address>
                            <strong>Anno di uscita: </strong><?php  echo $film->getMovieInfo('release_year') ?>
                        </address>
                        <div>
                        <strong>Director: </strong> <?php  echo $film->director->getFullName() ?>
                        </div>
                        <div>
                        <strong>Actors: </strong> 
                        <?php foreach($film->getCast() as $actor ) :?>
                            <span><?php echo $actor->getFullName() ?>, </span>
                        <?php endforeach;?>
                        </div>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </main>
</body>
</html>