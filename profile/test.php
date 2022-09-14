<?php
    require "../function.php";
    if(!isset($_SESSION["login"])||!$_SESSION["login"]){
        header("Location: ../login/login.html");
    }
    $id = $_SESSION["id"];
    $queri = mysqli_query(connect("prjx"), "SELECT * FROM pendaftaran WHERE id_peserta = '$id'");
    $data = mysqli_fetch_assoc($queri);
    var_dump($data);
?>