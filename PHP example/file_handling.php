<?php

/*
    $file="webdictionary.txt";
    //simple technique for read file
    if(file_exists($file)){
        echo readfile($file);
        copy($file,"newfile.txt");
        rename("newfile.txt","oldfile.txt");
        unlink("oldfile.txt");
        //option for delete file
        delete("oldfile.txt")
    }else{
        echo "file does not exits";
    }
 */
/*
 $file=fopen("webdictionary.txt","r") or die("Unable to open file");
 echo fread($file,filesize("webdictionary.txt"));
 fclose($file);
 */

 /*
    //PHP Check End-Of-File - feof()
    $file=fopen("webdictionary.txt","r") or die("Unable to open file");
    while(!feof($file)){
        echo fgets($file). "<br>";
    }

    //PHP Read Single Character - fgetc()
    $file=fopen("webdictionary.txt","r") or die("Unable to open file");
    while(!feof($file)){
        echo fgetc($file). "<br>";
    }
*/

/*
    //PHP Write to File - fwrite()
    $file=fopen("newfile.txt","w") or die ("Unable to open file");
    $txt="Mahammad\n";
    fwrite($file,$txt);
    $txt="Husain\n";
    fwrite($file,$txt);
    fclose($file);
*/

//when we close the created file it will be delete all data in oldfile
$file=fopen("newfile.txt","w") or die ("Unable to open file");
$txt = "Mickey Mouse\n";
fwrite($file,$txt);
$txt = "Minnie Mouse\n";
fwrite($file,$txt);
fclose($file);

?>
