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

    $nama4 = $_POST["name4"];
    $telpon4 = $_POST["telp4"];
    $instansi4 = $_POST["school4"];
    $birth4 = $_POST["birth4"];

    $nama5 = $_POST["name5"];
    $telpon5 = $_POST["telp5"];
    $instansi5 = $_POST["school5"];
    $birth5 = $_POST["birth5"];

    
    $id_pendaftaran =insert_pendaftaran($namaTim, $instansi, $mail, 'ML',$_SESSION["id"]);
    insert_anggota($nama, $mail, $telpon, $birth, $id_pendaftaran,'NULL');
    insert_anggota($nama2, $mail, $telpon2, $birth2, $id_pendaftaran,'NULL');
    insert_anggota($nama3, $mail, $telpon3, $birth3, $id_pendaftaran,'NULL');
    insert_anggota($nama4, $mail, $telpon4, $birth4, $id_pendaftaran,'NULL');
    insert_anggota($nama5, $mail, $telpon5, $birth5, $id_pendaftaran,'NULL');

    header("Location: ../dashboard/lomba.php");
?>