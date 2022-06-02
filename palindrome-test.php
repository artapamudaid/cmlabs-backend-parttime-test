<?php

function palindrome(String $string)
{
    //remove space in sentence
    $string = str_replace(" ", "", $string);
    //remove special characters
    $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
    //change string to lower case
    $string = strtolower($string);
    //revese string
    $reverse = strrev($string);

    if ($string === $reverse) {
        return 'true';
    } else {
        return 'false';
    }
}


echo palindrome('No lemon, no melon');
