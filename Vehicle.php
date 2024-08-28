<?php

 class Vehicle{
    private $brand;
    private $model;
    private $year;

    function __construct($brand, $model, $year){
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    function info(){
        return "Brand: $this->brand, Model: $this->model, Year: $this->year";
    }

 }
 
 $vehicle = [
    new Vehicle("Toyota", "Camry", 2018),
    new Vehicle("Honda", "Civic", 2015),
    new Vehicle("Ford", "Mustang", 2020),
    new Vehicle("BMW", "340i", 2022)
 ];

 foreach($vehicle as $v){
    echo $v->info() . "<br>";
 }