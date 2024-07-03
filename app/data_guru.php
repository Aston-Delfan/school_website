

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable Guru</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-secondary">
                  Input Data
                </button>
                <br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>NUPTK</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Jenis kelamin</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>Foto</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <?php
                    $q_view_siswa="select tbl_guru.*,tbl_jurusan.*
                    from tbl_guru
                    left join tbl_jurusan
                    on tbl_guru.id_jur = tbl_jurusan.id_jur";
                    $view_siswa=mysqli_query($koneksi,
                    $q_view_siswa);
                    $no=0;
                    while($mhs=mysqli_fetch_array($view_siswa)){
                    $no++
                  ?>
                  <tbody>
                    <?php
                    // $no = 0;
                    // $query = mysqli_query($koneksi, "SELECT * FROM tbl_siswa");
                    // while($mhs = mysqli_fetch_array($query)){
                    //   $no++
                    ?>
                  <tr>
                    <td width='5%'><?php echo $no?></td>
                    <td><?php echo $mhs['nis'];?></td>
                    <td><?php echo $mhs['nama'];?></td>
                    <td><?php echo $mhs['nama_jur'];?></td>
                    <td><?php echo $mhs['jk'];?></td>
                    <td><?php echo $mhs['agama'];?></td>
                    <td><?php echo $mhs['alamat'];?></td>
                    <td><img src="foto/foto_guru/<?php echo $mhs['foto'];?>" width="100" alt="foto"></td>
                    <td>
                      <a onclick="hapus_data(<?php echo $mhs['id'];?>)" class="btn btn-sm btn-danger">Hapus</a>
                      <a href="index.php?page=edit_data_guru&&id=<?php echo $mhs['id'];?>" class="btn btn-sm btn-success">Edit</a>
                      <a class="view_data_guru btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-view" 
                      data_nis = "<?php echo $mhs['nis'];?>"
                      data_nama = "<?php echo $mhs['nama'];?>"
                      data_jurusan = "<?php echo $mhs['nama_jur'];?>"
                      data_jk = "<?php echo $mhs['jk'];?>"
                      data_agama = "<?php echo $mhs['agama'];?>"
                      data_alamat = "<?php echo $mhs['alamat'];?>">View Data</a>
                    </td>
                  </tr>
                  <?php 
                    }
                  ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>NUPTK</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Jenis kelamin</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>Foto</th>
                    <th>Action</th> 
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  
    <!-- Modal Input Data -->
    <section class="content">
      <div class="container-fluid">
        <div class="modal fade" id="modal-secondary">
            <div class="modal-dialog modal-lg">
              <div class="modal-content bg-secondary">
                <div class="modal-header">
                  <h4 class="modal-title">Input Data Guru</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form action="add/tambah_data_guru.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nis">NUPTK :</label>
                            <input type="text" class="form-control" name="nis" placeholder="Masukkan NIS" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama :</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" required>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan :</label>
                            <select class="form-control" name="jurusan" required>
                                <option value="">Pilih Jurusan...</option>
                                <?php
                                    $q_tampil_jurusan = "SELECT * FROM tbl_jurusan";
                                    $tampil_jurusan = mysqli_query($koneksi, $q_tampil_jurusan);
                                    while ($tampil = mysqli_fetch_array($tampil_jurusan)) {
                                        echo "<option value=$tampil[id_jur]>$tampil[nama_jur]</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin :</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki">
                                <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
                                <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="agama">Agama :</label>
                            <select class="form-control" name="agama" required>
                                <option value="">Pilih Agama...</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat :</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" required>
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

                        <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-outline-light btn-danger" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-outline-light btn-success" name="proses">Submit</button>
                        </div>
                    </form>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->
        </div>
      </section>
    
    <!-- Modal View Data -->
    <section class="content">
      <div class="container-fluid">
        <div class="modal fade" id="modal-view">
            <div class="modal-dialog modal-lg">
              <div class="modal-content bg-secondary">
                <div class="modal-header">
                  <h4 class="modal-title">View Data Guru</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="add/tambah_data.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-body" id="hasil_view_data">

                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-outline-light btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->
        </div>
    </section>
<script>
  function hapus_data(data_id){
    // window.location=("delete/hapus_data.php?id="+data_id);
    Swal.fire({
      title: "Apakah kamu ingin menghapus data ini?",
      // showDenyButton: true,
      showCancelButton: true,
      confirmButtonText: "Hapus Data",
      confirmButtonColor: '#CD5C5C',
      // denyButtonText: `Don't save`
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        window.location=("delete/hapus_data_guru.php?id="+data_id);
      }
    });
  }
</script>