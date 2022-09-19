<?php
    session_start();
    function connect($db) {
        return mysqli_connect("localhost", "root", "", $db);
    }
    function insert_peserta($mail, $pass, $nama, $telp, $instansi) {
        return mysqli_query(connect("prjx"), "INSERT INTO `peserta`(`email`, `password`,`nama`,`telpon`,`instansi`) VALUES ('$mail','$pass','$nama','$telp','$instansi')");
    }

    function update_peserta($mail, $nama, $telp, $instansi, $job, $birth, $id) {
        return mysqli_query(connect("prjx"), "UPDATE peserta SET email = '$mail', nama = '$nama', telpon = '$telp', instansi = '$instansi', pekerjaan = '$job', birth = '$birth' Where id = '$id'");
    }

    function update_identitas($gambar, $nama) {
        return mysqli_query(connect("prjx"), "UPDATE anggota SET bukti_identitas = '$gambar' Where nama = '$nama'");
    }

    function update_gambar($gambar, $id) {
        return mysqli_query(connect("prjx"), "UPDATE peserta SET foto = '$gambar' Where id = '$id'");
    }

    function update_pembayaran($gambar, $id){
        return mysqli_query(connect("prjx"), "UPDATE pendaftaran SET buktiPembayaran = '$gambar' Where id = '$id'");

    }

    function update_karya($gambar, $id){
        return mysqli_query(connect("prjx"), "UPDATE pendaftaran SET karya = '$gambar' Where id = '$id'");

    }


    function login_check($mail, $pass){
        
        $query = mysqli_query(connect("prjx"), "SELECT * FROM peserta WHERE email = '$mail'");
        $data = mysqli_fetch_assoc($query);
        if($data != null){
            if(password_verify($pass, $data['password'])==true){
                return true;
            }else{
                return false;
            }
        }
        else{
            return false;
        }


    }

    function insert_pendaftaran($nama, $instansi, $mail, $div, $id_pendaftaran){
        $conn = mysqli_connect("localhost", "root", "", "prjx");
        $q = "INSERT INTO `pendaftaran`(`divisi`, `sekolah`, `email`, `nama_tim`,`date` ,`id_peserta`) VALUES ('$div','$instansi','$mail','$nama',current_date(),'$id_pendaftaran')";
        mysqli_query($conn, $q);
        return mysqli_insert_id($conn);
    }

    // function get_last_pendaftaran(){
    //     return
    // }

    function insert_anggota($nama, $mail, $telpon, $birth, $id_pendaftaran, $instansi){
        return mysqli_query(connect("prjx"), "INSERT INTO `anggota`(`nama`, `email`,`birth`, `no_hp`, `id_pendaftaran`,`instansi`) VALUES ('$nama','$mail','$birth','$telpon','$id_pendaftaran','$instansi')");
    }


?>