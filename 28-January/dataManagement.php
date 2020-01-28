<?php

    session_start();

function getValueSession($section, $fieldName , $returnType = ''){

    return isset($_SESSION[$section][$fieldName]) ? $_SESSION[$section][$fieldName] : $returnType;

}
function setValueSession($section){
    isset($_POST[$section]) ?  $_SESSION[$section] = $_POST[$section] : [] ;
}


setValueSession('account');
setValueSession('address');
setValueSession('other');


function validate( $section, $fieldName){
    switch ($fieldName) {
        case 'firstName':
            if (!preg_match("/^[a-zA-z]/" , $_SESSION[$section][$fieldName])){
                return false;
            }
            
    }


}
?>