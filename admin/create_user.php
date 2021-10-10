<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Create User || Admin</title><!-- 
	<link rel="stylesheet" type="text/css" href="../style.css"> -->
	<style>
			* { margin: 0px; padding: 0px; }
body {
	font-size: 120%;
	font-family: 'Courier New', monospace;
	background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(../img/bg.jpg);
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    color: white;
    
}
		.header {
		width: 50%;
		margin: 50px auto 0px;
		color: white;
		background: linear-gradient(to top left, #cc6600 0%, #993300 100%);
		text-align: center;
		border: 1px solid #B0C4DE;
		border-bottom: none;
		border-radius: 10px 10px 0px 0px;
		padding: 20px;
		}
		form{
  		background: linear-gradient(to top left, #cc6600 0%, #993300 100%);
  		width: 50%;
  		color: white;
		margin: 0px auto;
		padding: 20px;
		border: 1px solid #B0C4DE;
		border-radius: 0px 0px 10px 10px;
  }
		button[name=register_btn] {
			background: green;
		}
		button {
  		width: 97%;
  		background-color: green;
  		color: white;
  		padding: 14px 20px;
  		margin: 8px 0;
  		border: none;
  		border-radius: 4px;
  		cursor: pointer;
		}

		button:hover {
  		background-color: red;
		}
		select {
		height: 30px;
		width: 96%;
		padding: 5px 10px;
		font-size: 15px;
		border-radius: 5px;
		border: 1px solid gray;
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
	</style>
</head>
<body>
	<div class="header">
		<h2>Admin - create user</h2>
	</div>
	
	<form method="post" action="create_user.php">

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
			<label>User type</label>
			<select name="user_type" id="user_type" >
				<option hidden=""></option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select>
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
			<button type="submit" class="btn" name="register_btn"> + Create user</button>
		</div>
	</form>
</body>
</html>