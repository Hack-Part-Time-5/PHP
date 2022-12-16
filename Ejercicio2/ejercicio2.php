<?php

// Modifico la visibilidad de las propiedades en la clase Persona,
//cambiandolas a private. Imprimimos sin error(mapeamos).

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

       public function getSurname(){
              return $this ->surname;     
       } 
       public function setSurname ($surname){
              $this->surname=$surname;

       }            
       public function setAge ($age){
           
        $this->age=$age;

       }  
       public function getAge(){
              return $this ->age;        
       }
    
}

$persona= new Person('Julia', 'Martínez',24);

$persona2= new Person('Mario', 'Pérez',52);

echo "Se llama: " . $persona->getName() . " Apellido:" . $persona->getSurname(). " Edad:" . $persona->getAge()."\n\n";
echo "Se llama: " . $persona2->getName() . " Apellido:" . $persona2->getSurname(). " Edad:" . $persona2->getAge()."\n\n";

