<?php
    require '../function.php';

    $mail = mysqli_real_escape_string(connect("prjx"),$_POST["username"]);
    $pass = mysqli_real_escape_string(connect("prjx"),password_hash($_POST["pass"], PASSWORD_DEFAULT));
    $nama =  mysqli_real_escape_string(connect("prjx"),$_POST["name"]);
    $telpon =  mysqli_real_escape_string(connect("prjx"),$_POST["telp"]);
    $instansi =  mysqli_real_escape_string(connect("prjx"),$_POST["school"]);
    if(!registrasi($mail)){
        insert_peserta($mail, $pass, $nama, $telpon, $instansi);
        header("Location: ../index.php");
    }else{
        echo "<script>
        alert('Email Sudah Ada');
        location.href = 'signUp';
        </script>";
        // header("Location: signUp");
        
    }

?>