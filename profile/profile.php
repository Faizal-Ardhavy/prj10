<?php
    require "../function.php";
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
                <form action="profileAction.php" method="post" enctype= "multipart/form-data">
                    <h1> Pendataan Peserta </h1>
                    <button type="submit">Konfirmasi</button>
                    <fieldset>
                        <legend><span class="number">1</span> Profil</legend>

                        <?php 
                            if($_SESSION["gambar"]!=null){
                                 
                        ?>
                            <img src="../img/<?php echo $_SESSION["gambar"]; ?>">

                        <?php
                            }
                        ?>

                        <label for="name">Username atau Email</label>
                        <?php 
                            if($_SESSION["username"]!=null){ 
                        
                        ?>
                        <input type="email" id="username" name="username" value=<?= $_SESSION["username"] ?>>
                        <?php
                            }else{
                        ?>
                        <input type="email" id="username" name="username">
                        <?php
                            }
                        ?>

                        <label for="name">Nama Lengkap</label>
                        <?php 
                            if($_SESSION["nama"]!=null){ 
                        
                        ?>
                        <input type="text" id="name" name="name" value="<?= $_SESSION['nama']?>">
                        <?php
                            }else{
                        ?>
                        <input type="text" id="name" name="name">
                        <?php
                            }
                        ?>

                        <label for="name">No.Telpon</label>
                        <?php 
                            if($_SESSION["telpon"]!=null){ 
                        
                        ?>
                        <input type="number" id="telp" name="telp" value=<?= $_SESSION["telpon"]?>>
                        <?php
                            }else{
                        ?>
                        <input type="text" id="telp" name="telp">
                        <?php
                            }
                        ?>

                        <label for="birth">Tanggal lahir</label>
                        <?php 
                            if($_SESSION["birth"]!=null){ 
                        
                        ?>
                        <input type="date" id="birth" name="birth" value="<?= $_SESSION['birth']?>">
                        <?php
                            }else{
                        ?>
                        <input type="date" id="birth" name="birth">                        
                        <?php
                            }
                        ?>

                        <label for="school">Instansi</label>
                        <?php 
                            if($_SESSION["instansi"]!=null){ 
                        
                        ?>
                        <input type="text" id="school" name="school" value="<?= $_SESSION['instansi']?>">

                        <?php
                            }else{
                        ?>
                        <input type="text" id="school" name="school">

                        <?php
                            }
                            ?>

                        <label for="job">Pekerjaan</label>
                        <?php 
                            if($_SESSION["pekerjaan"]!=null){ 
                        
                        ?>
                        <select id="job" name="job">
                            <optgroup label="<?= [$_SESSION["pekerjaan"]] ?>">
                                <option value="Siswa">Siswa</option>
                                <option value="Mahasiswa">Mahasiswa</option>
                                <option value="pns">PNS</option>
                                <option value="Swasta">Swasta</option>
                                <option value="Wirausaha">Wirausaha</option>
                                <option value="lainnya">lainnya</option>
                            </optgroup>

                        <?php
                            }else{
                        ?>
                        <select id="job" name="job">
                            <optgroup label="Siswa">
                                <option value="Siswa">Siswa</option>
                                <option value="Mahasiswa">Mahasiswa</option>
                                <option value="pns">PNS</option>
                                <option value="Swasta">Swasta</option>
                                <option value="Wirausaha">Wirausaha</option>
                                <option value="lainnya">lainnya</option>
                            </optgroup>
                        <?php
                            }
                        ?>

                            <input required type="file" id="gambar" name="gambar" accept="image/x-png,image/gif,image/jpeg">
                            <label for="gambar">Upload Foto Formal (Max 2MB)</label>
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



                </form>
            </div>
        </div>

    </body>

    </html>

</body>

</html>