<?php





$fp = fopen("https://streaming1.locucionar.com/proxy/estilo995?mp=/stream", "r");


$fecha = date("d-m-Y");


$fp2 = fopen("streaming/estilo995-".$fecha.".mp3", "w");

while (!feof($fp)) {

$buffer = fread($fp, 1024);

fwrite($fp2, $buffer);

}

fclose($fp);

fclose($fp2);



?>

