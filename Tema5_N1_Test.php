<?php
require 'Tema5_N1';
use PHPUnit\Framework\TestCase;

class Tema5_N1Test extends TestCase
{
    function PerroMakeSound()
    {
        $perro = new Perro();
        $this->assertEquals("dice “Bup, bup!”", $perro->MakeSound());
    }
    function GatoMakeSound()
    {
        $gato = new Gato();
        $this->assertEquals("dice “Miau!”", $gato->MakeSound());
    }
}

