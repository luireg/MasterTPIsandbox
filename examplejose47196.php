<?php
$juices = array("apple", "orange", "koolaid1" => "purple");

class people {
    public $john = "John Smith";
    public $jane = "Jane Smith";
    public $robert = "Robert Paulsen";
    public $smith = "Smith";
	public $steve = "Steve";
}
$people = new people();

echo strftime("%A %e %G");

echo "El $people->john drunk a glass of juice $juices[0].".PHP_EOL;


// Mostrar la frase anterior en ingl�s

// a�adir la fecha al texto con formato largo viernes, 2 de noviembre de 2011

// arreglar la siguiente sentencia.

echo 'The bitten $juices[0] is the symbol of Apple $people->steve';

?>
