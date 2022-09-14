<?php
    require '../function.php';
    $mail = $_POST["username"];
    $nama = $_POST["name"];
    $telpon = $_POST["telp"];
    $instansi = $_POST["school"];
    $birth = $_POST["birth"];
    $id = $_SESSION["id"];

    // $filename = $_FILES["gambar"]["name"];
    // $tempname = $_FILES["gambar"]["tmp_name"];
    // $folder = "../img/" . $filename;    
    // // // Get all the submitted data from the form
    // update_gambar($folder, $_SESSION["id"]); 
    // // Now let's move the uploaded image into the folder: image
    // move_uploaded_file($tempname, $folder);

    // update_peserta($mail, $nama, $telpon, $instansi, $job, $birth, $_SESSION["id"]);

    
    $id_pendaftaran = insert_pendaftaran($nama, $instansi, $mail, 'CPC',$id);
    insert_anggota($nama, $mail, $telpon, $birth, $id_pendaftaran,'NULL');

    header("Location: ../dashboard/dashboard.php");
?>