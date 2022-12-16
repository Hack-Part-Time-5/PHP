<?php

require_once "./ejercicio4/person.php";

class Teacher extends Person {

    public $subject='';
    
    public function setSubject($subject) {
        $this->subject = $subject;   
    }   
    public function getSubject() {
        return $this->subject;
    }

    public function __construct($name,$surname,$school,$subject){
     
    parent::__construct($name,$surname,$school);
    
    $this->subject= $subject;

    }

}

$teacher1= new Teacher('Julia', 'Martínez','High School of Denver','Maths');
$teacher2= new Teacher('Pedro', 'Tor','High School of New York','Foreign Language');

echo "Teacher:".$teacher1->getName()." ".$teacher1->getSurname().", ".$teacher1->getSchool().", ".$teacher1->getSubject()."\n";  
echo "Teacher:".$teacher2->getName()." ".$teacher2->getSurname().", ".$teacher2->getSchool().", ".$teacher2->getSubject()."\n";  

echo "We have". " " . Person::getNumPeople() . " " . "teachers"."\n";