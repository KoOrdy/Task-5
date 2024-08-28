<?php

class Circle{
    private $radius;
    
     function __construct($radius) {
        if($radius>0) {
            $this->radius = $radius;
        }else{
            $this->radius = 0;
        }

    }

    function setRadius($radius){
        if($radius>0) {
            $this->radius = $radius;
        } else {
            $this->radius = 0;
        }
    }

    function getRadius(){
        return $this->radius;
    }
    function getArea(){
        return pi() * pow($this->radius, 2);
    }

    function getCircumference(){
        return 2 * pi() * $this->radius;
    }
}

$Circle = [
    new Circle(5),
    new Circle(10),
    new Circle(-3),
    new Circle(8)
];

foreach ($Circle as $c) {
    echo "Radius: ". $c->getRadius(). "<br>";
    echo "Area: ". $c->getArea() . "<br>";
    echo "Circumference: ". $c->getCircumference() . "<br>";
    echo "<hr>";
}
