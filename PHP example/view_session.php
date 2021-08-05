<?php 
    session_start();
?>
<html>
    <body>
        <?php
        if(isset($_SESSION["favcolor"])){
        echo "My Faviourate color is : ". $_SESSION["favcolor"]. "<br>";
        echo "Login user is : ". $_SESSION["user"];
        }else{
            echo "session destroyed";
        }
        ?>
    </body>
</html>