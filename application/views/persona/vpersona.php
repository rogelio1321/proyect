<!DOCTYPE html>
<html>
<head>
	<
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registrar</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Sign</b>IN</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

   <form action="<?php echo base_url(); ?>cpersona/guardar" method="POST">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="txtDNI" maxlength="8" placeholder="DNI">
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="txtNombre" placeholder="Nombre">
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="txtApPaterno" placeholder="Apellido Paterno">
        
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="txtApMaterno" placeholder="Apellido Materno">
        
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="txtEmail" placeholder="Email">
        
      </div>
      <div class="form-group has-feedback">
        <input type="date" class="form-control" name="datFecNac" placeholder="Fec. Nac">
        
      </div>
      <div class="form-group has-feedback">
        <div class="form-group">
                  <select class="form-control">
                    <option value="">Ciudad</option>
                  </select>
                </div>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="txtUsuario" placeholder="Usuario">
        
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="txtClave" placeholder="Contraseña">
       
     </div>
      <div class="row">
        
        <!-- /.col --> 
        <div class="col-xs-4">
        	<script>
        	function abrir(){
        		window.open("<?php echo base_url();?>clogin")
        	}
        	</script>
          <button type="submit" onclick="abrir()" class="btn btn-primary btn-block btn-flat">Register</button>


        </div>
        <!-- /.col -->
      </div>
      <a href="<?php echo base_url();?>clogin" class="text-center">Log in</a>
    </form>

    
<!-- /.register-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url();?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
<script type="text/javascript">
   var baseurl = "<?php echo base_url();?>";
</script>

</body>
</html>


