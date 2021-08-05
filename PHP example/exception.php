<?php 
    //The try...catch Statement
    function divide($dividend,$divisor){
        if($divisor==0){
            throw new Exception ("Division By Zero");
        }
        return $dividend/$divisor;
    }
    try {
        echo divide(5,0);
    }catch(Exception $e){
        echo "Unable to divide by zero <br>";
    }

    //The try...catch...finally Statement
    function divided($dividend,$divisor){
        if($divisor==0){
            throw new Exception ("Division By Zero");
        }
        return $dividend/$divisor;
    }
    try {
        echo divided(5,0);
    }catch(Exception $e){
        echo "Unable to divide by zero <br>";
    }finally{
        echo "Process Completed <br>";
    }
    
    //The Exception Object
    function divided2($dividend,$divisor){
        if($divisor==0){
            throw new Exception ("Division By Zero");
        }
        return $dividend/$divisor;
    }
    try {
        echo divided2(5,0);
    }catch(Exception $e){
        $code=$e->getcode();
        $message=$e->getmessage();
        $file=$e->getfile();
        $line=$e->getline();
        echo "Exception thrown in $file on line $line: [code $code] $message <br>";
    }    

    //wtthout catch methode
    function divide1($dividend, $divisor) {
        if($divisor == 0) {
          throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
      }
      
      try {
        echo divide1(5, 0);
      } finally {
        echo 'Process complete. <br>';
      } 
?>