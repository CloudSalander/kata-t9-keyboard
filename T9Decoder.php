<?php
class T9Decoder {

	private const CHAR_MAP = ['2' => 'A', '22' => 'B','222' => 'C',
							  '3' => 'D', '33' => 'E', '333' => 'F',
							  '4' => 'G', '44' => 'H', '444' => 'I',
							  '5' => 'J', '55' => 'K', '555' => 'L',
							  '6' => 'M', '66' => 'N', '666' => 'O',
							  '7' => 'P', '77' => 'Q', '777' => 'R',  '7777' => 'S',
							  '8' => 'T', '88' => 'U', '888' => 'V',
							  '9' => 'W', '99' => 'X', '999' => 'Y', '9999' => 'Z',
							  '0' => ' '
							 ];

	public function decode(string $text): string {
		$text_to_decode = explode('-',$text);
		$decoded_text = "";
		foreach ($text_to_decode as $char) {
		 	$decoded_text .= T9Decoder::CHAR_MAP[$char];
		 } 
		 return $decoded_text;
	}
}
?>