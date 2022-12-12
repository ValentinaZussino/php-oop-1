<?php
include_once __DIR__ . '/Models/movie.php';
// verifico funzionamenti
// echo ('ciao');
// $prova = new Movie();
// $prova->title = "titolo di prova";
// var_dump($prova);

// stampa film
$terminator = new Movie("Terminator", "1984", ["action", "fantasy", "thriller"], "James Cameron");
$terminator2 = new Movie("Terminator 2: Judgment Day", "1991", ["action", "fantasy", "thriller"], "James Cameron");

var_dump($terminator);
var_dump($terminator2);

?>