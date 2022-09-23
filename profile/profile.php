<?php
require "../function.php";
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
    <link href="../img/_Logo.png" rel="icon">
    <title>Form Data Diri</title>

    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="d-flex flex-column">
        <a href = "../index.php" type = "button" class="btn-back"><i class="bi bi-arrow-left-short"></i><span class="text-dark">Back</span></a>

        <form action="profileAction" method="post" enctype="multipart/form-data">
            <h1> Pendataan Peserta </h1>
            <fieldset>
                <legend><span class="number">1</span> Profil</legend>

                <label for="name">Email</label>
                <?php
                if ($data["email"] != null) :
                ?>
                    <input type="email" id="username" name="username" value=<?= $data["email"] ?>>
                <?php
                else :
                ?>
                    <input type="email" id="username" name="username">
                <?php
                endif
                ?>

                <label for="name">Nama Lengkap</label>
                <?php
                if ($data["nama"] != null) :

                ?>
                    <input type="text" id="name" name="name" value="<?= $data["nama"] ?>">
                <?php
                else :
                ?>
                    <input type="text" id="name" name="name">
                <?php
                endif
                ?>

                <label for="name">No. Telepon</label>
                <?php
                if ($data["telpon"] != null) :

                ?>
                    <input type="number" id="telp" name="telp" value=<?= $data["telpon"] ?>>
                <?php
                else :
                ?>
                    <input type="text" id="telp" name="telp">
                <?php
                endif
                ?>

                <label for="birth">Tanggal Lahir</label>
                <?php
                if ($data["birth"] != null) :

                ?>
                    <input type="date" id="birth" name="birth" value="<?= $data["birth"] ?>">
                <?php
                else :
                ?>
                    <input type="date" id="birth" name="birth">
                <?php
                endif
                ?>

                <label for="school">Instansi</label>
                <?php
                if ($data["instansi"] != null) :
                ?>
                    <input type="text" id="school" name="school" value="<?= $data["instansi"] ?>">

                <?php
                else :
                ?>
                    <input type="text" id="school" name="school">

                <?php
                endif
                ?>

                <label for="job">Pekerjaan</label>
                <?php
                if ($data["pekerjaan"] != null) :

                ?>
                    <select id="job" name="job">
                        <option value="<?= $data["pekerjaan"] ?>" selected disabled hidden>
                            <?= $data["pekerjaan"] ?>
                        </option>
                        <option value="Siswa">Siswa</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="pns">PNS</option>
                        <option value="Swasta">Swasta</option>
                        <option value="Wirausaha">Wirausaha</option>
                        <option value="lainnya">lainnya</option>
                    </select>
                <?php
                else :
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
                    </select>
                <?php
                endif
                ?>

                <?php
                if ($data["foto"] != null) :
                ?>
                    <img src="<?php echo $data["foto"]; ?>" class="my-2 w-100 h-50 img-upload">

                    <label class="" for="gambar">Upload Foto Formal (max. 2MB)</label>
                    <div class="input-group">
                        <input type="file" class="form-control mb-3" id="gambar" name="gambar" accept="image/x-png,image/gif,image/jpeg" value=<?= $data["foto"] ?>>
                    </div>


                <?php
                else :
                ?>
                    <label class="" for="gambar">Upload Foto Formal (max. 2MB)</label>
                    <div class="input-group">
                        <input required type="file" class="form-control mb-3" id="gambar" name="gambar" accept="image/x-png,image/gif,image/jpeg">
                    </div>
                <?php
                endif
                ?>

            </fieldset>

            <button class="btn-confirm" type="submit">Konfirmasi</button>
        </form>
    </div>
</body>

</html>