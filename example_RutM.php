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



echo "$people->john drank $juices[0] juice.".PHP_EOL;


// Mostrar la frase anterior en inglés

// añadir la fecha al texto con formato largo viernes, 2 de noviembre de 2011

// arreglar la siguiente sentencia.

echo "A $juices[0] bitten is the logo of the company of $people->steve.";

?>
