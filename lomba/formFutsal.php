<?php
require "../function.php";
$tutup = date("Y-m-d");
if ($tutup >= "2022-10-21") {
    echo "
        <script>
            alert('Pendaftaran lomba sudah ditutup :(');
            document.location.href = '../';
        </script>
    ";
}
$id = $_SESSION["id"];
$queri = mysqli_query(connect("prjx"), "SELECT * FROM peserta WHERE id = '$id'");
$data = mysqli_fetch_assoc($queri);
if (!isset($_SESSION["login"]) || !$_SESSION["login"]) {
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
        <a href="javascript:history.back()" type="button" class="btn-back"><i class="bi bi-arrow-left-short"></i><span class="text-dark">Back</span></a>
        <div class="row">
            <div class="col-md-12">
                <form action="formActionFutsal" method="post" enctype="multipart/form-data">
                    <h1> Form Pendaftaran Tim</h1>

                    <fieldset>
                        <legend><span class="number">1</span> Profil Ketua</legend>

                        <label for="name">Nama Lengkap</label>
                        <?php
                        if ($data["nama"] != null) {

                        ?>
                            <input required type="text" id="name1" name="name1" value="<?= $data["nama"] ?>">
                        <?php
                        } else {
                        ?>
                            <input required type="text" id="name1" name="name" 1>
                        <?php
                        }
                        ?>

                        <label for="name">No.Telpon</label>
                        <?php
                        if ($data["telpon"] != null) {

                        ?>
                            <input required type="number" id="telp1" name="telp1" value=<?= $data["telpon"] ?>>
                        <?php
                        } else {
                        ?>
                            <input required type="number" id="telp1" name="telp1">
                        <?php
                        }
                        ?>

                        <label for="birth">Tanggal lahir</label>
                        <?php
                        if ($data["birth"] != null) {

                        ?>
                            <input required type="date" id="birth1" name="birth1" value="<?= $data["birth"] ?>">
                        <?php
                        } else {
                        ?>
                            <input required type="date" id="birth1" name="birth1">
                        <?php
                        }
                        ?>
                        <label for="gambar">Kartu Pelajar</label>
                        <div class="input-group">
                            <input required type="file" class="form-control mb-3" id="gambar1" name="gambar1" accept="image/x-png,image/gif,image/jpeg">
                        </div>


                        <legend><span class="number">2</span> Profil Anggota 2</legend>

                        <label for="name">Nama Lengkap</label>
                        <input required type="text" id="name2" name="name2">

                        <label for="name">No.Telpon</label>
                        <input required type="number" id="telp2" name="telp2">

                        <label for="birth">Tanggal lahir</label>
                        <input required type="date" id="birth2" name="birth2">

                        <label for="gambar">Kartu Pelajar</label>
                        <div class="input-group">
                            <input required type="file" class="form-control mb-3" id="gambar2" name="gambar2" accept="image/x-png,image/gif,image/jpeg">
                        </div>


                        <legend><span class="number">3</span> Profil Anggota 3</legend>

                        <label for="name">Nama Lengkap</label>
                        <input required type="text" id="name3" name="name3">

                        <label for="name">No.Telpon</label>
                        <input required type="number" id="telp3" name="telp3">

                        <label for="birth">Tanggal lahir</label>
                        <input required type="date" id="birth3" name="birth3">

                        <label for="gambar">Kartu Pelajar</label>
                        <div class="input-group">
                            <input required type="file" class="form-control mb-3" id="gambar3" name="gambar3" accept="image/x-png,image/gif,image/jpeg">
                        </div>

                        <legend><span class="number">4</span> Profil Anggota 4</legend>

                        <label for="name">Nama Lengkap</label>
                        <input required type="text" id="name4" name="name4">

                        <label for="name">No.Telpon</label>
                        <input required type="number" id="telp4" name="telp4">

                        <label for="birth">Tanggal lahir</label>
                        <input required type="date" id="birth4" name="birth4">

                        <label for="gambar">Kartu Pelajar</label>
                        <div class="input-group">
                            <input required type="file" class="form-control mb-3" id="gambar4" name="gambar4" accept="image/x-png,image/gif,image/jpeg">
                        </div>

                        <legend><span class="number">5</span> Profil Anggota 5</legend>

                        <label for="name">Nama Lengkap</label>
                        <input required type="text" id="name5" name="name5">

                        <label for="name">No.Telpon</label>
                        <input required type="number" id="telp5" name="telp5">

                        <label for="birth">Tanggal lahir</label>
                        <input required type="date" id="birth5" name="birth5">

                        <label for="gambar">Kartu Pelajar</label>
                        <div class="input-group">
                            <input required type="file" class="form-control mb-3" id="gambar5" name="gambar5" accept="image/x-png,image/gif,image/jpeg">
                        </div>

                        <legend><span class="number">6</span> Profil Anggota 6</legend>

                        <label for="name">Nama Lengkap</label>
                        <input required type="text" id="name6" name="name6">

                        <label for="name">No.Telpon</label>
                        <input required type="number" id="telp6" name="telp6">

                        <label for="birth">Tanggal lahir</label>
                        <input required type="date" id="birth6" name="birth6">

                        <label for="gambar">Kartu Pelajar</label>
                        <div class="input-group">
                            <input required type="file" class="form-control mb-3" id="gambar6" name="gambar6" accept="image/x-png,image/gif,image/jpeg">
                        </div>

                        <legend><span class="number">7</span> Profil Anggota 7</legend>

                        <label for="name">Nama Lengkap</label>
                        <input required type="text" id="name7" name="name7">

                        <label for="name">No.Telpon</label>
                        <input required type="number" id="telp7" name="telp7">

                        <label for="birth">Tanggal lahir</label>
                        <input required type="date" id="birth7" name="birth7">

                        <label for="gambar">Kartu Pelajar</label>
                        <div class="input-group">
                            <input required type="file" class="form-control mb-3" id="gambar7" name="gambar7" accept="image/x-png,image/gif,image/jpeg">
                        </div>

                        <legend><span class="number">8</span> Profil Anggota 8</legend>

                        <label for="name">Nama Lengkap</label>
                        <input required type="text" id="name8" name="name8">

                        <label for="name">No.Telpon</label>
                        <input required type="number" id="telp8" name="telp8">

                        <label for="birth">Tanggal lahir</label>
                        <input required type="date" id="birth8" name="birth8">

                        <label for="gambar">Kartu Pelajar</label>
                        <div class="input-group">
                            <input required type="file" class="form-control mb-3" id="gambar8" name="gambar8" accept="image/x-png,image/gif,image/jpeg">
                        </div>

                        <legend><span class="number">9</span> Profil Anggota 9</legend>

                        <label for="name">Nama Lengkap</label>
                        <input required type="text" id="name9" name="name9">

                        <label for="name">No.Telpon</label>
                        <input required type="number" id="telp9" name="telp9">

                        <label for="birth">Tanggal lahir</label>
                        <input required type="date" id="birth9" name="birth9">

                        <label for="gambar">Kartu Pelajar</label>
                        <div class="input-group">
                            <input required type="file" class="form-control mb-3" id="gambar9" name="gambar9" accept="image/x-png,image/gif,image/jpeg">
                        </div>

                        <legend><span class="number">10</span> Profil Anggota 10</legend>

                        <label for="name">Nama Lengkap</label>
                        <input required type="text" id="name10" name="name10">

                        <label for="name">No.Telpon</label>
                        <input required type="number" id="telp10" name="telp10">


                        <label for="birth">Tanggal lahir</label>
                        <input required type="date" id="birth10" name="birth10">

                        <label for="gambar">Kartu Pelajar</label>
                        <div class="input-group">
                            <input required type="file" class="form-control mb-3" id="gambar10" name="gambar10" accept="image/x-png,image/gif,image/jpeg">
                        </div>

                        <legend><span class="number">11</span> Profil Anggota 11</legend>

                        <label for="name">Nama Lengkap</label>
                        <input required type="text" id="name11" name="name11">

                        <label for="name">No.Telpon</label>
                        <input required type="number" id="telp11" name="telp11">


                        <label for="birth">Tanggal lahir</label>
                        <input required type="date" id="birth11" name="birth11">

                        <label for="gambar">Kartu Pelajar</label>
                        <div class="input-group">
                            <input required type="file" class="form-control mb-3" id="gambar11" name="gambar11" accept="image/x-png,image/gif,image/jpeg">
                        </div>

                        <legend><span class="number">12</span> Profil Anggota 12</legend>

                        <label for="name">Nama Lengkap</label>
                        <input required type="text" id="name12" name="name12">

                        <label for="name">No.Telpon</label>
                        <input required type="number" id="telp12" name="telp12">


                        <label for="birth">Tanggal lahir</label>
                        <input required type="date" id="birth12" name="birth12">

                        <label for="gambar">Kartu Pelajar</label>
                        <div class="input-group">
                            <input required type="file" class="form-control mb-3" id="gambar12" name="gambar12" accept="image/x-png,image/gif,image/jpeg">
                        </div>


                        <legend><span class="number">13</span> Profil Pendamping 1</legend>

                        <label for="name">Nama Lengkap</label>
                        <input required type="text" id="name13" name="name13">

                        <label for="name">No.Telpon</label>
                        <input required type="number" id="telp13" name="telp13">


                        <legend><span class="number">14</span> Profil Pendamping 2</legend>

                        <label for="name">Nama Lengkap</label>
                        <input required type="text" id="name14" name="name14">

                        <label for="name">No.Telpon</label>
                        <input required type="number" id="telp14" name="telp14">


                        <legend><span class="number">15</span> Profil Tim</legend>
                        <label for="name">Email</label>
                        <?php
                        if ($data["email"] != null) {

                        ?>
                            <input required type="email" id="username" name="username" value=<?= $data["email"] ?>>
                        <?php
                        } else {
                        ?>
                            <input required type="email" id="username" name="username">
                        <?php
                        }
                        ?>

                        <label for="school">Instansi</label>
                        <?php
                        if ($data["instansi"] != null) {
                        ?>
                            <input required type="text" id="school" name="school" value="<?= $data["instansi"] ?>">
                        <?php
                        } else {
                        ?>
                            <input required type="text" id="school" name="school">

                        <?php
                        }
                        ?>

                        <label for="name">Nama Tim</label>
                        <input required type="text" id="namaTim" name="namaTim">

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