
<?php 
function is_lowercase($str) 
{
  return $str === strtolower($str);
}

$str = "hello world";
if (is_lowercase($str)) {
  echo "The string is lowercase.";
} else {
  echo "The string is not lowercase.";
}



$name = "yagnesh";
$reversed_str = strrev($name);
echo $reversed_str;



$str = " hello world ";
$trimmed_str = trim($str);
echo $trimmed_str;
?>

$str = "The quick brown fox jumps over the lazy dog";
$old_word = "brown";
$new_word = "red";
$replaced_str = str_replace($old_word, $new_word, $str);
echo $replaced_str;
?>