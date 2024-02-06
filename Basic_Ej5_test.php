<?php
require 'Basic_Ej5.php';
use PHPUnit\Framework\TestCase;

class Basic_Ej5_test extends TestCase
{
public function test_ej5_test() {
    $nota = 66;
    $result = grado($nota);
    $this->assertEquals('Primera División' , $result);
}
public function test_ej5_test2() {
    $nota =50;
    $result = grado($nota);
    $this->assertEquals('Segunda División', $result);
}
    public function test_ej5_test3() {
    $nota = 40;
    $result = grado($nota);
    $this->assertEquals('Tercera División', $result);
}
public function test_ej5_test4() {
    $nota = 20;
    $result = grado($nota);
    $this->assertEquals('Reprobado', $result);
}
}