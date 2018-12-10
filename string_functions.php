<?php
echo substr('Hello World', 1,3); //Ell Substring
echo '<br />'.strlen('Hello World'); //11 Length
echo '<br />'.strpos('Hello World', 'l'); //2 Find index of first
echo '<br />'.strrpos('Hello World', 'l'); //9 Find index of last

$text = 'Hello World           ';
echo '<br />';
var_dump($text);
$trimmed = trim($text); //Trim trailing whitespace
echo '<br />';
var_dump($trimmed);

$upper = strtoupper($trimmed); //Uppercase
$lower = strtolower($trimmed); //Lowercase
$capitalized = ucwords($lower); //Capitalized
echo '<br />'.$upper.' || '.$lower.' || '.$capitalized;

$replaced = str_replace('World', 'Everyone', $text);
echo '<br />'.$replaced; //String Replace

$val = 22;
$isstring = !is_string($val);
echo '<br />'.$isstring;

$values = array(true, false, null, 'abc', 33, '33', false, '', 'Twenty');
foreach($values as $value){
  if(is_string($value)){
    echo "{$value} is a string <br />";
  }
  else{
    $type = gettype($value);
    echo "{$value} is a {$type} <br />";
  }
}
 ?>
