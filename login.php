<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="../ConecBolivia2/css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
	
</head>
<body>
		<div class="caja">
			<?php 
				include './includes/templades/header.php';
			?>
		</div>
		<div class="box-p">
			<div class="main">  	
				<input type="checkbox" id="chk" aria-hidden="true">

					<div class="signup">
						<form>
							<label for="chk" aria-hidden="true">Sign up</label>
							<input type="text" name="txt" placeholder="Nombre " required="">
							<input type="text" name="txt" placeholder="Apellido " required="">
							<input type="email" name="email" placeholder="Email" required="">
							<input type="password" name="pswd" placeholder="Password" required="">
							<button>Sign up</button>
						</form>
					</div>

					<div class="login">
						<form method="post">
							<label for="chk" aria-hidden="true">Login</label>
							<input type="email" name="email" placeholder="Email" required="">
							<input type="password" name="pswd" placeholder="Password" required="">
							<button>Login</button>
						</form>
					</div>
			</div>
		</div>
</body>
</html>