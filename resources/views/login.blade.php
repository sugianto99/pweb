<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<title>{{$title}}</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
  	<link rel="stylesheet" href="{{url('plugins/fontawesome-free/css/all.min.css')}}">
  	<link rel="stylesheet" href="{{url('dist/css/adminlte.min.css')}}">
  	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <style>
  .login-page{
    background: url('{{url('dist/img/bg-login.jpg')}}') no-repeat center;
      background-size: cover;
  }
    tr{
      padding: 5px;
    }
    td{
      padding: 5px;
    }
    .kelas{
      text-transform: uppercase;
    }
    /* .card{
      border-radius: 0px;
    }
    .card-header{
      border-radius: 0px;
    } */
  </style>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="assets/img/logo-dark.png" alt="Klorofil Logo"></div>
								<p class="lead"><b>Login to Administrator</b></p>
							</div>
							 <form action="{{url('login')}}" method="post">
      							{{csrf_field()}}
								 <div class="form-group">
						          <div class="input-group mb-3">
						            <input type="email" name="email" class="form-control input-lg" placeholder="Email">
						              <div class="input-group-append">
						                <div class="input-group-text">
						                  <span class="fas fa-user"></span>
						                </div>
						              </div>
						            </div>
						            @error('email')
						              <span class="text-danger" role="alert">{{ $message }}</span>
						            @enderror
						        </div>
						        <div class="form-group">
						          <div class="input-group mb-3">
						            <input type="password" name="password" class="form-control" placeholder="Password">
						              <div class="input-group-append">
						                <div class="input-group-text">
						                  <span class="fas fa-lock"></span>
						                </div>
						              </div>
						            </div>
						            @error('password')
						              <span class="text-danger" role="alert">{{ $message }}</span>
						            @enderror
						        </div>
						        <div class="row">
						          <div class="col-8">
						            <div class="icheck-primary">
						            </div>
						          </div>
						          <div class="col-4">
						            <button type="submit" class="btn btn-primary bg-gradient-primary btn-block btn-flat btn-sm"><i class="fa fa-key"></i> Masuk</button>
						          </div>
								<div class="col-4">		
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="{{url('password/reset')}}">Forgot password?</a></span>
								</div>
						        </div>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading"><B>SELAMAT DATANG DI SISTEM INFORMASI KAMI</B></h1>
							<p>by The Develovers</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->

	<script src="{{url('plugins/jquery/jquery.min.js')}}"></script>
	<script src="{{url('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
	<script>
  		$.widget.bridge('uibutton', $.ui.button)
	</script>
	<script src="{{url('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
