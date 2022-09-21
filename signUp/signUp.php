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
                <form action="signUp_action.php" method="post">
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
                    <!-- <fieldset>
                        <legend><span class="number">2</span> Profil Anggota</legend>

                        <label for="name_member_1">Nama Anggota 1</label>
                        <input type="text" id="name_member_1" name="name_member_1">

                        <label for="name_member_2">Nama Anggota 2</label>
                        <input type="text" id="name_member_2" name="name_member_2">

                        <legend><span class="number">4</span> Profil Tim</legend>

                        <label for="school">Asal Sekolah</label>
                        <input type="text" id="school" name="school"> -->

                        <!-- <label for="job">Job Role:</label>
                        <select id="job" name="user_job">
                            <optgroup label="Web">
                                <option value="frontend_developer">Front-End Developer</option>
                                <option value="php_developer">PHP Developer</option>
                                <option value="python_developer">Python Developer</option>
                                <option value="rails_developer">Rails Developer</option>
                                <option value="web_designer">Web Designer</option>
                                <option value="wordpress_developer">Wordpress Developer</option>
                            </optgroup>
                            <optgroup label="Mobile">
                                <option value="android_developer">Android Developer</option>
                                <option value="ios_developer">IOS Developer</option>
                                <option value="mobile_designer">Mobile Designer</option>
                            </optgroup>
                            <optgroup label="Business">
                                <option value="business_owner">Business Owner</option>
                                <option value="freelancer">Freelancer</option>
                            </optgroup>
                        </select> -->

                        <!-- <label>Interests:</label>
                        <input type="checkbox" id="development" value="interest_development" name="user_interest"><label
                            class="light" for="development">Development</label><br>
                        <input type="checkbox" id="design" value="interest_design" name="user_interest"><label
                            class="light" for="design">Design</label><br>
                        <input type="checkbox" id="business" value="interest_business" name="user_interest"><label
                            class="light" for="business">Business</label> -->

                    <!-- </fieldset> -->

                    <button type="submit">Buat Akun</button>

                </form>
            </div>
        </div>

    </body>

    </html>

</body>

</html>