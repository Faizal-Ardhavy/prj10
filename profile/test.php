<?php
    require "../function.php";
    if(!isset($_SESSION["login"])||!$_SESSION["login"]){
        header("Location: ../login/login.html");
    }
    echo $_SESSION["birth"];
?>