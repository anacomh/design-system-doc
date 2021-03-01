<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="<?php echo ADMIN_CSS; ?>style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo ADMIN_CSS; ?>font-awesome/css/font-awesome.min.css" />
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Administration</title>
</head>

<body>


	<div class="main-container">

		<div class="main-column-left">

			<!-- Admin logo -->
			<div class="main-logo">
				<h1><a href="<?php echo BASE_URL; ?>">Documentação</a></h1>
				<div class="main-links">
					<i class="fa fa-home" style="margin-right:4px;margin-bottom:30px;"></i><a href="<?php echo BASE_URL; ?>">Home</a>
					<i class="fa fa-home" style="margin-right:4px;margin-bottom:30px;"></i><a href="<?php echo ADMIN_URL; ?>">Admin</a>
				</div>
			</div>
	
			<!-- SIDE MENU -->
			<nav class="side-menu">
				<a href="<?php echo ADMIN_URL.'components'; ?>">
					<i class="fa fa-book"></i> Componentes
				</a>				
				<div class="divisor"></div>
				<a href="<?php echo ADMIN_URL.'login/logout'; ?>">
								<i class="fa fa-sign-out"></i> Logout
				</a>
			</nav>

		</div>

		<div class="main-column-right">


			<div class="admin-content">
