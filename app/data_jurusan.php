
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable Jurusan</h3>
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
                    <th>Id jurusan</th>
                    <th>Nama Jurusan</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <?php
                    $q_view_siswa="SELECT * FROM `tbl_jurusan`";
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
                    <td><?php echo $mhs['id_jur'];?></td>
                    <td><?php echo $mhs['nama_jur'];?></td> 
                    <td>
                      <a onclick="hapus_data(<?php echo $mhs['id'];?>)" class="btn btn-sm btn-danger">Hapus</a>
                      <a href="index.php?page=edit_data_jur&&id=<?php echo $mhs['id'];?>" class="btn btn-sm btn-success">Edit</a>
                      <a class="view_data_jur btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-view" 
                      data_nis = "<?php echo $mhs['id_jur'];?>"
                      data_nama = "<?php echo $mhs['nama_jur'];?>"
                      >View Data</a>
                    </td>
                  </tr>
                  <?php 
                    }
                  ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Id jurusan</th>
                    <th>Nama Jurusan</th>
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
                  <h4 class="modal-title">Input Data Jurusan</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form action="add/tambah_data_jur.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nis">Id Jurusan :</label>
                            <input type="text" class="form-control" name="id_jur" placeholder="Masukkan ID Jurusan" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Jurusan :</label>
                            <input type="text" class="form-control" name="nama_jur" placeholder="Masukkan Nama Jurusan" required>
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
                  <h4 class="modal-title">View Data Jurusan</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="add/tambah_data_jur.php" method="POST" enctype="multipart/form-data">
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
        window.location=("delete/hapus_data_jur.php?id="+data_id);
      }
    });
  }
</script>