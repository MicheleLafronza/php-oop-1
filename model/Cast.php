<?php

    require_once __DIR__ . '/Movie.php';

    class Cast {

        public $protagonist;
        public $secondary_actor;

        function __construct($_protagonist, $_secondary_actor){

            $this->protagonist = $_protagonist;
            $this->secondary_actor = $_secondary_actor;

        }

        public function getFullCast(){
            return $this->protagonist . ' , ' . $this->secondary_actor;
        }

    }