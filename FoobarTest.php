<?php
use PHPUnit\Framework\TestCase;
require './foobar.php';

class FoobarTest extends TestCase
{
  public function testSomething() {
    echo "\n\n ******GHG***** \n\n";
    $foobar = new Foobar();
    echo $foobar->get_result(5);


  }

}