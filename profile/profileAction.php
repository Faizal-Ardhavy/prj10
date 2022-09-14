<?php
    require '../function.php';
    $mail = $_POST["username"];
    $nama = $_POST["name"];
    $telpon = $_POST["telp"];
    $instansi = $_POST["school"];
    $job = $_POST["job"];
    $gambar = $_POST["gambar"];
    $birth = $_POST["birth"];

    $filename = $_FILES["gambar"]["name"];
    $tempname = $_FILES["gambar"]["tmp_name"];
    $folder = "../img/" . $filename;
    if($filename==null){
        $folder = null;
    }else{
        $folder = "../img/" . $filename;
        update_gambar($folder, $_SESSION["id"]); 
    }    
    // // Get all the submitted data from the form
    // Now let's move the uploaded image into the folder: image
    move_uploaded_file($tempname, $folder);

    update_peserta($mail, $nama, $telpon, $instansi, $job, $birth, $_SESSION["id"]);

    header("Location: profile.php");
?>