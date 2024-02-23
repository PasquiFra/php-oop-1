<?php 

class Movie {
    public $title;
    public $description;
    public $release_year;

    public function __construct($title, $description, $release_year, Director $director) {
        $this->title = $title;
        $this->description = $description;
        $this->release_year = $release_year;
        $this->director = $director;
    }

    public function getMovieInfo($data) {   
        if($data === 'title') return $this -> title;
        if($data === 'description') return $this -> description;
        if($data === 'release_year') return $this -> release_year;
    }
}

class Director {
    public $first_name;
    public $last_name;

    public function __construct($first_name, $last_name){
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function getFullName(){
        return $this->first_name . ' ' . $this->last_name;
    }
}


$plot_inception = 'Dom Cobb possiede una qualifica speciale: è in grado di inserirsi nei sogni altrui per prelevare i segreti nascosti nel più profondo del subconscio. Viene contattato da Saito, un potentissimo industriale giapponese.';
$plot_ind_day = 'La Terra viene invasa da astronavi aliene che stazionano nei cieli delle principali città. Uno scienziato scopre che i velivoli si stanno coordinando per un attacco che ha come obiettivo l\'estinzione del genere umano.';

$director_1= new Director ('Christopher', 'Nolan');
$director_2= new Director ('Roland', 'Emmerich');

$inception= new Movie('Inception', $plot_inception, '2010', $director_1);
$independence_day= new Movie('Independence Day', $plot_ind_day, '1996', $director_2);

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
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </main>
</body>
</html>