<?php declare(strict_types=1);

/*
// In-Built Function,class and Keyword Not Case sensative
echo "hello world <br>";
ECHO "Hello World <br>";
Echo "Hello World <br>";
eCho "Hello World <br>";

/*

// Variable are case-sensative
$color="red";
echo "My Car is".$color."<br>";
/*echo "My Car is".$Color "<br>";
echo "My Car is".$cOlor "<br>";*/

/*
//Creating Variable
$text="Husain";
$x=5;
$y=10.5;
echo "My Name is $text <br>";
echo "My Name is ".$text."<br>";
echo $x+$y;

//variable scope
$z=5;
echo "$z z Variable is outside the function <br>";
function test(){
    //inside function using globle variable it will be not using inside function but it also don't give an error
    $w=5;
    //echo "$z z Variable is inside the function <br>";
    echo "$w w Variable is inside the function <br>";
    global $x, $y;
    $y = $x + $y;

    static $x = 0;
    echo $x;
    $x++;
}
test();
*/
/* outside used function local variable so giving the error
echo "$w w Variable is outside the function <br>";*/

/*
echo $y;

echo "<br>";
test();
echo "<br>";
test();
echo "<br>";

var_dump($x);
var_dump($y);
//var_dump ($w);
var_dump($z);
*/
/*
//String Methods
$text="MahammadHusain";
$array1=str_split($text);
print_r($array1);
*/

/* chunk_split method
$text="MahammadHusain";
$array1=chunk_split($text,1,".");
print_r($array1);
*/

//echo(strlen("MahammadHusain"));

//echo(str_word_count("Mahammad Husain"));

//echo(strrev("Mahammad Husain"));

//echo(strpos("Mahammad Husain","n"));

//echo str_replace("Husain","Ali","Mahammad Husain");

/*
//casting convert in integer

$x = 23465.768;
$int_cast=(int)$x;
echo $int_cast;

echo "<br>";

$x = "23465.768";
$int_cast=(int)$x;
echo $int_cast;
*/

/*
//define constant
define("test",50);
function test(){
echo test;
}
test();
*/

/*
//ternory operator
echo $status=(empty($user))?"not login":"logged in";
echo "<br>";
$user="husain";
echo $status=(empty($user))?"not login":"logged in";
*/

/*
$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
  } elseif ($t < "20") {
    echo "Have a good day!";
  } else {
    echo "Have a good night!";
  }
  */

  /*
  $favcolor= "red";
  switch($favcolor){
      case "red":
        echo "Your favourite color is red";
        break;
    case "blue":
        echo "Your favourite color is blue";
        break;
    case "yellow":
        echo "Your favourite color is yellow";
        break;
    case "black":
        echo "Your favourite color is black";
        break;
    default :
        echo "Color did not match as your expectation";
  }
  */

  /*
  $x=0;
  while($x<=5){
      echo "the number is:$x <br>";
      $x++;
  }
*/

/*
$x=0;
do{
    echo "the number is:$x <br>";
    $x++;
}while($x<=5);
*/

/*
for($x=0;$x<=10;$x++){
    echo "the number is:$x <br>";
}
*/

/*
echo "<ul>";
$color=array("red","blue","green","Yellow");
foreach($color as $value){
    echo "the color name is<li>$value</li> <br>";
}
echo "</ul>";
*/

/*
echo "<ul>";
$age=array("peter"=>"35","ali"=>"20","jafar"=>"24");
foreach($age as $key=>$value){
    echo "<li> $key = $value</li>";
}
echo "</ul>";
*/

/*
function familyname($name="Mahammad",$age="21"){
    echo "$name = $age <br>";
}
familyname("ali","22");
familyname("jafar","21");
familyname("husain","22");
familyname();
*/

/*function addNumber(float $a, float $b):float{
    return $a + $b;
}
echo addNumber(1.2,1.3);
echo "<br>";
echo addNumber(2,3);
*/

/*
// argument as a refernace
function first($$value){
    $value += 5;
}
$num= 10;
first($num);
echo $num;
*/

/*
//indexed array
$color=["red","blue","green","yellow","black"];
for($i=0;$i<=4;$i++){
    echo "$color[$i] <br>";
}
*/

/*
//assosiative array
$age= ["husain"=>21,"ali"=>22,"haider"=>23];
foreach($age as $key => $value){
    echo "$key=$value <br>";
}
*/

//multidimentional array
/*
$car=[["Volvo",22,18],["BMW",15,13],["Saab",5,2],["Land Rover",17,15]];
for($row=0;$row<4;$row++){
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for($col=0;$col<3;$col++){
        echo "<li>".$car[$row][$col]."<li>";
    }
    echo "</ul>";
}
*/

/*
//PHP Superglobal - $GLOBALS
$x=5;
$y=10;

function sum(){
    $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
}
sum();
echo $z;
*/

//PHP $_SERVER

/*
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['GATEWAY_INTERFACE'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
*/



?>