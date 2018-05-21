<?php
/**
* Beskrivning
*
* PHP version 7
* @category   Kategori
* @author     Lina
* @license    PHP CC
* @link
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
    <?php

        if (isset($_POST['submit'])){
            $file = $_FILES['files'];

            $fileName = $file['name'];
            $fileTmpName = $file['tmp_name'];
            $fileSize = $file['size'];
            $fileError = $file['error'];
            $fileType = $file['type'];

            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));

            $allowed = ['jpg', 'jpeg', 'png'];

            if (in_array($fileActualExt, $allowed)){
                if($fileError === 0) {
                    if($fileSize < 50000000){
                        $fileNameNew = uniqid('', true) . ".$fileActualExt";
                        $fileDestination = "uploads/$fileNameNew";
                        move_uploaded_file($fileTmpName, $fileDestination);
                        header('Location: contact.php?uploadsuccess');
                    }
                    else{
                       echo"<p>Filen är för stor</p>";
                    }
                }
                else{
                    echo"<p>Det blev ett fel under uppladningen av din fil: $fileError</p>";
                }

            }
            else {
                echo"<p>Du kan inte ladda upp filer av typen $fileActualExt</p>";
            }
        }

    ?>
</body>
</html>
