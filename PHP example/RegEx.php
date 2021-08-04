<?php 

    //Using preg_match() method

/*    
    $str="W3school Online Course";
    $pattern="/w3school/i";
    echo preg_match($pattern,$str);
*/

/*
    //Using preg_match_all()

    $str="The rain in SPAIN falls mainly on the plains";
    $pattern="/ain/i";
    echo preg_match_all($pattern,$str);
*/

/*
    //Using preg_replace()
    $str="visit microsoft";
    $pattern="/Microsoft/i";
    echo preg_replace($pattern,"W3school",$str);
*/


    //Grouping
    $str="Apples And Bananas";
    $pattern="/ba(na){2}/i";
    echo preg_match_all($pattern,$str);
?>