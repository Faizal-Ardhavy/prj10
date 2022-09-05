<?php
    require '../function.php';
    if (isset($_POST["login"])) {
        $username = $_POST["email"];
        $_SESSION["username"] = $username;
        $queri = mysqli_query(connect("prjx"), "SELECT * FROM peserta WHERE email = '$username'");
        $data = mysqli_fetch_assoc($queri);
        $_SESSION["nama"]=$data["nama"];
        $_SESSION["telpon"]=$data["telpon"];
        $_SESSION["instansi"]=$data["instansi"];
        $_SESSION["birth"]=$data["birth"];
        $_SESSION["pekerjaan"]=$data["pekerjaan"];
        $_SESSION["gambar"]=$data["foto"];
        $_SESSION["id"] = $data["id"];
        $isi = $_POST["password"];
        $_SESSION["login"]=login_check($username, $isi);

    }
    if(isset($_SESSION["login"])&&$_SESSION["login"]){
        header("Location: ../index.php");
        exit;
    }else{
        echo '<script>alert("Kombinasi Username atau Password Anda Salah");window.history.go(-1);</script>';
        echo "<meta http-equiv=\"refresh\" content=\"1.5;url=login.html\"/>";
    }
?>