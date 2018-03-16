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



echo "$people->john drank a juice of $juices[0].".PHP_EOL;

echo strftime ("%A, %e of %B of %G")\n;

// Mostrar la frase anterior en inglés

// añadir la fecha al texto con formato largo viernes, 2 de noviembre de 2011

// arreglar la siguiente sentencia.

echo "A bitten $juices[0] is the logo of the company of $people->steve.";

?>
