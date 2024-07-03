
<?php
include('../../conf/config.php');
    if (isset($_POST["proses"])) {
        $id      = $_POST["id"];
        $nis     = $_POST["nis"];
        $nama    = $_POST["nama"];
        $jurusan = $_POST["jurusan"];
        $jk      = $_POST["jenis_kelamin"];
        $agama   = $_POST["agama"];
        $alamat  = $_POST["alamat"];

        // Nama Foto
        $nama_file  = $_FILES['foto']['name'];
        // Lokasi foto
        $file_tmp   = $_FILES['foto']['tmp_name'];
        move_uploaded_file($file_tmp,'../foto/foto_siswa/'.$nama_file);

        $q_input_siswa = "UPDATE tbl_siswa SET `id`='$id',`nis`='$nis',`nama`='$nama',`id_jur`='$jurusan',
                        `jk`='$jk',`agama`='$agama',`alamat`='$alamat',`foto`='$nama_file' WHERE id='$id'";

        $input_siswa = mysqli_query($koneksi, $q_input_siswa);
    }
    header('Location: ../index.php?page=data_siswa');
    ?>