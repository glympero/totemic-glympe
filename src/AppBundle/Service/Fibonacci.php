<?php

namespace AppBundle\Service;

class Fibonacci
{
  function fibonacci($number) : array
  {
    $result = array();

    for ($i = 0; $i < $number; $i++){
      $result[] = $this->getFibonacciNumbers($i);
    }
    return $result;
  }

  private function getFibonacciNumbers($number) : int
  {
      if ($number == 0) {
          return 0;
      }
      if ($number == 1) {
          return 1;
      }
      return $this->getFibonacciNumbers($number - 1) + $this->getFibonacciNumbers($number - 2);
  }
}
