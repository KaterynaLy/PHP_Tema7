<?php

class Libro
{
    private $titulo;
    private $autores;
    private $ISBN;
    private $tipo;  //Aventuras, Ciencia-ficción, Cuento, Novela Policial..
    private $numeroPaginas;

    function __construct($titulo, $autores, $ISBN, $tipo, $numeroPaginas)
    {

        $this->titulo = $titulo;
        $this->autores = $autores;
        $this->ISBN = $ISBN;
        $this->tipo = $tipo;
        $this->numeroPaginas = $numeroPaginas;
    }
    function getTitulo()
    {
        return $this->titulo;
    }

    function getAutores()
    {
        return $this->autores;
    }
    function getISBN()
    {
        return $this->ISBN;
    }
    function getTipo()
    {
        return $this->tipo;
    }
    function getNumeroPaginas()
    {
        return $this->numeroPaginas;
    }
    function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    function setAutores($autores)
    {
        $this->autores = $autores;
    }

    function setISBN($ISBN)
    {
        $this->ISBN = $ISBN;
    }
    function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

}








