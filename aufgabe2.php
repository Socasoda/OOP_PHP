<?php
// simple class with get and set methods 
class Person {
    private $name;
    private $age;
 
    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setAge($age){
        $this->age = $age;
    }
}

// get and set methods to get access to the, now private, properties 
$person = new Person;
$person->setName('Peter');
$person->setAge(38);

// like in Aufgabe1 but the get and set methods is set behind the arrow instead of the constructor variables 
echo "Name: ".$person->getName().", Alter: ".$person->getAge();
?>


