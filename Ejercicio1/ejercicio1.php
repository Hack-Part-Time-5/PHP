<?php

// Crear una clase Persona que tenga propiedades públicas (nombre,
// apellido y edad). Crear 2 personas, Julia y Mario. Imprimir su información

class Person{
       public $name="";
       public $surname="";
       public $age=0;

       public function __construct($name, $surname,$age){
              $this->name=$name;
              $this->surname=$surname;
              $this->age=$age;
       }

       public function getName(){
              return $this ->name;       
       } 

       public function getSurname(){
              return $this ->surname;     
       } 
      
       public function getAge(){
              return $this ->age;        
       }
    
}

$persona= new Person('Julia', 'Martínez',24);

$persona2= new Person('Mario', 'Pérez',52);

echo "Se llama: " . $persona->getName() . " Apellido:" . $persona->getSurname(). " Edad:" . $persona->getAge()."\n\n";
echo "Se llama: " . $persona2->getName() . " Apellido:" . $persona2->getSurname(). " Edad:" . $persona2->getAge()."\n\n";

