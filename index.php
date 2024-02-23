<?php 

class Movie {
    public $title;
    public $description;
    public $release_year;

    function __construct($title, $description, $release_year) {
        $this->title = $title;
        $this->description = $description;
        $this->release_year = $release_year;
    }

    public function getMovieInfo() {
        return {
            $this -> title,
            $this -> description,
            $this -> release_year
        }
    }

}

$plot_inception = 'Dom Cobb possiede una qualifica speciale: è in grado di inserirsi nei sogni altrui per prelevare i segreti nascosti nel più profondo del subconscio. Viene contattato da Saito, un potentissimo industriale giapponese.'
$plot_ind_day = 'La Terra viene invasa da astronavi aliene che stazionano nei cieli delle principali città. Uno scienziato scopre che i velivoli si stanno coordinando per un attacco che ha come obiettivo l\'estinzione del genere umano.'


$inception= new Movie('Inception', $plot_inception, '2010')
$independence_day= new Movie('Independence Day', $plot_ind_day, '1996')

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>