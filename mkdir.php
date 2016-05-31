<?php

/**
 * @author 
 * @copyright 2016
 */

//$uploadDir = '/mnt/mcr/list/';

//for( $i=1; $i<=70; $i++ ) { 
//mkdir($uploadDir.$i, 0777, true);
//}
    
//echo $i.'<br>';    
// Desired folder structure

function generateRandomString($length) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}



for ($i = 0; $i < 9999; $i++) {
        echo generateRandomString(3).'<br>';
    }

?>