<?php

namespace AppBundle\Service;

class FizzBuzz
{
  function fizzBuzz() : array
  {
      $result = array();
      foreach(range(1, 20) as $number) {
        $by3 = $number % 3;
        $by5 = $number % 5;

        if (!$by3 && !$by5) {$result[] = "Number: ".$number." = FizzBuzz";}
        elseif (!$by3) {$result[] = "Number: ".$number." = Fizz";}
        elseif (!$by5) {$result[] = "Number: ".$number." = Buzz";}
        else {$result[] = "Number: ".$number." = ".$number;}
    }
    return $result;
  }
}
