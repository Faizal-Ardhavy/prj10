<?php
    require '../function.php';
    $mail = $_POST["username"];
    $nama = $_POST["name"];
    $telpon = $_POST["telp"];
    $instansi = $_POST["school"];
    $birth = $_POST["birth"];
    $id = $_SESSION["id"];

    $filename = $_FILES["gambar"]["name"];
    $tempname = $_FILES["gambar"]["tmp_name"];
    $folder = "../img/" . $filename;
    // Now let's move the uploaded image into 
    move_uploaded_file($tempname, $folder);

    
    $id_pendaftaran = insert_pendaftaran($nama, $instansi, $mail, 'CPC',$id);
    insert_anggota($nama, $mail, $telpon, $birth, $id_pendaftaran,$instansi);
    update_identitas($folder, $nama);

    header("Location: ../dashboard/lomba.php");
?>