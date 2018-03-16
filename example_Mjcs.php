<?php
$juices = array("apple", "naranga", "koolaid1" => "purple");

class people {
    public $john = "John Smith";
    public $jane = "Jane Smith";
    public $robert = "Robert Paulsen";
    public $smith = "Smith";
	public $steve = "Steve";
}
$people = new people();



echo " $people->John drank a $juices[0] juice on " . strftime ("%A, %B %G") .PHP_EOL .;


// Mostrar la frase anterior en inglés

// añadir la fecha al texto con formato largo viernes, 2 de noviembre de 2011

// arreglar la siguiente sentencia.

echo "The bitten $juices[0] is the logo of $people->Steve";

?>
