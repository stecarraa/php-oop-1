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

    public function getTitle() {
        return $this->title;
    }
    public function getYear() {
        return $this->year;
    }
    public function getDirector() {
        return $this->director;
    }

    

}
$movies = [];

    $theLOTR = new Movie("The Lord of The Rings", "J.R.R. Tolkien", 2001);


    $goodFellas = new Movie("Goodfellas", "Martin Scorsese", 1990);


    $pulpFiction = new Movie("Pulp Fiction", "Quentin Tarantino", 1994);

    array_push($movies,$goodFellas,$pulpFiction,$theLOTR);

    var_dump($movies);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop</title>
</head>
<body>
<main class="container">
        <div class="row">
            <?php

            foreach ($movies as $movie) {
                echo '<div class="box">';
                echo "<h2>" .$movie->getTitle(). "</h2>";
                echo "<div class='text'>" . $movie->getYear() . "</div>";
                echo "<div class='text'>" . $movie->getDirector() . "</div>";
                echo "</div>";
            }

            ?>

        </div>

    </main>
</body>
</html>