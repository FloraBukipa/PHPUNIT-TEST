<?php
namespace PHPUnit\Framework;
require("vendor/autoload.php");

  class Calculator {
      public function add($a, $b) {
          return $a + $b;
      }
  
  }
  $calculator = new Calculator();

echo $calculator->add(5,2);
echo "<hr/>";




use PHPUnit\Framework\TestCase;

  class CalculatorTest extends TestCase {
	  
	  
      public function testAdd() {
          $calculator = new Calculator();
          echo $this->assertEquals(4, $calculator->add(2, 2));
          $this->assertEquals(0, $calculator->add(-1, 1));
      }
	  
	  
  }
  


  
  




  
  
  
?>