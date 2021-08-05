<?php 

    //PHP 7 Standard Edition Technique
    $strings = ["apple", "orange", "banana", "coconut"];
    $length=array_map(function($item) { return strlen($item);},$strings);
    echo "<pre>";
    print_r($length);
    echo "</pre>";

    //old version Technique
    function my_function($item) {
        return strlen($item);
    }
    $strings = ["apple", "orange", "banana", "coconut"];
    $length=array_map("my_function",$strings);
    echo "<pre>";
    print_r($length);
    echo "</pre>";
?>