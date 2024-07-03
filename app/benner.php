    <?php 
    include('../conf/config.php');
    $query = mysqli_query($koneksi, "SELECT count(id)AS jmlswa FROM tbl_siswa");
    $view = mysqli_fetch_array($query);

    $querya = mysqli_query($koneksi, "SELECT count(id)AS jmlgru FROM tbl_guru");
    $viewa = mysqli_fetch_array($querya);

    $queryo = mysqli_query($koneksi, "SELECT count(id)AS jmljrn FROM tbl_jurusan");
    $viewo = mysqli_fetch_array($queryo);
    ?>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-child"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Jumlah Siswa</span>
                <span class="info-box-number">
                  <?php echo $view['jmlswa']?> Siswa
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-male"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Jumlah Guru</span>
                <span class="info-box-number">
                    <?php echo $viewa['jmlgru']?> Guru
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-male"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Jumlah Jurusan</span>
                <span class="info-box-number">
                    <?php echo $viewo['jmljrn']?> Jurusan
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <!-- <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Sales</span>
                <span class="info-box-number">760</span>
              </div> -->
              <!-- /.info-box-content -->
            <!-- </div> -->
            <!-- /.info-box -->
          <!-- </div> -->
          <!-- /.col -->
          <!-- <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">New Members</span>
                <span class="info-box-number">2,000</span>
              </div> -->
              <!-- /.info-box-content -->
            <!-- </div> -->
            <!-- /.info-box -->
          <!-- </div> -->
          <!-- /.col -->