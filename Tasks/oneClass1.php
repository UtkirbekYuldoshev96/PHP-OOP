<?php

class Keyboard
{
      private $brand;
      private $model;

      // Konstruktur
      public function __construct($brand, $model)
      {
            $this->brand = $brand;
            $this->model = $model;
      }

      // Metodlar
      public function pressKey($key)
      {
            echo "Klaviatura " . $this->brand . " " . $this->model . " chop tugmasi bosdi. " . PHP_EOL;
      }

      public function typeText($text)
      {
            echo "Klaviatura " . $this->brand . " " . $this->model . " o'ng tugmasi bosdi. " . PHP_EOL;
      }
}

class Mouse
{

      private $brand;
      private $model;

      // Konstruktor
      public function __construct($brand, $model){
            $this->brand = $brand;
            $this->model = $model;
      }

      // Metodlar
      public function clickLeftButton(){
            echo "Sichqoncha ". $this->brand . " " . $this->model . " chap tugmasini bosdi. <br/>". PHP_EOL;
      }

      public function clickRightButton(){
            echo "Sichqoncha ". $this->brand . " " . $this->model . " o'ng tugmasini bosdi. <br/>". PHP_EOL;
      }
}


// Klaviatura va sichqoncha obyektlarini yaratish
$keyboard = new Keyboard("Logitech" , "K780");
$mouse = new Mouse("Logitech", "MX Master 3");

// Bog'lovchi metodlarni chaqirish
$keyboard->pressKey('A');
$keyboard->typeText("Assalomu allaykum");

$mouse->clickLeftButton();
$mouse->clickRightButton();

?>