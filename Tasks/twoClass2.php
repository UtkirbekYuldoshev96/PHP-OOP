<?php

class Monitor{
      private $brand;
      private $model;
      private $sizeInches;

      public function __construct($brand, $model, $sizeInches){
            $this->brand = $brand;
            $this->model = $model;
            $this->sizeInches = $sizeInches;
      }

      public function displayMesseg($message){
            echo "";
      }
}

class VedioCarta{

}

?>