<?php
include('../../conf/config.php');
    $id = $_GET["id"];

    $q_input_siswa = "DELETE FROM tbl_jurusan WHERE id='$id'";

    $input_siswa = mysqli_query($koneksi, $q_input_siswa);
    header('Location: ../index.php?page=data_jurusan');
?>