<?php

//array

$cars = array('swift','verna','scorpio','echo');

echo $cars[0];
echo '<br>';
print_r($cars); 

json

echo '<br>Array with for loop::::';
for($i = 0;  $i<sizeof($cars) ; $i++){

    echo '<br>' .$cars[$i];
}



$numberName = array('jenish','abhi','rajnik','savan','11','12','13');
echo '<br>';
print_r($numberName);



//associative array
echo '<hr><h3>Associative Array</h3>';

$associativeArray = array('firstName' => 'jenish',
                           'lastName' => 'dhaduk',
                           'city' => 'rajkot');

print_r($associativeArray);

//multidimentional array
echo '<hr><h3>Multidimentional Array</h3>';

$multidimentionalArray = array('user1'=>
                                        array('firstName' => 'jenish',
                                        'lastName' => 'dhaduk',
                                        'city' => 'rajkot'),
                                'user2'=>
                                        array('firstName' => 'jay',
                                        'lastName' => 'pachani',
                                        'city' => 'Morbi')
                                );


print_r($multidimentionalArray);                           

echo '<br> print city of user1 : '  .$multidimentionalArray['user1']['city'];




?>