<?php 

class Movie {

    private $title;
    private $language;
    private $year;
    private $director;

    public function __construct($_title,$_year,$_director )
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->director = $_director;
    }

    

}
$movies = [];

    $theLOTR = new Movie("The Lord of The Rings", "J.R.R. Tolkien", 2001);


    $goodFellas = new Movie("Goodfellas", "Martin Scorsese", 1990);


    $pulpFiction = new Movie("Pulp Fiction", "Quentin Tarantino", 1994);

    array_push($movies,$goodFellas,$pulpFiction,$theLOTR);

    var_dump($movies);