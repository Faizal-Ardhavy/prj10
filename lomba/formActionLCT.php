<?php
    require '../function.php';
    $namaTim = $_POST["namaTim"];
    $mail = $_POST["username"];

    $nama = $_POST["name"];
    $telpon = $_POST["telp"];
    $instansi = $_POST["school"];
    $birth = $_POST["birth"];

    $nama2 = $_POST["name2"];
    $telpon2 = $_POST["telp2"];
    $instansi2 = $_POST["school2"];
    $birth2 = $_POST["birth2"];

    $nama3 = $_POST["name3"];
    $telpon3 = $_POST["telp3"];
    $instansi3 = $_POST["school3"];
    $birth3 = $_POST["birth3"];

    
    $id_pendaftaran =insert_pendaftaran($nama, $instansi, $mail, 'LCT');
    insert_anggota($nama, $mail, $telpon, $birth, $id_pendaftaran);

    // header("Location: profile.php");
?>