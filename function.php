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

    function update_gambar($gambar, $id) {
        return mysqli_query(connect("prjx"), "UPDATE peserta SET foto = '$gambar' Where id = '$id'");
    }

    function login_check($mail, $pass){
        
        $query = mysqli_query(connect("prjx"), "SELECT * FROM peserta WHERE email = '$mail'");
        $data = mysqli_fetch_assoc($query);

        if(password_verify($pass, $data['password'])){
            return true;
        }else{
            return false;
        }
    }

    function insert_pendaftaran($nama, $instansi, $mail, $div){
        $conn = mysqli_connect("localhost", "root", "", "prjx");
        $q = "INSERT INTO `pendaftaran`(`divisi`, `sekolah`, `email`, `nama_tim`) VALUES ('$div','$instansi','$mail','$nama')";
        mysqli_query($conn, $q);
        return mysqli_insert_id($conn);
    }

    // function get_last_pendaftaran(){
    //     return
    // }

    function insert_anggota($nama, $mail, $telpon, $birth, $id_pendaftaran,$karya){
        return mysqli_query(connect("prjx"), "INSERT INTO `anggota`(`nama`, `no_hp`, `id_pendaftaran`,`karya`) VALUES ('$nama','$telpon','$id_pendaftaran','$karya')");
    }

?>