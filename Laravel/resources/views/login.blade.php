<!DOCTYPE html>
<html lang="en">
<head>
	<!-- meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	
	<!-- mobile specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	
	<!-- CSS Offline -->
    <link rel="stylesheet" href="site.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
	
</head>
<body class="bg-light">
    <div class="container">
		<div class="row">
            <div class="col-sm-8 col-md-8 col-md-offset-8">
                <img class="login-img" src="img/login-wifi2.jpg" />
            </div>
            <div class="col-sm-4 col-md-4 col-md-offset-4">
                				<!-- Logo -->
				<img class="logo-title" src="img/IANMNet.svg" />
				<!-- Form -->
				<div class="account-wall">
<?php
    if(!isset($_GET['status'])){
        $_GET['status'] = ' ';
    }
    switch($_GET['status']){
		default:
?>				
					<form action="/" method="">
						<div class="form-group input-group groups">
							<span class="input-group-text icons bg-secondary"><i class="fa fa-user fa-2x"></i></span>
							<input type="text" class="form-control form-input" name="username" placeholder="Masukkan Username">
						</div>
						
						
						<div class="form-group input-group groups">
							<span class="input-group-text icons bg-secondary"><i class="fa fa-lock fa-2x"></i></span>
							<input type="password" class="form-control form-input" id="form-password" name="password" placeholder="Masukkan password">
						</div>
                        <div class="form-group">
						    <div class="checkboxcss" style="color:rgb(0, 0, 0); float:right;"><input type="checkbox" onchange="document.getElementById('form-password').type = this.checked ? 'text' : 'password'">Lihat Kata Sandi</div>
							<div class="checkboxcss" style="color:rgb(0, 0, 0);"><input type="checkbox" name="remember" value="on">Ingat Saya</div>
						</div>
                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-md btn-primary btn-block" name="signin">Masuk</button>
                        </div>
                        
					</form>
				</div>
				<p class="text-center new-account">Sudahkah Anda mendaftar belum? <a href="?status=signup">Buat akun baru</a></p>
				<p class="text-center new-account"><a href="?status=resetuser">Reset Kata Sandi</a></p>
			</div>

<?php
    break;
    case 'signup';
?>

				<form action="?status=signup" method="post">
						<div class="form-group input-group groups">
							<span class="input-group-text icons bg-secondary"><i class="fa fa-user fa-2x"></i></span>
							<input type="text" class="form-control form-input" name="fullname" placeholder="Masukkan nama lengkap Anda">
						</div>
						
						
						<div class="form-group input-group groups">
							<span class="input-group-text icons bg-secondary"><i class="fa fa-user fa-2x"></i></span>
							<input type="text" class="form-control form-input" name="user" placeholder="Masukkan Username">
						</div>
						
						
						<div class="form-group input-group groups">
							<span class="input-group-text icons bg-secondary"><i class="fa fa-key fa-lg"></i></span>
							<input type="password" class="form-control form-input" name="pass" placeholder="Masukkan password">
						</div>
						
						
						<div class="form-group input-group groups">
							<span class="input-group-text icons bg-secondary"><i class="fa fa-lock fa-2x"></i></span>
							<input type="password" class="form-control form-input" name="cpass" placeholder="Ulangi password">
						</div>
						
						<div class="text-center mt-3">
                            <button type="submit" class="btn btn-md btn-primary btn-block" name="signup">Daftar</button>
                        </div>
						
					</form>
				</div>
				<p class="text-center w">Pernah jadi anggota? <a href="login">Masuk</a></p>
			</div>

<?php
    break;
    case "resetuser";
?>

					<form action="?status=resetuser" method="post">
						<div class="form-group input-group groups">
							<span class="input-group-text icons bg-secondary"><i class="fa fa-user fa-2x"></i></span>
							<input type="text" class="form-control form-input" name="user" placeholder="Masukkan Username">
						</div>
						<div class="text-center mt-3">
                            <button type="submit" class="btn btn-md btn-primary btn-block" name="reset">Reset</button> 
                        </div>
						
					</form>
				</div>
				<p class="text-center new-account">Pernah jadi anggota? <a href="login">Masuk</a></p>
				<p class="text-center new-account">Sudahkah Anda mendaftar belum? <a href="?status=sighup">Buat akun baru</a></p>
			</div>

		</div>
	</div>
<?php
    break;
}
?>

	
</body>
</html>