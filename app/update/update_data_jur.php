
<?php
include('../../conf/config.php');
    if (isset($_POST["proses"])) {
        $id = $_POST["id"];
        $id_jur = $_POST["id_jur"];
        $nama = $_POST["nama_jur"];

        $q_input_siswa = "UPDATE `tbl_jurusan` SET `id`='$id',`id_jur`='$id_jur',`nama_jur`='$nama' WHERE id = '$id'";

        $input_siswa = mysqli_query($koneksi, $q_input_siswa);
    }
    header('Location: ../index.php?page=data_jurusan');
    ?>