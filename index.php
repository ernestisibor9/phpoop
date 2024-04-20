<?php 
    class Fruits{

        // Properties
        public $name;
        public $color;

        // Methods
        public function set_name($name){
            $this->name = $name;
        }
        public function get_name(){
            return $this->name;
        }
    }

    // Create a new Fruits object
    $banana = new Fruits();
    $banana->set_name("Banana");

    $apple  = new Fruits();
    $apple->set_name("Apple");

    echo $banana->get_name();




