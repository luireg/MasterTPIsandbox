<?php
error_reporting(-1);
ini_set("display_errors", 1);
include ("i18nlib.php");
$numTrad=11;
$a = new stdClass();
$a->time = date("H:i:s");
$a->rawTime = time();
$a->amount = 234.56;
$a->user_name="Domingo";
$a->user_surname="Gundisalvo";
?>
<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head><title><?php 
echo getString('pageTitle',$a);
?></title></head>
<body>
<p><a target="_blank" href="/tradadmin">Pulsa aquí para copiar el código PHP desde el GIT al servidor.</a> Hay que hacerlo después de subir los cambios con 'commit+push'.</p>

<table border="1">

<?php
echo "<p>Idiomas disponibles:";
system('locale -a');
echo "</p>";
//var_dump($_GET);
$trad=null;
if (isset($_GET['tradId']))
	$trad = $_GET['tradId'];//filter_input(INPUT_GET, ‘tradId’, FILTER_SANITIZE_STRING);
//var_dump($trad);
if ($trad==null)
{
	echo '<form action="testApp.php" method="GET">Número de traductor:<input type="text" name="tradId"><input type="SUBMIT"></form>';
}
else 
if ($trad=='ALL')
{
for ($i = 0; $i < $numTrad+1; $i++) 
{
	echo_trad_section($i,$a);
}
}
else
{
	echo_trad_section(0, $a);
	echo_trad_section($trad, $a);
}
function echo_trad_section($i,&$a)
{
	include ("lang.php");
	
	echo '<tr><td>';
	if ($i==0)
	{
	$loc=  "esp_ESP";
	$loc= "es_ES.utf8";
	}
//	else
//	if ($i==2)
//	{
//	$loc= "fra_FRA";
//	$loc= "fr_FR.utf8";
//	}
	else
	{
	$loc= "eng_UK";
	$loc= "en_GB.utf8";
	}

setlocale(LC_ALL, $loc);
echo "<p>Locale: $loc";
$tradid="trad".$i;
$a->numTrad=$i;
//$a->lang=locale
echo 	'<IMG WIDTH="100" src="'.getString("Head_".$tradid."FlagURL",$a).'" align="LEFT"/>';
echo	"<p>".getString("Head_".$tradid."Credits", $a);
//echo	"<H1>".getString($tradid."Greeting",$a)."</H1>";
//echo	"<p>".getString($tradid."FormatDate",$a)."</p>";
//echo	"<p>".getString($tradid."NumString",$a)."</p>";
//echo    "<p>".getString($tradid."Message",$a)."</p>";
//var_dump($string);
foreach ($string as $key => $value) {
	//echo "<p>$key=".strpos($key, $tradid);
	if (strpos($key, $tradid)===0)
	{
		echo    "<p>".getString($key,$a)."</p>";
	}
}

echo '</td></tr>';
}
?>
</table>
</body>
</html>
