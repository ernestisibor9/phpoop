<?php 
    class Food{
        public $name;
        public $color;

        public function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;
        }
    }

    $apple = new Food("Apple", "green");
    echo $apple->name .PHP_EOL;
    echo $apple->color .PHP_EOL;

    $banana = new Food("Banana", "yellow");
    echo $banana->name .PHP_EOL;
    echo $banana->color .PHP_EOL;