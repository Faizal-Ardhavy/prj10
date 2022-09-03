<?php
    require '../function.php';

    $mail = $_POST["username"];
    $pass = password_hash($_POST["pass"], PASSWORD_DEFAULT);
    $nama = $_POST["name"];
    $telpon = $_POST["telp"];
    $instansi = $_POST["school"];

    insert_peserta($mail, $pass, $nama, $telpon, $instansi);

    header("Location: ../index.php");
?>