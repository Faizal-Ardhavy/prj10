<?php
require "../function.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="img/_Logo.png" rel="icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="row">
        <div class="col-0 col-md-3"></div>
        <div class="col-12 col-md-6 mx-auto">
            <form action="signUp_action" method="post">
                <h1> Pendaftaran Akun Peserta </h1>

                <fieldset class="mb-3">
                    <legend><span class="number">1</span> Profil</legend>

                    <label for="name">Email</label>
                    <input type="email" id="username" name="username">

                    <label for="name">Nama Lengkap</label>
                    <input type="text" id="name" name="name">

                    <label for="telpon">No.Telpon</label>
                    <input type="number" id="telp" name="telp">

                    <label for="school">Instansi</label>
                    <input type="text" id="school" name="school">

                    <label for="password">Password</label>
                    <input type="password" id="pass" name="pass">


                </fieldset>

                <button type="submit">Buat Akun</button>

            </form>
        </div>
        <div class="col-0 col-md-3"></div>
    </div>

</body>

</html>