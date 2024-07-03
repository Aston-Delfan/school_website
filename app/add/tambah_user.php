<?php
include('../../conf/config.php');
    if (isset($_POST["proses"])) {
        $nama        = $_POST["nama"];
        $username       = $_POST["username"];
        $password    = $_POST["password"];
        $level         = $_POST["level"];

        $q_input_siswa = "INSERT INTO `tbl_users`(`id`, `nama`, `username`, `password`, `level`) 
        VALUES ('','$nama','$username','$password','$level')";

        $input_siswa = mysqli_query($koneksi, $q_input_siswa);
    }
    if($input_siswa){
    header('Location: ../../index.php?error=3');
    }
    ?>