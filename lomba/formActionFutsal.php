<?php
    require '../function.php';
    $namaTim = $_POST["namaTim"];
    $mail = $_POST["username"];
    $instansi = $_POST["school"];
    $id_pendaftaran =insert_pendaftaran($namaTim, $instansi, $mail, 'Futsal',$_SESSION["id"]);
    
    for($i = 1; $i<=12; $i++){
        $nama= $_POST["name".strval($i)];
        $telpon = $_POST["telp".strval($i)];
        $birth = $_POST["birth".strval($i)];

        $filename = $_FILES["gambar".strval($i)]["name"];
        $tempname = $_FILES["gambar".strval($i)]["tmp_name"];
        $folder = "../img/" . $filename;
        // Now let's move the uploaded image into 
        move_uploaded_file($tempname, $folder);
        
        insert_anggota($nama, $mail, $telpon, $birth, $id_pendaftaran, $instansi);
        update_identitas($folder, $nama);
    }

    for($i = 13; $i<=14; $i++){
        $nama= $_POST["name".strval($i)];
        $telpon = $_POST["telp".strval($i)];
        $birth = $_POST["birth".strval($i)];
        
        insert_anggota($nama, "", $telpon, "", $id_pendaftaran, "");
        update_identitas("", $nama);
    }

    header("Location: ../dashboard/lomba.php");
?>