<?php
require '../../function.php';
    $id = $_POST["id"];
    $nama = $_POST["name"];

    $filename = $_FILES["gambar"]["name"];
    $tempname = $_FILES["gambar"]["tmp_name"];
    // Now let's move the uploaded image into 
    if($filename==null){
        $folder = null;
    }else{
        $folder = "../../img/" . $filename;
        update_pembayaran($folder, $id);
    }    
    
    move_uploaded_file($tempname, $folder);
    header("Location: ../pembayaran");
?>