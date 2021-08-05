<?php 

    //Validate an Integer
    $var=25;
    $option=array("option"=>array(
        "min-val"=>20,
        "max-val"=>30
    ));
    if(filter_var($var, FILTER_VALIDATE_INT)){
        echo "<br>". $var. " is a integer value";
    }
    else{
        echo "<br>". $var. " is not a integer value";
    }

    //Tip: filter_var() and Problem With 0
    $var=0;
    if(filter_var($var, FILTER_VALIDATE_INT) || filter_var($var, FILTER_VALIDATE_INT)==0){
        echo "<br>". $var. " is a integer value";
    }
    else{
        echo "<br>". $var. " is not a integer value";
    }

    //Validate With Booleans value
    $var=true;
    if(filter_var($var, FILTER_VALIDATE_INT)){
        echo "<br>". $var. " is a integer value";
    }
    else{
        echo "<br>". $var. " is not a integer value";
    }

    //Sanitize a String
    $str = "<h1>Hello World!</h1>";
    $newstr = filter_var($str, FILTER_SANITIZE_STRING);
    echo "<br>". $newstr ."</br>";

    //Validate an IP Address
    $ip = "127.0.0.1";

    if (filter_var($ip, FILTER_VALIDATE_IP)) {
      echo("$ip is a valid IP address <br>");
    } else {
      echo("$ip is not a valid IP address <br>");
    }

    //Sanitize and Validate an Email Address
    $email = "(john).(doe@example).(com)";

    $email=filter_var($email,FILTER_SANITIZE_EMAIL);

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "$email is a valid email address <br>";
    }else{
        echo "$email is not a valid email address <br>";
    }

    //Sanitize and Validate a URL
    $url = "h tt ps ://ww w.w3s c ho o ls.co m";

    $url=filter_var($url,FILTER_SANITIZE_URL);

    if(filter_var($url,FILTER_VALIDATE_URL)){
        echo("$url is a valid URL <br>");
    }else{
        echo("$url is not a valid URL <br>");
    }

    //Validate IPv6 Address
    $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

    if(filter_var($ip,FILTER_VALIDATE_IP,FILTER_FLAG_IPV6)){
        echo("$ip is a valid IPv6 address <br>");
    }else{
        echo("$ip is a not valid IPv6 address <br>");
    }

    //Validate URL - Must Contain QueryString
    $url = "https://www.w3schools.com";

    if(filter_var($url,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED)){
        echo("$url is a valid URL with a query string <br>");
    }else{
        echo("$url is not a valid URL with a query string <br>");
    }

    //Remove Characters With ASCII Value > 127
    $str = "<h1>Hello WorldÆØÅ!</h1>";

    $newstr= filter_var($str,FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);

    echo $newstr. "<br>";

?>