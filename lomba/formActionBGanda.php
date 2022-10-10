<?php
    require '../function.php';
    $namaTim = $_POST["namaTim"];
    $mail = $_POST["username"];

    $nama = $_POST["name"];
    $telpon = $_POST["telp"];
    $instansi = $_POST["school"];
    $birth = $_POST["birth"];

    
    $filename = $_FILES["gambar"]["name"];
    $tempname = $_FILES["gambar"]["tmp_name"];
    $folder = "../img/" . $filename;
    // Now let's move the uploaded image into 
    move_uploaded_file($tempname, $folder);

    $nama2 = $_POST["name2"];
    $telpon2 = $_POST["telp2"];
    $instansi2 = $_POST["school2"];
    $birth2 = $_POST["birth2"];

    $filename2 = $_FILES["gambar2"]["name"];
    $tempname2 = $_FILES["gambar2"]["tmp_name"];
    $folder2 = "../img/" . $filename2;
    // Now let's move the uploaded image into 
    move_uploaded_file($tempname2, $folder2);
    
    $id_pendaftaran =insert_pendaftaran($namaTim, $instansi, $mail, 'Badminton Ganda',$_SESSION["id"]);
    insert_anggota($nama, $mail, $telpon, $birth, $id_pendaftaran,$instansi);
    insert_anggota($nama2, $mail, $telpon2, $birth2, $id_pendaftaran,$instansi2);
    if(update_identitas($folder, $nama) and update_identitas($folder2, $nama2)){
        echo "<script>
        alert('Anda telah berhasil melakukan pendaftaran lomba, silahkan melengkapi adimistrasi pada fitur pembayaran di Admisitrasi.');
        location.href = '../dashboard/lomba.php';
        </script>";        // header("Location: ../dashboard/lomba.php");
    }else{
        echo "<script>
        alert('Tidak berhasil mendaftar pada lomba, silahkan coba lagi.');
        location.href = '../index.php';
        </script>";
    }
?>