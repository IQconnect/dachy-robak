<?php 

function phone_number($number) {
    $vowels = array(' ', '(', ')', '<b>', '</b>');
    $number = str_replace($vowels, '', $number);

    return $number;
}