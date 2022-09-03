<?php
    require '../function.php';
    $mail = $_POST["username"];
    $nama = $_POST["name"];
    $telpon = $_POST["telp"];
    $instansi = $_POST["school"];
    $job = $_POST["job"];
    $gambar = $_POST["gambar"];
    $birth = $_POST["birth"];

    update_peserta($mail, $nama, $telpon, $instansi, $job, $birth, $_SESSION["id"]);

    header("Location: ../index.php");
?>