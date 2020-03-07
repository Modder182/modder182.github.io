<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="yandex-verification" content="8f31522ceb266bd1" />
	<title>UnitDle</title>
	<link rel="stylesheet" 
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script 
	src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
	<link rel="shortcut icon" type="image/png" href="img/shotcut-icon.png"/>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top mynav">
	 <div class="container-fluid">
	  	<a href="#" class="navbar-brand"><img src="img/logo.png"></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" 
		  data-target="#navbarResponsive">
		  	<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" 
		  id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
			  <a href="#" class="nav-link">Home</a>
			  </li>
			  <li class="nav-item">
			  <a href="#" class="nav-link">About</a>
			  </li>
			  <li class="nav-item">
			  <a href="#" class="nav-link">Blog</a>
			  </li>
			  <li class="nav-item">
			  <a href="#" class="nav-link">Services</a>
			  </li>
			  <li class="nav-item">
			  <a href="#" class="nav-link">Contacts</a>
			  </li>
			  <div class="line"></div>
			</ul>
		  </div>
		</div>
	</div>
	</nav>
	<div class="carousel slide" data-ride="carousel" data-interval="7000" id="slides">
	  <ul class="carousel-indicators">
	    <li data-target="#slides" data-slide-to="0" class="active"></li>
		<li data-target="#slides" data-slide-to="1"></li>
		<li data-target="#slides" data-slide-to="2"></li>
	  </ul>
	   <div class="carousel-inner">
		  <div class="carousel-item active">
			<img src="img/slider_1.jpg">
		      	<div class="carousel-caption">
			  	<h1 class="display-2">Megacities</h1>
			  	<h3>Landspaces</h3>
			  	<button type="button" class="btn btn-outline-light btn-lg">View</button>
				</div>
			</div>
		  <div class="carousel-item">
			<img src="img/slider_2.jpg">
		  </div>
		  <div class="carousel-item">
			<img src="img/slider_3.jpg">
		  </div>
		</div>
		<div class="container-fluid">
		 <div class="row jumbotron">
		  <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
			<p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
			Voluptatem in fuga autem sequi consequuntur, doloribus officiis esse necessitatibus error. 
			Architecto officia laborum nisi reprehenderit odit debitis sunt, at eius ipsum. 
			Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
			Ratione vel ab quae eius illum fugiat cupiditate voluptatibus eos amet id deserunt doloremque maiores ea, voluptatum, alias eaque facere provident esse.
			</p>
		  </div>
		  <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
			<a href="#"><button class="btn btn-success btn-lg" type="button">Next</button></a>
		  </div>
		</div>
		<div class="container-fluid">
		  <div class="row text-center alert">
			<div class="col-12">
			  <h1 class="display-4">Our Services</h1>
			</div>
			<hr>
			<div class="col-12">
			  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
			  Nam asperiores cumque numquam ab optio hic, commodi, ipsum cupiditate maxime libero accusamus pariatur! Necessitatibus distinctio ratione vitae quasi fugiat quos minima?
			  </p>
			</div>
		</div>
		<div class="container-fluid padding">
			<div class="row text-center padding">
				<div class="col-xs-12 col-sm-6 col-md-4">
					<i class="far fa-compass"></i>
					<h3>Travel Gid</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<i class="fas fa-map-marked-alt"></i>
					<h3>Interesting routes</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<i class="fas fa-archway"></i>
					<h3>Architecture</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<i class="fas fa-concierge-bell"></i>
					<h3>Restaraunts</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<i class="fas fa-hotel"></i>
					<h3>Hotels</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<i class="fas fa-bus-alt"></i>
					<h3>Transport</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
				</div>
		  </div>
		  <div class="container-fluid padding">
		  	<div class="row text-center padding">
			  <div class="col-lg-offset-3 col-lg-6">
			  <form action="mail.php" method="POST">
				  <div class="form-group">
				  	<label for="">Имя</label>
					<input type="text" class="form-control" id="" name="user_name" placeholder="
					Ваше Имя">
				  </div>
				  <div class="form-group">
				  	<label for="">Почта</label>
					<input type="email" class="form-control" id="" name="user_email" placeholder="
					Введите почту с @">
				  </div>
				  <div class="form-group">
				  	<label for="exampleInputPhone2">Телефон</label>
					<input type="text" maxlength="12" class="form-control" id="" name="user_phone" placeholder="
					+7 000 000 00 00">
				  </div>
				  <button type="submit" class="btn btn-default">Отправить</button>
				</form>
	</div>
</body>
</html>