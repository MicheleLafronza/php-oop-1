<?php

require_once __DIR__ . '/../model/Cast.php';
require_once __DIR__ . '/../model/Movie.php';

$movie_db = [
    new Movie('Interstellar', 'Eng', '2:49', ['Adventure', 'Sci-Fi', 'Drama'], new Cast(['Matthew McConaughey', 'Anne Hathaway'], ['Michael Caine', 'Jessica Chastain'])),
    new Movie('The Godfather', 'Eng', '2:55', ['Crime', 'Drama'], new Cast(['Marlon Brando', 'Al Pacino'], ['James Caan', 'Robert Duvall'])),
    new Movie('Trainspotting', 'Sco', '1:34', ['Crime', 'Drama'], new Cast(['Ewan McGregor', 'Ewen Bremner'], ['Jonny Lee Miller', 'Kevin McKidd'])),
    new Movie('Fight Club', 'Eng', '2:19', ['Drama'], new Cast(['Edward Norton', 'Brad Pitt'], ['Helena Bonham Carter', 'Meat Loaf'])),
    new Movie('Pulp Fiction', 'Eng', '2:34', ['Thriller', 'Crime'], new Cast(['John Travolta', 'Samuel L. Jackson'], ['Uma Thurman', 'Bruce Willis'])),
    new Movie('The Good, the Bad and the Ugly', 'Eng', '2:41', ['Western'], new Cast(['Clint Eastwood', 'Eli Wallach'], ['Lee Van Cleef', 'Aldo Giuffrè']))
];