<!DOCTYPE html>
<html lang="en">
<!--<head>-->
<!--  <meta charset="utf-8">-->
<!--  <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--  <title>Admin  Desa Tempurharjo | Log in</title>-->

  <!-- Google Font: Source Sans Pro -->
<!--  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">-->
  <!-- Font Awesome -->
<!--  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">-->
  <!-- icheck bootstrap -->
<!--  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">-->
  <!-- Theme style -->
<!--  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">-->
<!--</head>-->
<div class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
        <a href="../../index2.html" class="h1"><b>Admin </b>Desa</a>
    </div>
    <div class="card-body">
        <p class="login-box-msg">Masukan Username dan Password</p>

        <form id="loginForm">
            <div class="input-group mb-3">
                <input type="text" id="username" class="form-control" placeholder="Username">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" id="password" class="form-control" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div id="error-message" class="text-danger"></div>
            <div class="row">
                <div class="col-8">
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="button" onclick="validateForm();" class="btn btn-primary btn-block">Masuk</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
    </div>
    <!-- /.card-body -->
</div>

  <!-- /.card -->
</div>
<!-- /.login-box -->

<script>
    function processLogin(data){
        if (data){
            window.location.href = '<?=base_url('home')?>';
        }
    }

  function validateForm() {
      var username = document.getElementById('username').value;
      var password = document.getElementById('password').value;
      
      var getUrl = '<?=base_url('home/validateuser/')?>'+ username + '/' + password;
    
        fetch(getUrl)
        .then(response => {
            if (response.ok) {
                return response.json();
            } else {
                var errorMessage = document.getElementById('error-message');
                errorMessage.innerHTML = "Username atau password salah.";
                throw new Error('Network response was not ok');
            }
        })
        .then(data => {
            if(data){
                return processLogin(data);
            }else {
                var errorMessage = document.getElementById('error-message');
                errorMessage.innerHTML = "Username atau password salah.";
            }
        })
        .catch(error => {
            console.error('Fetch error:', error);
        });
  }
</script>
<script src="<?=base_url('asset/plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url('asset/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('asset/dist/js/adminlte.min.js')?>"></script>
</div>
</html>
