
<?php
include('../../conf/config.php');
    if (isset($_POST["proses"])) {
        $nis = $_POST["nis"];
        $nama = $_POST["nama"];
        $jurusan = $_POST["jurusan"];
        $jk = $_POST["jenis_kelamin"];
        $agama = $_POST["agama"];
        $alamat = $_POST["alamat"];

        // Nama Foto
        $nama_file  = $_FILES['foto']['name'];
        // Lokasi foto
        $file_tmp   = $_FILES['foto']['tmp_name'];
        move_uploaded_file($file_tmp,'../foto/foto_siswa/'.$nama_file);

        $q_input_siswa = "INSERT INTO `tbl_siswa`(`id`, `nis`, `nama`, `id_jur`, `jk`, `agama`, `alamat`, `foto`) 
        VALUES ('','$nis','$nama','$jurusan','$jk','$agama','$alamat','$nama_file')";

        $input_siswa = mysqli_query($koneksi, $q_input_siswa);
    }
    header('Location: ../index.php?page=data_siswa');
    ?>