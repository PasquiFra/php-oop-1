<?php 

class Movie {
    public $title;
    public $description;
    public $release_year;

    public function __construct($title, $description, $release_year) {
        $this->title = $title;
        $this->description = $description;
        $this->release_year = $release_year;
    }

    public function getMovieInfo() {   
        return $this -> title;
    }

}

$plot_inception = 'Dom Cobb possiede una qualifica speciale: è in grado di inserirsi nei sogni altrui per prelevare i segreti nascosti nel più profondo del subconscio. Viene contattato da Saito, un potentissimo industriale giapponese.';
$plot_ind_day = 'La Terra viene invasa da astronavi aliene che stazionano nei cieli delle principali città. Uno scienziato scopre che i velivoli si stanno coordinando per un attacco che ha come obiettivo l\'estinzione del genere umano.';


$inception= new Movie('Inception', $plot_inception, '2010');
$independence_day= new Movie('Independence Day', $plot_ind_day, '1996');

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
                        <h5 class="card-title"><strong>Titolo:</strong>  <?php echo $film->getMovieInfo() ?></h5>
                        <p class="card-text"><strong>Trama:</strong> <?php echo $film->description ?></p>
                        <address><strong>Anno di uscita:</strong> <?php  echo $film->release_year ?></address>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </main>
</body>
</html>