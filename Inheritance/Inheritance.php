<?php

class Person
{
      // class-ni o'zi va uni meros olgan class-larida ishlaydi
      public $hand = 2;

      // meros olgan class ola-olad faqat
      protected $age = 18;
      public function __construct(){
            echo "Person class-dagi constructor ishga tushdi! <br/>";
      }
      // faqat shaxsiy class uchun ishlatsa bo'ladi meros olgan class-da ham ishlamaydi
      private $unversetet = 'TATU';



      public function walk()
      {
            echo "\nperson class walk metodi!" . "o'qish joyi $this->unversetet";
      }


}


class Student extends Person
{
      public $grour = "Web dasturlash";

      // Bu yerda construct metodi class ichida automatik ishga tushadi
      public function __construct(){
            parent::__construct();
            echo "Student this is construct class metodi start ";
      }

      // Bu metod-ga murojat qilganda ishga tushadi
      public function __invoke(){
            echo "invoke metodi ishga tushdi";
      }

      // Bu metod - ga murojat qilganda -> faqat string - lar bilan ishlashda qul keladi
      public function __toString(){
            return "to String metodi ishga tushdi";
      }

      public function teach()
      {
            echo "talaba yoshi $this->age \n";
      }

}

class Boy extends Person{

}

$Talaba = new Student();

// $Talaba();
// echo $Talaba;
// $Talaba->teach();
// $Talaba->walk();
// echo $Talaba->age;
?>