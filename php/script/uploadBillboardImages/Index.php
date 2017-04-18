<?php

// Check if image file is a actual image or fake image
if(isset($_POST["upload"])) {
    $target_dir = $rep . "media/images/billboards/";
    $target_file = $target_dir . basename($_FILES["files"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    $check = getimagesize($_FILES["files"]["tmp_name"]);
    if($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo '<p class="alert bg-danger">File is not an image.</p>';
        $uploadOk = 0;
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo '<p class="alert bg-danger">Sorry, file already exists.</p>';
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["files"]["size"] > 4194304) {
        echo '<p class="alert bg-danger">Sorry, your file is too large.</p>';
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo '<p class="alert bg-danger">Sorry, only JPG, JPEG and PNG files are allowed.</p>';
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo '<p class="alert bg-danger">Sorry, your file was not uploaded.</p>';
    // if everything is ok, try to upload file
} else {
    $view = $db->query('SELECT MAX(billboard_img_id) AS mx FROM billboards_img');
    $v = $view->fetch();
    $max = ($v['mx'] > 0) ? ++$v['mx'] : 1;
    $target_file = $target_dir . 'billboard-img-(' . $max . ').' . $imageFileType;
        if (move_uploaded_file($_FILES["files"]["tmp_name"], $target_file)) {
            $up = $db->prepare('INSERT INTO billboards_img(billboard_img_name, billboard_img_extension, billboards_img_billboard_id)
            VALUES (?,?,?)');
            if($up->execute(array('billboard-img-(' . $max . ')', $imageFileType, $sb['billboard_id'])))
            {
                echo '<p class="alert bg-success">The file ' . 'billboard-img-(' . $max . ')' . ' has been uploaded.</p>';
            }
            else {
                echo '<p class="alert bg-danger">Sorry, there was an error uploading your file.</p>';
            }

        } else {
            echo '<p class="alert bg-danger">Sorry, there was an error uploading your file.</p>';
        }
    }
}


/*
error_reporting(E_ALL | E_STRICT);
require('UploadHandler.php');
$upload_handler = new UploadHandler();
$imgDb = $db->prepare('INSERT INTO billboards_img (billboard_img_name, billboards_img_billboard_id) VALUES (?, ?)');
*/
