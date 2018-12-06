#!/Applications/MAMP/bin/php/php7.0.32/bin/php
<?php
/* This script will:
• Output the numbers from 1 to 100;
• Where the number is divisible by three (3) output the word “foo”;
• Where the number is divisible by five (5) output the word “bar”;
• Where the number is divisible by three (3) and (5) output the word “foobar”;
• Only be a single PHP file. */

function process_numbers() {
  $numbers = range(1, 100);
  foreach ($numbers as $number) {
    if ($number == $numbers[count($numbers) - 1])
      echo processed_output($number), "\n";
    else
      echo processed_output($number), ', ';
  }
}

function processed_output($number) {
  if ($number % 3 == 0 && $number % 5 == 0)
    return "foobar";
  elseif ($number % 3 == 0)
    return "foo";
  elseif ($number % 5 == 0)
    return "bar";
  else
    return "{$number}";
}

process_numbers()
?>