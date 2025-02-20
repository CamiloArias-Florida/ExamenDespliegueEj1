<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Factorial;

class FactorialTest extends TestCase 
{
    public function testCalcularFactorial()
    {
        $factorial = new Factorial();
        $this->assertEquals(120, $factorial->calcularFactorial(5));
    }
}