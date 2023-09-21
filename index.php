<?php
include('T9Decoder.php');


$t9_decoder = new T9Decoder();

$text = readline();
while($text != "") {
	echo $t9_decoder->decode($text).PHP_EOL;
	$text = readline();
}

?>