<?php
 
class Student{
    private $name;
    private $age;
    private $grade;
    
    function __construct($name, $age, $grade) {
        $this->name = $name;
        if($age>0) {
        $this->age = $age;
        }
        $this->grade = $grade;
    }

    function info(){
        return "Name: ". $this->name. ", Age: ". $this->age. ", Grade: ". $this->grade;
    }
}

$students =[new Student("John Doe", 18, "A"),
new Student("Jane Smith", 16, "B"),
new Student("Michael Johnson", 20, "C")
];

foreach($students as $student){
    echo $student->info(). "<br>";
}
    
