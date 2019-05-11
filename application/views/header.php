<!DOCTYPE html>
<html>
<head>
  <title> <?php echo $tituloHeader ?></title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style type="text/css">
    body {
  background-color: #eae8e8;
}
  </style>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-info">
		<div class="container">
			
		
  <a class="navbar-brand" href="<?php echo base_url() ?>index.php/principal">HDV App</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>index.php/principal">Principal </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>index.php/principal/identificacion">Tabla Identificacion</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>index.php/principal/cliente">Tabla Cliente</a>
      </li>
    </ul>

 
  </div>
  </div>
</nav>