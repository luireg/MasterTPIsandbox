<?php
function getString($identifier,&$a)
{
include ("lang.php");
$value=$string[$identifier];
if (!$value)
{
	return "[$identifier]";
}
//echo " $identifier = $value ";
	// sustituye las variables $a en la cadena
$code='$resultString= sprintf("'.$value.'");';
//echo $code;
eval($code);
//echo $resultString;
return $resultString;	
}