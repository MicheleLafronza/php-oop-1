<?php

    require_once __DIR__ . '/Movie.php';

    class Cast {

        public $primary_actors = [];
        public $secondary_actors = [];

        function __construct(array $_primary_actors, array $_secondary_actors){

            $this->primary_actors = $_primary_actors;
            $this->secondary_actors = $_secondary_actors;

        }

        // funzione che stampa attori principali
        public function printPrimaryActors(){

            $primary_list = '';

            foreach($this->primary_actors as $p_actor){

                $primary_list .= "<li>$p_actor</li>";

            }

            echo  $primary_list;

        }

        // funzione che stampa attori secondari
        public function printSecondaryActors(){

            $secondary_list = '';

            foreach($this->secondary_actors as $s_actor){

                $secondary_list .= "<li>$s_actor</li>";

            }

            echo  $secondary_list;

        }

        

    }