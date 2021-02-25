<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/dist/css/adminlte.min.css">
</head>
<style>
  .login-page {
    background-color: #343A40;
  }
</style>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <img src="<?php echo base_url(); ?>assets/header.png" height="90px" alt="">
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">

        <form action="<?php echo base_url(); ?>index.php/register/proses" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="email" placeholder="Nama" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <input type="password" class="form-control password" name="password" onkeyup="check_password()" placeholder="Password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="retype_password" id="retype_password" onkeyup="check_password()" placeholder="Ulangi Password" required>

            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            <div id="validationServer03Feedback" class="invalid-feedback">
              Password tidak sesuai.
            </div>
            <div class="valid-feedback">
              Password Sesuai.
            </div>

          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-12">
              <button type="submit" class="btn btn-secondary btn-block simpan_btn">Daftar</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?php echo base_url(); ?>assets/theme/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url(); ?>assets/theme/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url(); ?>assets/theme/dist/js/adminlte.min.js"></script>
  <script>
    function check_password() {
      var password = $('.password').val()
      var password_confirm = $('#retype_password').val()
      if (password == password_confirm) {
        console.log("Sukses")
        $('.simpan_btn').attr('disabled', false)
        $('#retype_password').attr('class', 'form-control is-valid')

      } else {
        console.log("Password tidak sama")
        $('.simpan_btn').attr('disabled', true)
        $('#retype_password').attr('class', 'form-control is-invalid')
      }
    }

    var delay = (function() {
      var timer = 0;
      return function(callback, ms) {
        clearTimeout(timer);
        timer = setTimeout(callback, ms);
      };
    })();

    function check_username() {
      $('.simpan_btn').attr('disabled', true)
      $("#loading_icon").attr("class", "fas fa-spinner fa-pulse");
      delay(function() {

        checking_username();
      }, 900)
    }

    function checking_username() {
      $.ajax({
        type: "POST",
        url: "<?php echo base_url() ?>index.php/register/checking_username",
        async: false,
        dataType: 'json',
        data: {
          username: $('#username').val(),
        },
        success: function(data) {
          $("#loading_icon").attr("class", "fas fa-at")
          if (data == true) {
            $('#username').attr('class', 'form-control is-valid')
            $('.simpan_btn').attr('disabled', false)
          } else {
            $('#username').attr('class', 'form-control is-invalid')
            $('.simpan_btn').attr('disabled', true)
          }
        },
        error: function(x, e) {
          console.log("Gagal Mengambil Data")
        } //end error
      });
    }
  </script>
</body>

</html>