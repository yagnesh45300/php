<?php
// define Morse code alphabet
$morse_alphabet = array(
  "A" => ".-", "B" => "-...", "C" => "-.-.", "D" => "-..", "E" => ".", 
  "F" => "..-.", "G" => "--.", "H" => "....", "I" => "..", "J" => ".---", 
  "K" => "-.-", "L" => ".-..", "M" => "--", "N" => "-.", "O" => "---", 
  "P" => ".--.", "Q" => "--.-", "R" => ".-.", "S" => "...", "T" => "-", 
  "U" => "..-", "V" => "...-", "W" => ".--", "X" => "-..-", "Y" => "-.--", 
  "Z" => "--..", "0" => "-----", "1" => ".----", "2" => "..---", 
  "3" => "...--", "4" => "....-", "5" => ".....", "6" => "-....", 
  "7" => "--...", "8" => "---..", "9" => "----."
);

// define the message to encode
$message = "HELLO WORLD";

// convert the message to uppercase
$message = strtoupper($message);

// split the message into an array of characters
$chars = str_split($message);

// encode each character to Morse code
$morse_message = "";
foreach ($chars as $char) {
  if (isset($morse_alphabet[$char])) {
    $morse_message .= $morse_alphabet[$char] . " ";
  } else {
    // if the character is not in the Morse code alphabet, ignore it
    continue;
  }
}

// print the encoded message
echo $morse_message;
?>
