<?php
    require '../function.php';
    $namaTim = $_POST["namaTim"];
    $mail = $_POST["username"];
    $instansi = $_POST["school"];
    $id_pendaftaran =insert_pendaftaran($namaTim, $instansi, $mail, 'LCT',$_SESSION["id"]);
    
    for($i = 1; $i<=4; $i++){
        
        if($i==4){
            $nama= $_POST["name".strval($i)];
            $telpon = $_POST["telp".strval($i)];
            $birth = $_POST["birth".strval($i)];
            
            insert_anggota($nama, "", $telpon, "", $id_pendaftaran, "");
            update_identitas("", $nama);
        }else{
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
    }


    // $nama = $_POST["name"];
    // $telpon = $_POST["telp"];
    // $instansi = $_POST["school"];
    // $birth = $_POST["birth"];

    // $nama2 = $_POST["name2"];
    // $telpon2 = $_POST["telp2"];
    // $instansi2 = $_POST["school2"];
    // $birth2 = $_POST["birth2"];

    // $nama3 = $_POST["name3"];
    // $telpon3 = $_POST["telp3"];
    // $instansi3 = $_POST["school3"];
    // $birth3 = $_POST["birth3"];

    

    header("Location: ../dashboard/lomba.php");
?>