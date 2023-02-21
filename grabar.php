<?php


//set time zone
date_default_timezone_set('America/Santiago');

// record a radio stream to a file save on G:\Unidades compartidas\Radio Maira create folder by date put the file in the folder


// set the path to the file

$stream = 'https://streaming1.locucionar.com/proxy/estilo995?mp=/stream';

// set the filename

$filename = 'radio.mp3';

// open the file for writing
$fp = fopen($filename, 'w');

// open the remote stream
$ch = curl_init($stream);

// set curl to write to file
curl_setopt($ch, CURLOPT_FILE, $fp);

// set curl to return the headers
curl_setopt($ch, CURLOPT_HEADER, 0);

// set curl to not timeout
curl_setopt($ch, CURLOPT_TIMEOUT, 0);

// set curl to follow any redirects
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

// set curl to not buffer the output
curl_setopt($ch, CURLOPT_BUFFERSIZE, 128);

// set curl to not return the headers
curl_setopt($ch, CURLOPT_HEADER, 0);

// set curl to not return the body

curl_setopt($ch, CURLOPT_NOBODY, 0);

// execute curl
curl_exec($ch);

// close curl
curl_close($ch);

// close the file

fclose($fp);

// done





?>
