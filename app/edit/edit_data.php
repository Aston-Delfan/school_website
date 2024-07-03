<?php
$id = $_GET['id'];

$query = "SELECT * FROM tbl_siswa WHERE id='$id'";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Error: " . mysqli_error($koneksi));
}

$tampil_siswa = mysqli_fetch_assoc($result);
?>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method='POST' action='update/update_data.php' enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIS</label>
                    <input type="text" class="form-control" name="nis" id="exampleInputEmail1" value="<?php echo $tampil_siswa['nis']?>">
                    <input type="text" class="form-control" name="id" value="<?php echo $tampil_siswa['id']?>" hidden>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail2">Nama</label>
                    <input type="text" class="form-control" name="nama" id="exampleInputEmail2" value="<?php echo $tampil_siswa['nama']?>">
                  </div>
                  <div class="form-group">
                        <label for="jurusan">Jurusan :</label>
                        <select class="form-control" name="jurusan" required>
                            <option value="">Pilih Jurusan...</option>
                            <?php
                            $q_tampil_jurusan = "SELECT * FROM tbl_jurusan";
                            $tampil_jurusan = mysqli_query($koneksi, $q_tampil_jurusan);
                            while($tampil = mysqli_fetch_array($tampil_jurusan)) {
                                echo "<option value='$tampil[id_jur]'"; 
                                if($tampil_siswa['id_jur'] == $tampil['id_jur']) {
                                    echo" selected";
                                }
                                echo">$tampil[nama_jur]</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin :</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" <?php if($tampil_siswa['jk']=='Laki-laki') echo 'checked'; ?>>
                            <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" <?php if($tampil_siswa['jk']=='Perempuan') echo 'checked'; ?>>
                            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama :</label>
                        <select class="form-control" name="agama" required>
                            <option value="">Pilih Agama...</option>
                            <option value="Islam" <?php if($tampil_siswa['agama']=="Islam") echo "selected='selected'"; ?>>Islam</option>
                            <option value="Kristen" <?php if($tampil_siswa['agama']=="Kristen") echo "selected='selected'"; ?>>Kristen</option>
                            <option value="Katolik" <?php if($tampil_siswa['agama']=="Katolik") echo "selected='selected'"; ?>>Katolik</option>
                            <option value="Hindu" <?php if($tampil_siswa['agama']=="Hindu") echo "selected='selected'"; ?>>Hindu</option>
                            <option value="Budha" <?php if($tampil_siswa['agama']=="Budha") echo "selected='selected'"; ?>>Budha</option>
                            <option value="Konghucu" <?php if($tampil_siswa['agama']=="Konghucu") echo "selected='selected'"; ?>>Konghucu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat :</label>
                        <input type="text" class="form-control" name="alamat" value="<?php echo $tampil_siswa['alamat']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Upload Foto</label>
                        <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="foto" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <img src="foto/foto_siswa/<?php echo $tampil_siswa['foto']?>" width="100px" class="rounded float-left">
                    </div>
                    </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="proses">Submit</button>
                </div>
              </form>
            </div>
        </div>
    </section>