<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Information of Otago</title>
    <meta charset="utf-8" />    
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link rel="shortcut icon" href="img/logo/favicon.ico">
	<!-- css -->
	<link href="css/index.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/central_otago.css" rel="stylesheet" type="text/css" media="all"> 
	
	<?php
	$region = $_GET['id'];
	if($region=='dunedin' or $region=='queens'){
	?>
	<link href="css/dunedin-js-image-slider.css" rel="stylesheet" type="text/css" media="all">  
	<?php
	}
	else{
	?>
	<link href="css/index-js-image-slider.css" rel="stylesheet" type="text/css" media="all">  
	<?php
 	}
	?>
    <?php
    if($region=="version2"){
	?>
    <link href="css/index_version2.css" rel="stylesheet" type="text/css" media="all">
    <?php
	}
	?>
    
    
    

	<link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet" media="all">
	<link href="lib/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" media="all"> 
  	
 </head>

 <body>
