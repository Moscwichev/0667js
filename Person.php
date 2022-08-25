<?php
class Person
{
  private $name;
  private $lastname;
  private $age;
  private $hp;
  private $mother;
  private $father;

  function __construct($name, $lastname, $age, $mother = null, $father = null)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
    $this->hp = 100;
  }
  function sayHi($name)
  {
    return "Hi $name, I`m " . $this->name;
  }
  function setHp($hp)
  {
    if ($this->hp + $hp >= 100) $this->hp = 100;
    else $this->hp = $this->hp + $hp;
  }
  function getHp()
  {
    return $this->hp;
  }
  function getName()
  {
    return $this->name;
  }
  function getMother()
  {
    return $this->mother;
  }
  function getFather()
  {
    return $this->father;
  }
  function getInfo()
  {
    return "
    <h3>A few words about myself<br></h3>"."My name is ".$this->getName()."."
    ."<br> My parents mom ".$this->getMother()->getName()." and dad ".$this->getFather()->getName()."."
    ."<br> My grandparents ".$this->getMother()->getFather()->getName()
    ." and ".$this->getMother()->getMother()->getName().", these are mom's parents. "
    ."<br> My grandparents ".$this->getFather()->getFather()->getName()
    ." and ".$this->getFather()->getMother()->getName().", these are dad's parents. ";
  }
}

$igor = new Person("Igor", "Petrov", 68);
$lena = new Person("Lena", "Petrov", 65);
$petr = new Person("Petr", "Petrov", 61);
$nina = new Person("Nina", "Petrov", 60);
$alex = new Person("Alex", "Ivanov", 42, $nina, $petr);
$olga = new Person("Olga", "Ivanova", 42, $lena, $igor);
$valera = new Person("Valera", "Ivanov", 15, $olga, $alex);

echo $valera->getInfo();




