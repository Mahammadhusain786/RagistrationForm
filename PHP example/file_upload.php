<?php 

if(isset($_FILES['fileToUpload'])){

    $file_name=$_FILES['fileToUpload']['name'];
    $file_type=$_FILES['fileToUpload']['type'];
    $file_tmp=$_FILES['fileToUpload']['tmp_name'];
    $file_size=$_FILES['fileToUpload']['size'];

    $file=move_uploaded_file($file_tmp,"upload/".$file_name);
    $imageFileType=strtolower(pathinfo($file,PATHINFO_EXTENSION));

    if(file_exists($file)){
        echo "File Already Exits";
    }

    if($file_size>500000){
        echo "File Must Be out of Range";
    }

    if($imageFileType!="jpg" && $imageFileType!="png" && $imageFileType!="jpeg" && $imageFileType!="gif"){
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    }

    /*
    if(move_uploaded_file($file_tmp,"upload/".$file_name)){
        echo "Image Succesfully Uploaded";
    }else{
        echo "Image Does not Uploaded";
    }
    */
}

?>


<html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            File Upload: <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>