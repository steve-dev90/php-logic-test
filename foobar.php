<?php

/* This script will:
• Output numbers from 1 to 100
• Where the number is divisible by three (3) output the word “foo”
• Where the number is divisible by five (5) output the word “bar”
• Where the number is divisible by three (3) and (5) output the word “foobar”*/

class Foobar
{
  public function process_numbers() {
    $numbers = range(1, 100);
    foreach ($numbers as $number) {
      if ($number == count($numbers)) {
        echo $this->get_result($number) . "\n";
      } else {
        echo $this->get_result($number) . ', ';
      }
    }
  }

  public function get_result($number) {
    if ($number % 3 == 0 && $number % 5 == 0) {
      return 'foobar';
    }
    if ($number % 3 == 0) {
      return 'foo';
    }
    if ($number % 5 == 0) {
      return 'bar';
    }
    return "{$number}";
  }
}

$foobar = new FooBar();
$foobar->process_numbers();
