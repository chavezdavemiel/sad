<?php include('functions.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration || PHP</title>
</head>
<style type="text/css">
	* { margin: 0px; padding: 0px; }
	body {
	font-size: 120%;
	font-family: 'Courier New', monospace;
	background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(img/bg.jpg);
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    color: white;
    
}
	.header{
	width: 40%;
	margin: 50px auto 0px;
	color: white;
	text-align: center;
	border: 1px solid #B0C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;
		background: linear-gradient(to top, #cc6600 0%, #cc3300 100%);
	}
	form{
	background: linear-gradient(to bottom, #cc6600 0%, #cc3300 100%);
	width: 40%;
	margin: 0px auto;
	padding: 20px;
	border: 1px solid #B0C4DE;
	border-radius: 0px 0px 10px 10px;
	}
	.input-group {
	margin: 10px 0px 10px 0px;
}
.input-group label {
	display: block;
	text-align: left;
	margin: 3px;
}
.input-group input {
	height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}
	button{
		color: white;
		background-color: green;
		width: 97%;
		padding: 10px;
	font-size: 15px;
	color: white;
	border: none;
	border-radius: 5px;
	font-family: 'Courier New', monospace;	
	}
	button:hover{
		background-color: red;
	}

</style>
<body>
<div class="header" >
	<h2>Register</h2>
</div >
<div class="contanier">
<form method="post" action="register.php">
	<?php echo display_error(); ?>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php" style="color: white;">Sign in</a>
	</p>
</form>
</div>
</body>
</html>