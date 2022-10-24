<?php
    require "../function.php";
    $id = $_SESSION["id"];
    $queri = mysqli_query(connect("prjx"), "SELECT * FROM peserta WHERE id = '$id'");
    $data = mysqli_fetch_assoc($queri);
    if(!isset($_SESSION["login"])||!$_SESSION["login"]){
        header("Location: ../login/login.html");
    }
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

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
    <a  href="javascript:history.back()" type = "button" class="btn-back"><i class="bi bi-arrow-left-short"></i><span class="text-dark">Back</span></a>
        <div class="row">
            <div class="col-md-12">
                <form action="formActionCPC" method="post" enctype="multipart/form-data">
                    <h1> Form Pendaftaran </h1>

                    <fieldset>
                        <legend><span class="number">1</span> Profil</legend>
                        <label for="name">Email</label>
                        <?php 
                            if($data["email"]!=null){ 
                        
                        ?>
                        <input required type="email" id="username" name="username" value=<?= $data["email"] ?>>
                        <?php
                            }else{
                        ?>
                        <input required type="email" id="username" name="username">
                        <?php
                            }
                        ?>

                        <label for="name">Nama Lengkap</label>
                        <?php 
                            if($data["nama"]!=null){ 
                        
                        ?>
                        <input required type="text" id="name" name="name" value="<?= $data["nama"]?>">
                        <?php
                            }else{
                        ?>
                        <input required type="text" id="name" name="name">
                        <?php
                            }
                        ?>

                        <label for="name">No.Telpon</label>
                        <?php 
                            if($data["telpon"]!=null){ 
                        
                        ?>
                        <input required type="number" id="telp" name="telp" value=<?= $data["telpon"]?>>
                        <?php
                            }else{
                        ?>
                        <input required type="text" id="telp" name="telp">
                        <?php
                            }
                        ?>

                        <label for="school">Instansi</label>
                        <?php 
                            if($data["instansi"]!=null){ 
                        ?>
                        <input required type="text" id="school" name="school" value="<?= $data["instansi"]?>">
                        <?php
                        }else{
                        ?>
                        <input required type="text" id="school" name="school">

                        <?php
                            }
                        ?>
                        <label for="birth">Tanggal lahir</label>
                        <?php 
                            if($data["birth"]!=null){ 
                        
                        ?>
                        <input required type="date" id="birth" name="birth" value="<?=$data["birth"]?>">
                        <?php
                            }else{
                        ?>
                        <input required type="date" id="birth" name="birth">
                        <?php
                            }
                        ?>
                        <label for="gambar">Bukti Identitas (Kartu Pelajar / Halaman Depan Rapot)</label>
                        <div class="input-group">
                            <input required type="file" class="form-control mb-3" id="gambar" name="gambar"
                                accept="image/x-png,image/gif,image/jpeg">
                        </div>




                    </fieldset>
                    <fieldset>
                        <!-- <legend><span class="number">2</span> Profil Anggota</legend>

                        <label for="name_member_1">Nama Anggota 1</label>
                        <input required type="text" id="name_member_1" name="name_member_1">

                        <label for="name_member_2">Nama Anggota 2</label>
                        <input required type="text" id="name_member_2" name="name_member_2">

                        <legend><span class="number">4</span> Profil Tim</legend>

                        <label for="school">Asal Sekolah</label>
                        <input required type="text" id="school" name="school"> -->


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
                        <input required type="checkbox" id="development" value="interest_development" name="user_interest"><label
                            class="light" for="development">Development</label><br>
                        <input required type="checkbox" id="design" value="interest_design" name="user_interest"><label
                            class="light" for="design">Design</label><br>
                        <input required type="checkbox" id="business" value="interest_business" name="user_interest"><label
                            class="light" for="business">Business</label> -->

                    </fieldset>

                    <button type="submit">Sign Up</button>

                </form>
            </div>
        </div>

    </body>

    </html>

</body>

</html>