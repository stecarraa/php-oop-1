<?php 

class Movie {

    private $title;
    private $language;
    private $year;
    private $director;

    private $poster;

    public function __construct($_title,$_year,$_director,$_poster)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->director = $_director;
        $this->poster = $_poster;
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
    public function getPoster() {
        return $this->poster;
    }

    

}
$movies = [];

    $theLOTR = new Movie("The Lord of The Rings", "J.R.R. Tolkien", 2001,'https://www.ucicinemas.it/media/movie/l/2021/lotr-la-compagnia-dellanello_3Mp1iXM.jpg');


    $goodFellas = new Movie("Goodfellas", "Martin Scorsese", 1990,'https://m.media-amazon.com/images/I/81NuuGhiNmL._SL1500_.jpg');


    $pulpFiction = new Movie("Pulp Fiction", "Quentin Tarantino", 1994,'https://mr.comingsoon.it/imgdb/locandine/big/1182.jpg');

    array_push($movies,$goodFellas,$pulpFiction,$theLOTR);





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php-oop</title>
</head>
<body>
<main class="container">
        <div class="row">
            <?php

            foreach ($movies as $movie) {
                echo '<div class="box">';
                echo "<img src='" . $movie->getPoster() . "'>";
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