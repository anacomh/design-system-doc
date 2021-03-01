<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="<?php echo ADMIN_CSS; ?>style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo ADMIN_CSS; ?>font-awesome/css/font-awesome.min.css" />
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,900" rel="stylesheet">
<title>Documentation</title>
</head>

<body>

<?//php var_dump($componentitem) ?>
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
			<?php foreach($menu as $menuitem){ ?>
			<nav class="side-menu">
				<a href="<?php echo BASE_URL.'components/detail/'.$menuitem->component_id; ?>">

				<?php if( $menuitem->component_status == 1) {  ?>
				<i class="fa fa-circle" style="font-size:8px;color:#6DD400;margin-bottom:4px;"></i> <?php echo $menuitem->component_title; ?>
				<?php } else { ?>
				<i class="fa fa-circle" style="font-size:8px;color:#ffd400;margin-bottom:4px;"></i> <?php echo $menuitem->component_title; ?>
				<?php } ?>
				</a>
			</nav>
			<?php } ?>

		</div>

		<div class="main-column-right">




