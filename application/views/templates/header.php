<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<title><?=$title?></title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="#">Diagnostico</a>

	<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
		<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
			<li class="nav-item active">
				<a class="nav-link" href="<?= site_url('login')?>">Log In <span class="sr-only">(current)</span></a>
			</li>
			<?php if(uri_string() == 'principal'):?>
				<li class="nav-item">
					<a class="nav-link" href="<?= site_url('logout')?>">Log Out</a>
				</li>
			<?php endif;?>

		</ul>
	</div>

	<?php if($this->session->flashdata('success')): ?>
		<?php echo'	
					<div class="alert alert-success alert-dismissible fade show" role="alert">
					  <p class="text-success">'.$this->session->flashdata('success').'</p>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					  </button>
					</div>';?>
	<?php endif; ?>

	<?php if($this->session->flashdata('error')): ?>
		<?php echo'	
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  <p class="text-danger">'.$this->session->flashdata('error').'</p>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					  </button>
					</div>';?>
	<?php endif; ?>
</nav>


