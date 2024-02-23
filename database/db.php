<?php 

require_once __DIR__ . '/../Models/Movie.php';
require_once __DIR__ . '/../Models/Actor.php';
require_once __DIR__ . '/../Models/Director.php';

// Plots
$plot_inception = 'Dom Cobb possiede una qualifica speciale: è in grado di inserirsi nei sogni altrui per prelevare i segreti nascosti nel più profondo del subconscio. Viene contattato da Saito, un potentissimo industriale giapponese.';
$plot_ind_day = 'La Terra viene invasa da astronavi aliene che stazionano nei cieli delle principali città. Uno scienziato scopre che i velivoli si stanno coordinando per un attacco che ha come obiettivo l\'estinzione del genere umano.';

// Directors
$chris_nolan= new Director ('Christopher', 'Nolan');
$rol_emm= new Director ('Roland', 'Emmerich');

// Actors
$will_smith= new Actor ('Will', 'Smith');
$bill_pullm= new Actor ('Bill', 'Pullman');
$jeff_gold= new Actor ('Jeff', 'Goldblum');
$leo_dicap= new Actor ('Leonardo', 'DiCaprio');
$jos_gordon= new Actor ('Joseph', 'Gordon-Levitt');
$cill_murphy= new Actor ('Cillian', 'Murphy');

// Movies
$inception= new Movie('Inception', $plot_inception, '2010', $chris_nolan, $leo_dicap, $jos_gordon, $cill_murphy);
$independence_day= new Movie('Independence Day', $plot_ind_day, '1996', $rol_emm, $will_smith, $bill_pullm, $jeff_gold);

?>