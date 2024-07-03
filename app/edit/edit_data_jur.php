<?php
$id = $_GET['id'];

$query = "SELECT * FROM tbl_jurusan WHERE id='$id'";
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
              <form method='POST' action='update/update_data_jur.php' enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ID Jurusan :</label>
                    <input type="text" class="form-control" name="id_jur" id="exampleInputEmail1" value="<?php echo $tampil_siswa['id_jur']?>">
                    <input type="text" class="form-control" name="id" id="exampleInputEmail1" value="<?php echo $tampil_siswa['id']?>" hidden>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail2">Nama Jurusan :</label>
                    <input type="text" class="form-control" name="nama_jur" id="exampleInputEmail2" value="<?php echo $tampil_siswa['nama_jur']?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer justify-content-between">
                    <button type="submit" class="btn btn-outline-light btn-primary" name="proses">Submit</button>
                </div>
              </form>
            </div>
        </div>
    </section>