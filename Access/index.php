<?php
// 1. Encapsulation
// 2. Inheritance
// 3. Polymorphism
// 4.Abstraction

class Student{
      // Access modifiers 3 xili bor
      // 1. public -> ochiq xolatda 
      // 2.private
      // 3.protected

      protected $firstName;

      public $name;

      public function test(){
            echo "Sizning ismingiz " . $this->name;
      }

      public function getName(){
            return $this->firstName;
      }

      public function setName($firstName){
            $this->firstName = $firstName;

      }

}

$student = new Student;
// $name = $student->name = "Komil";
// echo $name;

$student->setName('Islom');
echo $student->getName();

?>
