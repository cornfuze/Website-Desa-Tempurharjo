<?php $page = 'home'?>
<div class="hold-transition sidebar-mini">
<div class="wrapper">
<?php include 'menubar.php'?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Beranda</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
   <!-- Main content -->
   <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?=$jumlahBerita?></h3>

              <p>Jumlah Kegiatan</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?=base_url('home/admkegiatan')?>" class="small-box-footer">Edit <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?=$jumlahKeuangan?></h3>

              <p>Jumlah Laporan Keuangan</p>
            </div>
            <div class="icon">
              <i class="ion ion-cash"></i>
            </div>
            <a href="<?=base_url('home/admkeuangan')?>" class="small-box-footer">Edit <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
      </div>
      <!-- /.row (main row) -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->

      <!-- Main content -->
      <!-- /.content -->

  </div>

  <!-- Main Footer -->
  <style>
.main-footer {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: #f8f9fa; /* Ganti dengan warna latar belakang yang diinginkan */
    padding: 10px 20px; /* Sesuaikan dengan padding yang diinginkan */
    text-align: center;
}
  </style>
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Semoga Harimu Menyenangkan
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2023 <a href="https://www.instagram.com/kkn02.tempurharjo/">KKNT UDB II TEMPURHARJO</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?=base_url('asset/plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url('asset/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('asset/dist/js/adminlte.min.js')?>"></script>
<!-- Summernote -->
<script src="<?=base_url('asset/../../plugins/summernote/summernote-bs4.min.js')?>"></script>
<!-- CodeMirror -->
<script src="<?=base_url('asset/../../plugins/codemirror/codemirror.js')?>"></script>
<script src="<?=base_url('asset/../../plugins/codemirror/mode/css/css.js')?>"></script>
<script src="<?=base_url('asset/../../plugins/codemirror/mode/xml/xml.js')?>"></script>
<script src="<?=base_url('asset/../../plugins/codemirror/mode/htmlmixed/htmlmixed.js')?>"></script>
<!-- Page specific script -->
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
</div>

