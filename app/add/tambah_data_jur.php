
<?php
include('../../conf/config.php');
    if (isset($_POST["proses"])) {
        $id = $_POST["id_jur"];
        $nama = $_POST["nama_jur"];

        $q_input_siswa = "INSERT INTO `tbl_jurusan`(`id`, `id_jur`, `nama_jur`) VALUES ('','$id','$nama')";

        $input_siswa = mysqli_query($koneksi, $q_input_siswa);
    }
    header('Location: ../index.php?page=data_jurusan');
    ?>