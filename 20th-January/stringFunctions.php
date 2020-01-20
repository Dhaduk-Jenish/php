<?php

$string = 'hello, this is an example of string function.';

$result = str_word_count($string);
echo "<br>str_word_count function with one argument:" .$result;

$count = str_word_count($string , 0);
echo "<br>str_word_count function with two argument ('', 0):" .$count;

//array will be printed
$array1 = str_word_count($string , 1);
echo "<br>str_word_count function with two argument ('', 1):";
print_r($array1);

//array will printed with starting index of string
$array2 = str_word_count($string , 2);
echo "<br>str_word_count function with two argument ('', 2):";
print_r($array2);


//includes special symbols in str_word_count

$string2 = 'good morning & welcome to the cybercom creation .';
$specialSymbolArray = str_word_count($string2 , 1 , '&.');
echo "<br>str_word_count function with 3 argument:" ;
print_r($specialSymbolArray);


//string shuffle & string revrese
echo '<hr>  <h4>string shuffle </h4>';

$string3 = "This is an shuffle string   ";
echo "Shuffled Srting : " .str_shuffle($string3);   //str_shuffle() function

$half = substr($string3, 0 ,strlen($string3)/2);      //substr() function
echo "<br>Srting with substr() function : " .$half;

echo '<br>';
echo 'Reversed String' .strrev("This is reversed string,");


//String slashes

echo '<hr>  <h4>String Slashes</h4>';

$string4 = 'This is anch tag <a href=\"index.php">Link</a>';
$stringSlashes =htmlentities( addslashes($string4) );
echo $stringSlashes;

echo '<br>Remove slashes : ' .stripslashes($stringSlashes);

//trim function
echo "<hr>";
$trim1 = "       this is trim function";
var_dump($trim1);

echo '<br>';
echo var_dump ( trim($trim1) );

?>