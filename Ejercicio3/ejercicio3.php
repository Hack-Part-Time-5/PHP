<?php

// Crear una función saludar y la llamo (primero pública y luego privada).

class Person{
       private $name="";
       private $surname="";
       private $age=0;

       public function __construct($name, $surname,$age){
              $this->name=$name;
              $this->surname=$surname;
              $this->age=$age;
       }

       public function getName(){
              return $this ->name;       
       } 
       public function setName ($name){
        $this->name=$name;

       } 
       private function getSurname(){
              return $this ->surname;   

       } 
       public function setSurname ($surname){
              $this->name=$name;

       }            
       public function setAge ($age){
           
        $this->surname=$surname;
       }  

       private function getAge(){
              return $this ->age;        
       }
    
       private function salutation (){
        return "Hi! $this->name How's it going?";
       }

        public function getSalutation (){
        return $this->salutation();
       }
}

$persona= new Person('Julia', 'Martínez',24);

$persona2= new Person('Mario', 'Pérez',52);


echo $persona2->getSalutation();