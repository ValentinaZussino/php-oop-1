<?php
include_once __DIR__ . '/Models/movie.php';
// verifico funzionamenti
// echo ('ciao');
// $prova = new Movie();
// $prova->title = "titolo di prova";
// var_dump($prova);

// stampa film
$terminator = new Movie("The Terminator", "1984", ["action", "fantasy", "thriller"], "107 min", "James Cameron");

$terminator2 = new Movie("Terminator 2: Judgment Day", "1991", ["action", "fantasy", "thriller"], "137 min", "James Cameron", "È il sequel di Terminator (1984) e secondo capitolo dell'omonimo franchise. La trama segue Sarah Connor e il figlio di dieci anni John mentre vengono inseguiti da un nuovo Terminator più avanzato, il T-1000.");

$predator = new Movie("Predator", "1987", ["action", "fantasy", "thriller", "horror", "drammatic"], "107 min", "John McTiernan", "");

var_dump($terminator);
var_dump($terminator2);
var_dump($predator);

?>