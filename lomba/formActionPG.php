<?php
    require '../function.php';
    if (!empty($_POST["username"]) && !empty($_POST["name"]) && !empty($_POST["telp"]) && !empty($_POST["birth"])){

        $mail = $_POST["username"];
        $nama = $_POST["name"];
        $telpon = $_POST["telp"];
        $instansi = $_POST["school"];
        $birth = $_POST["birth"];



        $filename = $_FILES["gambar"]["name"];
        $tempname = $_FILES["gambar"]["tmp_name"];
        $folder = "../img/" . $filename;
        // Now let's move the uploaded image into the folder: image
        move_uploaded_file($tempname, $folder);


        
        
        $id_pendaftaran =insert_pendaftaran($nama, $instansi, $mail, 'Photography',$_SESSION["id"]);
        insert_anggota($nama, $mail, $telpon, $birth, $id_pendaftaran,$instansi);
        
        insert_anggota($nama, $mail, $telpon, $birth, $id_pendaftaran,$instansi);
        if(update_identitas($folder, $nama)){
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
    }else{
        echo "<script>
        alert('Tidak berhasil mendaftar pada lomba, pastikan form anda terisi!');
        location.href = '../index.php';
        </script>";
    }
?>