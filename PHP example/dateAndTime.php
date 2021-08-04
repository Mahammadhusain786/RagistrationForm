<?php

//Get a Date() methode
echo "today is ". date("y/m/d"). "<br><br>";
echo "today is ". date("y-m-d"). "<br><br>";
echo "today is " . date("Y.m.d") . "<br><br>";
echo "today is ". date("d-m-y"). "<br><br>";
echo "day is ". date('l'). "<br><br>";
echo "the time is ". date("h:i:s"). "<br><br>";
date_default_timezone_set("Asia/Calcutta");
echo "the time is ". date("h:i:sp"). "<br><br>";

//Create a Date With mktime()
$d=mktime(3,23,56,8,4,2021);
echo "Created Date is: ". date("y-m-d h:i:s"). "<br><br>";

//Create a Date From a String With strtotime()
$s=strtotime("10:30pm April 15 2014");
echo "created Date is: ". date("y-m-d h:i:s",$s). "<br><br>";

$d1=strtotime("tomorrow");
echo "created Date is: ". date("y-m-d h:i:s",$d1). "<br><br>";

$d2=strtotime("next sunday");
echo "created Date is: ". date("y-m-d h:i:s",$d2). "<br><br>";

$d3=strtotime("+3 months");
echo "created Date is: ". date("y-m-d h:i:s",$d3). "<br><br>";

//More example
$startdate=strtotime("sunday");
$enddate=strtotime("+6 week",$startdate);
while($startdate<$enddate){
    echo date("M d",$startdate). "<br>";
    $startdate=strtotime("+1 week",$startdate);
}

$d4=strtotime("December 04");
$d5=ceil(($d4-time())/60/60/24);
echo "<br>There are " . $d5 ." days until 4th of December. <br><br>";


?>

<html>
    <body>
        &copy 2010-<?php echo date("Y"); ?>
    </body>
</html>