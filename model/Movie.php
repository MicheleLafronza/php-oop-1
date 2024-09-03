<?php

    require_once __DIR__ . '/Cast.php';

    // definiamo la classe
    class Movie {

        // proprietà
        public $title;
        public $lenght;
        public $language;
        public $genres = [];
        public $cast;

        // funzione costrutto
        function __construct($_title, $_language, $_lenght, $_genre, Cast $_cast){

            $this->title = $_title;
            $this->language = $_language;
            $this->lenght = $_lenght;
            $this->genres = $_genre;
            $this->cast = $_cast;

        }

        // funzione che stampa solo il titolo
        public function printTitle(){

            return $this->title;

        }

        // funzione che stampa lingua
        public function printLang(){

            return $this->language;
        }

        // funzione che stampa durata
        public function printLen(){

            return $this->lenght;

        }

        // funzione che aggiunge generi
        public function addGenres($_genre){

            $this->genres[] = $_genre;

        }

        // funzione che stampa generi
        public function printGenresList(){

            $genres_list = '';

            foreach($genres_list as $genre){

                $genres_list .= "<li>$genre</li>";

            }

            echo $genres_list;

        }

    }