<?php

require_once "./ejercicio4/person.php";

class Student extends Person {

    protected $age=0;
    protected $grade=0;
    static protected $numPeople=0;
    
    public function setAge($age) {
        $this->subject = $subject;   
    }   
    public function getAge() {
        return $this->age;
    }

    public function setGrade($grade) {
        $this->subject = $grade;   
    }   
    public function getGrade() {
        return $this->grade;
    }

    public function __construct($name,$surname,$school,$grade,$age){
     
        parent::__construct($name,$surname,$school);
        self::$numPeople+=1;
        $this->grade= $grade;
        $this->age= $age;
    }

}

$student1= new Student('Laura', 'Spring','High School of Denver',9,2);
$student2= new Student('Mike', 'Smith','High School of Denver',8,2);
$student3= new Student('Lucia', 'Mas','High School of Denver',9,2);
$student4= new Student('Luke', 'Jen','High School of Denver',9,2);

echo "Student:".$student1->getName()." ".$student1->getSurname().", ".$student1->getSchool().", ".$student1->getAge().", ".$student1->getGrade()."\n";  
echo "Student:".$student2->getName()." ".$student2->getSurname().", ".$student2->getSchool().", ".$student2->getAge().", ".$student2->getGrade()."\n";
echo "We have". " " . Person::getNumPeople() . " " . "students"."\n";