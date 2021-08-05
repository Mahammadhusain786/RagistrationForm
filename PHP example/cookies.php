<?php

    setcookie("user","Husain",time()+3600,"/");

    //setcookie("user","",time()-3600);

/*
    // cookies created
    $cookie_name="user";
    $cookie_value="Husain Mahammad";

    setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
*/
?>

<html>
    <body>
        <?php 

        if(count($_COOKIE)>0){
            echo "cookies are enable";
        }else{
            echo "cookies are disable";
        }
        
        //echo "cookies was deleted";

        /*
            if(!isset($_COOKIE[$cookie_name])){
                echo "Cookie named '". $cookie_name. " is not set!";
            }else{
                echo "Cookie named '". $cookie_name. "is set! <br>";
                echo "value is: ". $_COOKIE[$cookie_name];
            }
        */
        ?>
    </body>
</html>