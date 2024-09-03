<?php

require_once __DIR__ . '/../model/Cast.php';
require_once __DIR__ . '/../model/Movie.php';

$movie_db = [
    new Movie('Batman', 'Eng', '2:30', 'Superhero', new Cast('Cristian Bale', 'Michael Keaton'))
];