<?php
    require "../function.php";
    if(!isset($_SESSION["login"])||!$_SESSION["login"]){
        header("Location: ../login/login.html");
    }
    $id = $_POST['id'];
    var_dump($id);
?>