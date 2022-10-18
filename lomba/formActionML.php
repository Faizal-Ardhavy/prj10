<?php
require '../function.php';
	if(!empty($_POST["namaTim"]) && !empty($_POST["username"])){
		$namaTim = $_POST["namaTim"];
		$instansi = $_POST["school"];
		$mail = $_POST["username"];
		$id_pendaftaran =insert_pendaftaran($namaTim, null, $mail, 'ML',$_SESSION["id"]);

		for($i = 1; $i<=7; $i++){
		    $nama= $_POST["name".strval($i)];
		    $telpon = $_POST["telp".strval($i)];
		    $birth = $_POST["birth".strval($i)];
		    $folder = $_POST["gambar".strval($i)];
		    insert_anggota($nama, $mail, $telpon, $birth, $id_pendaftaran, $instansi);
		    update_identitas($folder, $nama);
		}
    	header("Location: ../dashboard/lomba.php");
    }else{
        echo "<script>
        alert('Tidak berhasil mendaftar pada lomba, pastikan form anda terisi!');
        location.href = '../index.php';
        </script>";
    }
?>