<?php
include("Libro.php");

function crearLibro($titulo, $autores, $ISBN, $tipo, $numeroPaginas)
{
    return new Libro($titulo, $autores, $ISBN, $tipo, $numeroPaginas);
}
function setNumeroPaginas($numeroPaginas)
{
    $this->numeroPaginas = $numeroPaginas;
}
function buscarLibro($titulo, $autores, $ISBN, $tipo)
{
    foreach ($libros as $libro) {
        if ($libro->getTitulo() === $titulo && $libro->getAutores() === $autores && $libro->getISBN() === $ISBN && $libro->getTipo() === $tipo) {
            return $libro;
        } else {
            return "No encontrado";
        }

    }
    function librosGrandes($libros, $numeroPaginas)
    {
        foreach ($libros as $libro) {
            if ($libro->getNumeroPaginas() > 500) {
                return "Aqui tienes libros seleccionados: " . $libro->getTitulo() . " ";
            } else {
                return "No hay libros grandes.";
            }
        }
    }
    function borrarLibro(Libro $libro)
    {
        $key = array_filter($this->libros, true);
        if ($key !== false) {
            unset($this->libros[$key]);
        }
    }

    $libros = [
        $libro = new Libro("ALAS DE HIERRO", "REBECCA YARROS", 9788408284550, "Ciencia-ficción", 896),
        $libro = new Libro("NOVIA", "ALI HAZELWOOD", 9788419988140, "Ficción", 432),
        $libro = new Libro("GOLPE DE GRACIA", "DENNIS LEHANE", 9788419456359, "Novela", 352)
    ];
}

