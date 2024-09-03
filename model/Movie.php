<?php

    require_once __DIR__ . '/Cast.php';

    // definiamo la classe
    class Movie {

        // proprietà
        public $title;
        public $language;
        public $length;
        public $genres = [];
        public $cast;

        // funzione costrutto
        function __construct($_title, $_language, $_length, array $_genres, Cast $_cast){

            $this->title = $_title;
            $this->language = $_language;
            $this->length = $_length;
            $this->genres = $_genres;
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

            return $this->length;

        }

        // funzione che stampa generi
        public function printGenresList(){

            $genres_list = '';

            foreach($this->genres as $genre){

                $genres_list .= "<li>$genre</li>";

            }

            echo $genres_list;

        }

    }