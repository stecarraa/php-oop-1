<?php 

class Movie{

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

?>