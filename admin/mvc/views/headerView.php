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
			<h1 class="main-logo">
				<a href="<?php echo ADMIN_URL; ?>">
					<img src="<?php echo ADMIN_IMG; ?>logo2.png" alt="gridbooks"/>
				</a>
			</h1>
			<!-- Admin Welcome -->
			<div class="welcome">
				<div class="row">
					<div class="col col4 left">
						<!-- welcome pic -->
						<div class="welcome-pic add-background" data-src="<?php echo MEDIA_URL.'user.jpg'; ?>"></div>
					</div>
					<div class="col col8 left">
						<div>Bem-vindo,</div>
						<div>Admin</div>
					</div>
				</div>


			</div>

			<!-- SIDE MENU -->
			<nav class="side-menu">
				<a href="<?php echo ADMIN_URL; ?>">
					<i class="fa fa-home"></i> Home
				</a>
				<a href="<?php echo ADMIN_URL.'orders'; ?>">
					<i class="fa fa-shopping-cart"></i> Encomendas
				</a>
				<a href="<?php echo ADMIN_URL.'messages'; ?>">
					<i class="fa fa-envelope"></i> Mensagens
				</a>
				<a href="<?php echo ADMIN_URL.'books'; ?>">
					<i class="fa fa-book"></i> Livros
				</a>
				<a href="<?php echo ADMIN_URL.'components'; ?>">
					<i class="fa fa-book"></i> Componentes
				</a>				
				<a href="<?php echo ADMIN_URL.'blog'; ?>">
					<i class="fa fa-rss"></i> Blog
				</a>
				<a href="<?php echo ADMIN_URL.'pages/contacts'; ?>">
					<i class="fa fa-map-marker"></i> Contacts
				</a>
				<a href="<?php echo ADMIN_URL.'pages/about'; ?>">
					<i class="fa fa-info"></i> About
				</a>
			</nav>

		</div>

		<div class="main-column-right">

			<div class="top-bar">
				<div class="row">

					<div class="col col4 right text-right">
						<div class="top-menu">
							<a href="<?php echo ADMIN_URL.'login/logout'; ?>">
								<i class="fa fa-sign-out"></i> Logout
							</a>
						</div>
					</div>

				</div>
			</div>

			<div class="admin-content">
