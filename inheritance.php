<?php 
    class School{
        public $name;
        protected $staff;
        public $student;

        public function __construct($name, $staff, $student){
            $this->name = $name;
            $this->staff = $staff;
            $this->student = $student;
        }

        public function mySchool(){
            echo "The name of my School is: " . $this->name;
        }
    }
    // $sch = new School("EMHS", "Ledney", "King");
    // $sch->mySchool();

    class Teacher extends School{
        public function nameOfTeacher(){
            echo "The name of my Teacher is: " . $this->staff;
        }
        public function mySchool(){
            echo "The name of the Student is: " . $this->student;
        }
    }

    $teacher = new Teacher("Eric Moore High School", "John Doe", "Peter");
    $teacher->nameOfTeacher();
    echo PHP_EOL;
    $teacher->mySchool() .PHP_EOL;