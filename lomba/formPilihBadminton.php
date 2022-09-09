<?php
    require "../function.php";
    $id = $_SESSION["id"];
    $queri = mysqli_query(connect("prjx"), "SELECT * FROM peserta WHERE id = '$id'");
    $data = mysqli_fetch_assoc($queri);
    if(!isset($_SESSION["login"])||!$_SESSION["login"]){
        header("Location: ../login/login.html");
    }
    $katagori;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Diri/Tim</title>

    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Pendaftaran</title>
        <link rel="stylesheet" href="https://codepen.io/gymratpacks/pen/VKzBEp#0">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
    </head>

    <body>
        <div class="row">
            <div class="col-md-12">
                <form>
                    <h1> Pilih Katagori </h1>

                    <button onclick="location.href='formBTunggal.php'" type="button">Tunggal</button>
                    <button onclick="location.href='formBGanda.php'" type="button">Ganda Campuran</button>

                </form>
            </div>
        </div>

    </body>

    </html>

</body>

</html>