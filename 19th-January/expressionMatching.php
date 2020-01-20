<?php

echo '<br><h4>find perticular word or space in string</h4><br>';


$string = 'good morning. Have a nice day';

if(preg_match('/d m/',$string))
{
    echo 'Match found<br>';
}
else{
    echo 'No Match found<br>';
}

//compare two strings

/*echo '<br><h4>Comparing two string variables</h4><br>';

$string1 = 'hello my name is Jenish Dhaduk'; 
$string2 = 'jenish';

if(($string2,$string1)){         //not working
    echo 'jenish is available in string';
}
else{
    echo 'jenish isn\'t available in string';
}
*/


if(preg_match('/jenish/','I am jenish dhaduk'))
{
    echo 'jenish is in the string';
}
else{
    echo 'jenish isn\'t in the string';
}

 

?>