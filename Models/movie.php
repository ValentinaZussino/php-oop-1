<?php

class Movie {
    // variabili
    public $title;
    public $genres;
    public $length;
    public $year;
    public $director;

    // constructor
    function __construct(string $_title, string $_year, array $_genres, string $_director){
        $this->title = $_title;
        $this->genres = $_genres;
        $this->year = $_year;
        $this->director = $_director;
    }
}


?>