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

    
    $id_pendaftaran =insert_pendaftaran($namaTim, $instansi, $mail, 'Badminton Ganda',$_SESSION["id"]);
    insert_anggota($nama, $mail, $telpon, $birth, $id_pendaftaran,'NULL');
    insert_anggota($nama2, $mail, $telpon2, $birth2, $id_pendaftaran,'NULL');

    header("Location: ../dashboard/lomba.php");
?>