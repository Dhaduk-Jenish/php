<?php


$multidimentionalArray = array('User1'=>
                                        array('firstName' => 'jenish',
                                        'lastName' => 'dhaduk',
                                        'city' => 'rajkot'),
                                'User2'=>
                                        array('firstName' => 'jay',
                                        'lastName' => 'pachani',
                                        'city' => 'Morbi')
                                );

foreach($multidimentionalArray as $user => $innerArray)
{
    echo '<b>' .$user. '</b><br>';

    foreach($innerArray as $details){
            echo '&nbsp;&nbsp;'  .$details.  '<br>';
    }
}

?>