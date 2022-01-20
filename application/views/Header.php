<!--
	Author: Gabriel Alcaraz Garcia
-->
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximumm-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Affordable and professional web desing">
    <meta name="keywords" content="web desing, affordable web desing, professional web desing">
    <meta name="author" content="Gabriel Alcaraz">
    <title>HELPCODE</title>
    <link rel="stylesheet" href="<?=base_url()?>css/flexslider.css">
    <link rel="stylesheet" href="<?=base_url()?>css/bootstrap.css">
    <link rel="stylesheet" href="<?=base_url()?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>css/bootstrap-grid.css">
    <link rel="stylesheet" href="<?=base_url()?>css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?=base_url()?>css/bootstrap-reboot.css">
    <link rel="stylesheet" href="<?=base_url()?>css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="<?base_url()?>css/bootstrap.css" type='text/css' />
  	<link rel="stylesheet" href="<?base_url()?>css/owl.carousel.css" type="text/css" media="all">
  	<link rel="stylesheet" href="<?base_url()?>css/owl.theme.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?base_url()?>css/style.css" type='text/css' />
  	<link rel="stylesheet" href="<?base_url()?>css/prettyPhoto.css" type="text/css">
  	<link rel="stylesheet" href="<?base_url()?>css/fontawesome-all.css">
    <link rel="stylesheet" href="<?base_url()?>css/popuo-box.css" type="text/css" media="all" />
  	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
  	<link href="//fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>css/Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
  	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
  	    rel="stylesheet">
  </head>
  <body>
  	<script src="<?base_url()?>js/jquery-3.2.1.js"></script>
  	<script src="<?base_url()?>js/jquery.quicksand.js"></script>
    <script src="<?base_url()?>js/jquery.waypoints.min.js">  </script>
    <script src="<?base_url()?>js/jquery.countup.js">  </script>
    <script src="<?base_url()?>js/jquery.flexslider.js">  </script>
    <script src="<?base_url()?>js/jquery.prettyPhoto.js"></script>
    <script src="<?base_url()?>js/jquery.magnific-popup.js"></script>
    <script src="<?base_url()?>js/jquery-3.3.1.min.js"></script>
    <script src="<?base_url()?>js/jquery-ui.js">  </script>
  	<script src="<?base_url()?>js/script.js"></script>
  	<script src="<?base_url()?>js/bootstrap.js"></script>
  	<script src="<?base_url()?>js/easing.js"></script>
    <script src="<?base_url()?>js/owl.carousel.js"></script>
    <script src="<?base_url()?>js/responsiveslides.min.js"></script>
    <script src="<?base_url()?>js/bootstrap.bundle.js">  </script>
    <script src="<?base_url()?>js/bootstrap.bundle.min.js">  </script>
    <script src="<?base_url()?>js/bootstrap.min.js">  </script>
    <script src="<?base_url()?>js/menu.js">  </script>
    <script src="<?base_url()?>js/move-top.js">  </script>
    <script src="<?base_url()?>js/SmoothScroll.min.js">  </script>
    <script src="<?base_url()?>js/district.js">  </script>
    <script>
  $(document).ready(function(){
	$("#banner").css({"height":$(window).height() + "px"});
	var flag = false;
	var scroll;
	$(window).scroll(function(){
		scroll = $(window).scrollTop();
		if(scroll > 20){
			if(!flag){
				$("#logo").css({"margin-top": "-5px", "width": "100px","height":"100px"});
				$("header").css({"background-color": "rgba(255, 0, 0, 0.15)"});
        $("#menu").css({"font-size": "20px"});
        $("#container1").css({"margin-top": "-280px"});
				flag = true;
			}
		}else{
			if(flag){
				$("#logo").css({"margin-top": "100px", "width": "250px","height":"250px"});
				$("header").css({"background-color": "transparent"});
        $("#menu").css({"font-size": "15px"});
				flag = false;
        $("#container1").css({"margin-top": "-116px"});
			}
		}
	});
});

  	</script>
  <body>
    <header>
      <nav  id="menu">
        <ul>
          <li> <a href="#"> HELPCODE </a> </li>
          <li> <a href="#"> Acerda de </a> </li>
          <li> <a href="#"> Protafolio </a> </li>
        </ul>
        <img src="<?= base_url()?>img/web.PNG" alt="" id="logo" width="250px" height="250px">
        <ul>
          <li> <a href="#"> Blog </a> </li>
          <li> <a href="#"> Equipo </a> </li>
          <li> <a href="#"> Contacto </a> </li>
        </ul>
      </nav>
    </header>
<section id="banner">
	<img src="<?=base_url()?>img/banner2.PNG" alt="" height="500px" width="100%">
  <div id="container1">
		<br>
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12" id="container">
				<br>
				<div class="row">
						<div class="col-lg-5 col-md-5 col-sm-6 xol-xs-12">
							<form class="form" action="<?=base_url()?>Prueba" method="post">
							<select class="form-control" name="Lenguaje" id="Lenguaje">
								<option value="" selected> Lenguaje </option>
								<?php foreach ($Lenguaje as $row): ?>
									<option value="<?=$row -> id_Leng?>"> <?=$row -> Lenguaje?></option>
								<?php endforeach ?>
							</select>
						</div>
						<div class="col-lg-5 col-md-5 col-sm-6 xol-xs-12">
							<input type="text" name="Programa" id="Programa" value="" class="form-control" placeholder="Programa">
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 xol-xs-12">
							<!-- <center> <input type="submit" name="" value="Aceptar" class="btn btn-primary"> </center> -->
							<button type="submit" name="button" class="btn btn-primary"> Aceptar </button>
						</div>
					</form>
			</div>
			<br>
			</div>
		</div>
		<br>
	</div>
</section>
