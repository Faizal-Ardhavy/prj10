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

    $nama6 = $_POST["name6"];
    $telpon6 = $_POST["telp6"];
    $instansi6 = $_POST["school6"];
    $birth = $_POST["birth6"];

    $nama7 = $_POST["name7"];
    $telpon7 = $_POST["telp7"];
    $instansi7 = $_POST["school7"];
    $birth7 = $_POST["birth7"];

    $nama8 = $_POST["name8"];
    $telpon8 = $_POST["telp8"];
    $instansi8 = $_POST["school8"];
    $birth8 = $_POST["birth8"];

    $nama9 = $_POST["name9"];
    $telpon9 = $_POST["telp9"];
    $instansi9 = $_POST["school9"];
    $birth9 = $_POST["birth9"];

    $nama10 = $_POST["name10"];
    $telpon10 = $_POST["telp10"];
    $instansi10 = $_POST["school10"];
    $birth10 = $_POST["birth10"];

    
    $id_pendaftaran =insert_pendaftaran($nama, $instansi, $mail, 'ML');
    insert_anggota($nama, $mail, $telpon, $birth, $id_pendaftaran,'NULL');
    insert_anggota($nama2, $mail, $telpon2, $birth2, $id_pendaftaran,'NULL');
    insert_anggota($nama3, $mail, $telpon3, $birth3, $id_pendaftaran,'NULL');
    insert_anggota($nama4, $mail, $telpon4, $birth4, $id_pendaftaran,'NULL');
    insert_anggota($nama5, $mail, $telpon5, $birth5, $id_pendaftaran,'NULL');
    insert_anggota($nama6, $mail, $telpon6, $birth6, $id_pendaftaran,'NULL');
    insert_anggota($nama7, $mail, $telpon7, $birth7, $id_pendaftaran,'NULL');
    insert_anggota($nama8, $mail, $telpon8, $birth8, $id_pendaftaran,'NULL');
    insert_anggota($nama9, $mail, $telpon9, $birth9, $id_pendaftaran,'NULL');
    insert_anggota($nama10, $mail, $telpon10, $birth10, $id_pendaftaran,'NULL');


    header("Location: ../dashboard/dashboard.php");
?>