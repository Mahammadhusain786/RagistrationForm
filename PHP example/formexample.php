<?php 

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        if(empty($_POST['name'])){
            $nameErr="Name is required";
        }else{
            $name=test_input($_POST['name']);
            if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
                $nameErr="Only letters and white space allowed";
            }
        }

        if(empty($_POST['email'])){
            $emailErr="Email is required";
        }else{
            $email=test_input($_POST['email']);
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $emailErr="Invalid Email Format";
            }
        }

        if(empty($_POST['website'])){
            $websiteErr="";
        }else{
            $website=test_input($_POST['website']);
            if(!preg_match_all("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
                $websiteErr="Invalid URL";
            }
        }

        if(empty($_POST['comments'])){
            $comment="";
        }else{
            $comment=test_input($_POST['comments']);
        }

        if(empty($_POST['gender'])){
            $genderErr="Gender is required";
        }else{
            $gender=test_input($_POST['gender']);
        }
    }

function test_input($data){
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>testing</title>
        <style>
            .error {color: #FF0000;}
        </style>
    </head>
    <body>
        <h2>PHP Form Validation Example</h2>
        <p><span class="error">* required field</span></p>
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

        Name:<input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error">*<?php echo $nameErr; ?></span><br><br>

        Email:<input  type="email" name="email" value="<?php echo $email ?>">
        <span class="error">*<?php echo $emailErr; ?></span><br><br>

        Website:<input type="text" name="website" value="<?php echo $website; ?>">
        <span class="error"><?php echo $websiteErr; ?></span><br><br>

        Comments:<textarea row="5" col="40" name="comments"><?php echo $comment; ?></textarea><br><br>

        Gender:
        <input type="radio" name="gender" 
        <?php if(isset($gender) && $gender=="male") echo "checked"; ?>
        value="male">Male
        <input type="radio" name="gender" 
        <?php if(isset($gender) && $gender=="female") echo "checked"; ?>
        value="female">Female
        <input type="radio" name="gender" 
        <?php if(isset($gender) && $gender=="other") echo "checked"; ?>
        value="other">Other
        <span class="error">*<?php echo $genderErr; ?></span><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php 

    if(isset($_POST['submit'])){
    if($nameErr=="" && $emailErr=="" && $websiteErr=="" && $genderErr=""){
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    }
}
    
    ?>
    </body>
</html>