<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="dist/js/pages/dashboard2.js"></script> -->

<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

  $('.view_data').click(function(){
    var nis     = $(this).attr('data_nis');
    var nama    = $(this).attr('data_nama');
    var jurusan = $(this).attr('data_jurusan');
    var jk      = $(this).attr('data_jk');
    var agama   = $(this).attr('data_agama');
    var alamat  = $(this).attr('data_alamat');
    $.ajax({
      url:"view/view_data_siswa.php",
      dataType:"html",
      method:"POST",
      data:{nis:nis,nama:nama,jurusan:jurusan,jk:jk,agama:agama,alamat:alamat},
      success: function(data){
        $('#hasil_view_data').html(data);
      }
    });
    console.log(nis);
  })
  $('.view_data_guru').click(function(){
    var nis     = $(this).attr('data_nis');
    var nama    = $(this).attr('data_nama');
    var jurusan = $(this).attr('data_jurusan');
    var jk      = $(this).attr('data_jk');
    var agama   = $(this).attr('data_agama');
    var alamat  = $(this).attr('data_alamat');
    $.ajax({
      url:"view/view_data_guru.php",
      dataType:"html",
      method:"POST",
      data:{nis:nis,nama:nama,jurusan:jurusan,jk:jk,agama:agama,alamat:alamat},
      success: function(data){
        $('#hasil_view_data').html(data);
      }
    });
    console.log(nis);
  })
  $('.view_data_jur').click(function(){
    var nis     = $(this).attr('data_nis');
    var nama    = $(this).attr('data_nama');
    $.ajax({
      url:"view/view_data_jur.php",
      dataType:"html",
      method:"POST",
      data:{nis:nis,nama:nama,},
      success: function(data){
        $('#hasil_view_data').html(data);
      }
    });
    console.log(nis);
  })
  $(document).ready(function(){
    setInterval(function(){
      $('#report-mhs').load("benner.php");
    },1000)
  })
</script>