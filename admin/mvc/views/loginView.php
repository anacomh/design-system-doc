<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="<?php echo ADMIN_CSS; ?>style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo ADMIN_CSS; ?>font-awesome/css/font-awesome.min.css" />
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Administration</title>
</head>

<body id="login-body">

	<div class="login-container">
		<div class="login-module">
			<h1>
				<img src="<?php echo IMG_URL.'logo.png'; ?>" />
			</h1>
			<form action="<?php echo ADMIN_URL.'login/login'; ?>" method="post" class="login-form">
				<input type="text" name="username" placeholder="Username" required/>
				<input type="password" name="password" placeholder="Password" required/>
				<input type="submit" value="Login" />
			</form>
		</div>
	</div>

	<script type="application/javascript" src="<?php echo ADMIN_JS; ?>jquery3.1.1.js"></script>
	<script type="application/javascript" src="<?php echo ADMIN_JS; ?>script.js"></script>

</body>
</html>
