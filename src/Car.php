<?php

require 'BasicCar.php';
  /**
   * This class is for car.
   * Color and mark is included.
   */
  class Car
  {
    use BasicCar;
    function __construct($color, $door_count)
    {
      $this->color = $color;
      if (is_int($door_count)) {
          $this->door_count = $door_count;
      } else {
          throw new Exception('Wrong input.');
      }
    }

    public function GetColor()
    {
      return $this->color;
    }
  }
