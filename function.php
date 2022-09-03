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

    function login_check($mail, $pass){
        
        $query = mysqli_query(connect("prjx"), "SELECT * FROM peserta WHERE email = '$mail'");
        $data = mysqli_fetch_assoc($query);

        if(password_verify($pass, $data['password'])){
            return true;
        }else{
            return false;
        }
    }
?>