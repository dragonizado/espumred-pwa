<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?=APPNAME?></title>

	<link rel="manifest" href="<?=$this->asset('json/manifest.json');?>">
	<meta name="theme-color" content="#F77F2E">

	<link rel="icon" type="image/png" sizes="57x57" href="<?= $this->asset('img/57x57.png');?>">
	<link rel="icon" type="image/png" sizes="72x72" href="<?= $this->asset('img/72x72.png');?>">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= $this->asset('img/96x96.png');?>">
	<link rel="icon" type="image/png" sizes="114x114" href="<?= $this->asset('img/114x114.png');?>">
	<link rel="icon" type="image/png" sizes="144x144" href="<?= $this->asset('img/144x144.png');?>">
	<link rel="icon" type="image/png" sizes="192x192" href="<?= $this->asset('img/192x192.png');?>">

	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="white">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-title" content="<?=APPNAME?>">
	<link rel="apple-touch-icon" sizes="192x192" href="<?= $this->asset('img/192x192.png');?>">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			    <a class="navbar-brand" href="#"><?=APPNAME;?></a>
			    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			      <li class="nav-item active">
			        <a class="nav-link" href="<?=$this->createUrl('/')?>">Inicio <span class="sr-only">(current)</span></a>
			      </li>
			      <!-- <li class="nav-item">
			        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
			      </li> -->
			    </ul>
			    <form method="post" action="<?=$this->createUrl('default/logout');?>" class="form-inline my-2 my-lg-0">
				     <input type="submit" class="btn btn-danger" name="btn_logout" value="X">
			    </form>
			  </div>
			</nav>
	</header>
	<div class="container">