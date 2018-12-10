<?php
use PHPUnit\Framework\TestCase;
require './foobar.php';

class FoobarTest extends TestCase
{
  public function testGetResult() {
    $foobar = new Foobar();
    $this->assertSame('foo', $foobar->get_result(3));
    $this->assertSame('foo', $foobar->get_result(18));
    $this->assertSame('bar', $foobar->get_result(5));
    $this->assertSame('bar', $foobar->get_result(35));
    $this->assertSame('foobar', $foobar->get_result(15));
    $this->assertSame('foobar', $foobar->get_result(90));
    $this->assertSame('4', $foobar->get_result(4));
    $this->assertSame('16', $foobar->get_result(16));
  }
}