<?php 
require_once __DIR__ . '/Actor.php';
require_once __DIR__ . '/Director.php';

class Movie {
    public $title;
    public $description;
    public $release_year;

    public function __construct($title, $description, $release_year, Director $director, Actor $actor1, Actor $actor2, Actor $actor3) {
        $this->title = $title;
        $this->description = $description;
        $this->release_year = $release_year;
        $this->director = $director;
        $this->actor1 = $actor1;
        $this->actor2 = $actor2;
        $this->actor3 = $actor3;
    }

    public function getMovieInfo($data) {   
        if($data === 'title') return $this -> title;
        if($data === 'description') return $this -> description;
        if($data === 'release_year') return $this -> release_year;
    }

    public function getCast(){
        return $actors = [
            'actor1' => $this->actor1,
            'actor2' => $this->actor2,
            'actor3' => $this->actor3
        ];
    }
}

?>
