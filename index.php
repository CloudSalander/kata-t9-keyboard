<?php
include('T9Decoder.php');


$t9_decoder = new T9Decoder();

$text = readline();
while($text != "") {
	$t9_decoder->decode($text);
	$text = readline();
}

?>