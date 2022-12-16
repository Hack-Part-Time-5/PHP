<?php

class Person{
    protected $name="";
    protected $surname="";
    protected $school="";

    static protected $salutation="Hi!";
    static protected $numPeople=0;

    public function __construct($name, $surname,$school){
        $this->name=$name;
        $this->surname=$surname;
        $this->school=$school;
        self::$numPeople+=1;
    }

    static public function getNumPeople(){
        return self::$numPeople;
    }

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        return $this->name=$name;
    }

    public function getSurname(){
        return $this->surname;
    }
    public function setSurname($surname){
        return $this->surname=$surname;
    }

    public function getSchool(){
        return $this->school;
    }
    public function setSchool($school){
        return $this->school=$school;
    }

}


