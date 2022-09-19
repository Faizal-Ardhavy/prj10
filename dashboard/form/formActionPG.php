<?php
require '../../function.php';
    $id = $_GET["id"];
    $nama = $_POST["name"];

    $filename1 = $_FILES["gambar"]["name"];
    $tempname1 = $_FILES["gambar"]["tmp_name"];

    $filename2 = $_FILES["karya"]["name"];
    $tempname2 = $_FILES["karya"]["tmp_name"];
    // Now let's move the uploaded image into 
    if($filename1&&$filename2==null){
        $folder1 = null;
        $folder2 = null;
    }else{
        $folder1 = "../../img/" . $filename1;
        $folder2 = "../../img/" . $filename2;
        update_pembayaran($folder1, $id);
        update_karya($folder2, $id);
    }    
    
    move_uploaded_file($tempname1, $folder1);
    move_uploaded_file($tempname2, $folder2);
    header("Location: ../../pembayaran.php");
?>