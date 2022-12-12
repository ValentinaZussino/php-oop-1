<?php

class Movie {
    // variabili
    private $title;
    private $genres;
    private $length;
    private $year;
    private $director;
    private $details;
    private $description;

    // constructor
    function __construct(string $_title, string $_year, array $_genres, string $_length, string $_director, string $_details = null){
        $this->title = $_title;
        $this->genres = $_genres;
        $this->length = $_length;
        $this->year = $_year;
        $this->director = $_director;
        $this->details = $_details;

        $this->setDescription();
    }
    // funzione x descrizione
    public function setDescription(){
        if($this->details == null){
            return $this->description = 'Al momento non sono presenti ulteriori dettagli';
        } else {
            $this->description = $this->details;
        }
    }
}


?>