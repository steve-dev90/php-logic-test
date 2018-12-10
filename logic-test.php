#!/Applications/MAMP/bin/php/php7.0.32/bin/php
<?php
/* This script will:
• Output numbers from 1 to 100
• Where the number is divisible by three (3) output the word “foo”
• Where the number is divisible by five (5) output the word “bar”
• Where the number is divisible by three (3) and (5) output the word “foobar”*/

class LogicTest
{
  public function process_numbers() {
    $numbers = range(1, 100);
    foreach ($numbers as $number) {
      $results[] = $this->processed_output($number);
    }
    $this->output_result($results);
  }

  private function processed_output($number) {
    if ($number % 3 == 0 && $number % 5 == 0) {
      return "foobar";
    }
    if ($number % 3 == 0) {
      return "foo";
    }
    if ($number % 5 == 0) {
      return "bar";
    }
    return "{$number}";
  }

  private function output_result($results) {
    foreach ($results as $result) {

    }
  }
}

$logic_test = new LogicTest();
$logic_test->process_numbers();
