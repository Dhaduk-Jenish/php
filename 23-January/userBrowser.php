<?php

$browser = get_browser(null , true);
echo '<pre>';
print_r($browser);


echo '<hr>';    
$ip = $_SERVER['REMOTE_ADDR'];
echo '<br>IP address is ' .$ip;


?>