<?php $page = 'adm-keuangan'?>

<!-- Spinner Start -->
<div id="spinner" class="bg-white position-fixed translate-middle w-100 h-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->

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
            <h1 class="m-0">Keuangan</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
   <!-- Main content -->
<style>
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	min-width: 1000px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
	padding-bottom: 15px;
	background: #435d7d;
	color: #fff;
	padding: 16px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.table-title .btn-group {
	float: right;
}
.table-title .btn {
	color: #fff;
	float: right;
	font-size: 13px;
	border: none;
	min-width: 50px;
	border-radius: 2px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-title .btn i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}
.table-title .btn span {
	float: left;
	margin-top: 2px;
}
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th:first-child {
	width: 60px;
}
table.table tr th:last-child {
	width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}	
table.table td:last-child i {
	opacity: 0.9;
	font-size: 22px;
	margin: 0 5px;
}
table.table td a {
	font-weight: bold;
	color: #566787;
	display: inline-block;
	text-decoration: none;
	outline: none !important;
}
table.table td a:hover {
	color: #2196F3;
}
table.table td a.edit {
	color: #FFC107;
}
table.table td a.delete {
	color: #F44336;
}
table.table td i {
	font-size: 19px;
}
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}
</style>
<section class="content">
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Tabel <b>Keuangan</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons" style="vertical-align: middle;">&#xE147;</i> <span style="vertical-align: middle;">Tambah Keuangan Baru</span></a>
                        </div>
                    </div>
                </div>
                
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Jenis Keuangan</th>
                            <th>Tautan File</th>
                            <th>Tahun</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($kegiatan as $a):?>
                        <tr>
                            <td><?=$a['id_keuangan']?></td>
                            <td><?=$a['jenis_keuangan']?></td>
                            <td><a href="<?=$urlimg.$a['link']?>" target="_blank"><?=$a['link']?></a></td>
                            <td><?=$a['tahun']?></td>
                            <td>
                                <a href="#editEmployeeModal" class="edit" data-toggle="modal" onclick="getdataedit(<?=$a['id_keuangan']?>, 'getKeuangan')"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal" onclick="deletedata(<?=$a['id_keuangan']?>)"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>        
    </div>
    
    <!-- Add Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">						
                        <h4 class="modal-title">Tambah Keuangan Baru</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">		
                        <div class="form-group">
                            <label for="jenis">Jenis Keuangan</label>
                            <select class="form-control" id="Addjenis">
                            <?php foreach($jenis_kegiatan as $b):?>
                              <option><?=$b?></option>
                            <?php endforeach?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tahun</label>
                            <input type="text" id="Addtahun" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Preview File</label><br>
                            <object id="Addpreviewpdf" type="application/pdf" width="100%" height="400"></object>
                            <input type="file" id="Addfile" class="form-control-file" onchange="showPDFPreview('Add')" accept=".pdf">
                            <button type="button" onclick="cancelFileSelection('Add')">Cancel</button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="button" id="save-button" class="btn btn-success" value="Add" onclick="saveContent('Add')">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <input type="hidden" id="idkeuangan" class="form-control" >
                    <div class="modal-header">						
                        <h4 class="modal-title">Edit Keuangan</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">		
                        <div class="form-group">
                            <label for="jenis">Jenis Keuangan</label>
                            <select class="form-control" id="Editjenis">
                            <?php foreach($jenis_kegiatan as $b):?>
                              <option><?=$b?></option>
                            <?php endforeach?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tahun</label>
                            <input type="text" id="Edittahun" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Preview File</label><br>
                            <object id="Editpreviewpdf" type="application/pdf" width="100%" height="400"></object>
                            <input type="file" id="Editfile" class="form-control-file" onchange="showPDFPreview('Edit')" accept=".pdf">
                            <button type="button" onclick="cancelFileSelection('Edit')">Cancel</button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="button" id="save-button" class="btn btn-success" value="Add" onclick="saveContent('Edit')">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
    <!-- Delete Modal HTML -->
    <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">						
                        <h4 class="modal-title">Delete Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">					
                        <p>Are you sure you want to delete these Records?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="button" class="btn btn-danger" value="Delete" onclick="deleteContent(deleteid)">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

  <!-- /.content -->

      <!-- Main content -->
      <!-- /.content -->
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
    <strong>Copyright &copy; 2023 <a href="https://www.instagram.com/kkn02.tempurharjo/" target="_blank">KKNT UDB II TEMPURHARJO</a>.</strong> All rights reserved.
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
<!--Script-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- Page specific script -->
<script>

var deleteid;

var tmppdfsrc;

function getdataedit(id, type){
    var getUrl = '<?=base_url('home/getdataedit/')?>'+ id + '/' + type;

    fetch(getUrl)
    .then(response => {
        if (response.ok) {
            return response.json();
        } else {
            throw new Error('Network response was not ok');
        }
    })
    .then(data => {
        // Handle the array data
        //console.log('Data:', data);

        // Now you can loop through the array and access individual items
        data.forEach(item => {
            document.getElementById('idkeuangan').value = (item.id_keuangan);
            document.getElementById('Editjenis').value = (item.jenis_keuangan);
            document.getElementById('Edittahun').value = (item.tahun);
            document.getElementById('Editpreviewpdf').data = ('<?=$urlimg?>'+item.link);
            tmppdfsrc = item.link;
        });

        // You can use the array data as needed
        // ...
    })
    .catch(error => {
        console.error('Fetch error:', error);
    });
}

function showPDFPreview(input) {
    // Get the file input element
    var fileInput = document.getElementById(input + 'file');

    // Get the PDF preview element
    var PDFPreview = document.getElementById(input + 'previewpdf');

    // Check if a file is selected
    if (fileInput.files && fileInput.files[0]) {
        var reader = new FileReader();

        // Set up the FileReader to read the file as ArrayBuffer
        reader.onload = function (e) {
            // Set the data attribute of the <object> element to the Blob URL obtained from FileReader
            var blob = new Blob([e.target.result], { type: 'application/pdf' });
            var blobUrl = URL.createObjectURL(blob);
            PDFPreview.data = blobUrl;
        };

        // Read the file as ArrayBuffer
        reader.readAsArrayBuffer(fileInput.files[0]);
    }
}



function deletedata(id){
    deleteid = id ;
}

function deleteContent(deleteid){
    var deleteUrl = '<?=base_url('home/hapuskeuangan/')?>'+deleteid;

    // Gunakan fetch API untuk mengirim konten ke server dan menyimpannya di database
    fetch(deleteUrl, {
        method: 'GET',
    })
    .then(response => {
        if (response.ok) {
            console.log('Data saved successfully.');
            location.reload();
        } else {
            console.error('Error saving data.');
        }
    })
    .catch(error => {
        console.error('Fetch error:', error);
    });
}

function saveContent(input) {
    document.getElementById('spinner').classList.toggle('show');
    
    var formData = new FormData();
    
    var id = document.getElementById('idkeuangan').value;
    var jenis = document.getElementById(input+'jenis').value;
    var tahun = document.getElementById(input+'tahun').value;
    var file = document.getElementById(input+'file').files[0];
    
    formData.append('id_keuangan', id);
    formData.append('jenis_keuangan', jenis);
    formData.append('tahun', tahun);
    formData.append('file', file);
    formData.append('tmppdfsrc', tmppdfsrc);

    // Pastikan URL endpoint sesuai dengan kebutuhan Anda
    var saveUrl = '<?=base_url('home/simpankeuangan/')?>'+input;

    // Gunakan fetch API untuk mengirim konten ke server dan menyimpannya di database
    fetch(saveUrl, {
        method: 'POST',
        body: formData,
    })
    .then(response => {
        if (response.ok) {
            console.log('Data saved successfully.');
            location.reload();
            return response.text();
        } else {
            console.error('Error saving data.');
        }
    })
    .catch(error => {
        console.error('Fetch error:', error);
    });
}

function cancelFileSelection(input) {
    // Reset the file input
    document.getElementById(input+'file').value= '';
    if(input == 'Edit'){
        document.getElementById(input+'previewpdf').data = '<?=$urlimg?>'+tmppdfsrc;
    }
    if (input == 'Add'){
        document.getElementById(input+'previewpdf').data = '';
    }
  }
    
document.addEventListener("DOMContentLoaded", function () {

//document.getElementById('save-button').addEventListener('click', saveContent());
});
</script>
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
<style>
    /*** Spinner ***/
#spinner {
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.5s ease-out, visibility 0s linear 0.5s;
  z-index: 99999;
}

#spinner.show {
  transition: opacity 0.5s ease-out, visibility 0s linear 0s;
  visibility: visible;
  opacity: 1;
}
</style>
