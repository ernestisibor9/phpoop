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

        public function set_color($color){
            $this->color = $color;
        }
        public function get_color(){
            return $this->color;
        }
    }

    // Create a new Fruits object
    $banana = new Fruits();
    $banana->set_name("Banana");

    $apple  = new Fruits();
    $apple->set_name("Apple");

    echo $banana->get_name();
    echo PHP_EOL;

    $red = new Fruits();
    $red->set_color("Red");
    echo $red->get_color();




