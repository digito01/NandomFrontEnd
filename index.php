<?php
session_start();
if(!isset($_SESSION["NameR"])){
	header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en, es">
<head>
	<title> Nandom </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery.js" ></script>
	<script type="text/javascript" src="js/ajax.js" ></script>
	<script type="text/javascript" src="js/ajaxPaises.js" ></script>
	<script type="text/javascript" src="js/ajaxRegistro.js" ></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://code.jquery.com/jquery-2.2.2.min.js" ></script>
   
    <script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>

    <link rel="icon" type="image/x-con" href="img/Arts.png" style="width:2px" >

</head>
<body style="height: 700px" style="weight:100%" >

		<div class="container-fluid" >
			<nav  class="navbar navbar-expand-sm fixed-top justify-content-center" >
				<center>
					<div align="center">
						<a class="navbar-brand" href="index.php"> 
							<img src="img/Nandom.png" alt="logo" style="width:140px">
						</a>
					</div>	
				</center>
				<button class="navbar-toggler" type="button" data-toggle="collapse" 
				data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"   
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon" ></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent" >
					<ul class="navbar-nav mr-auto">
							<li class="nav-item active" >
								<a class="nav-link" href="index.php"> Home <span class="sr-only" >(current)</span> </a>
							</li>
							<li class="nav-item active" >
								<a class="nav-link" href="Register.php"> Register <span class="sr-only" >(current)</span> </a>
							</li>
							<li class="nav-item active" >
								<a class="nav-link" href="login.php"> Login <span class="sr-only" >(current)</span> </a>
							</li>
					</ul>
					      <div>
						 	<?php echo '<p class=textoNombre align=center> Welcome user: '.$_SESSION["NameR"]. '</p>';
									?>

						 </div>

						 <div>
						 	<?php echo '<p align=center> <a href="logout.php"> Logout </a> </p>';	?>

						 </div>

						<form class="form-inline my-2 my-lg-0" method="post" name="Search_form" id="Search_form">
							<div id="padre">
								<div class="row" id="hijo" >
								<div class="col-sm-9"></div>
								<div class="col-sm-2"> <section id="resultados" ></section> </div>
								<div class="col-sm-1"></div>
							</div>
							</div>
								<input class="form-control mr-sm-2" type="text" id="Search" name="Search"  placeholder="Search" aria-label="Search">
							<button title="Rename" class="btn my-2 my-sm-0" > Search</button>
						</form>
				</div>
			</nav>
		</div>


	<br>
	<br>
	<br>
	<br>
	<br>


<div class="container" >
	<div class="row">
				<div class="col-sm-3"></div>
			    <div class="col-sm-6">
			    		 <h2> Random Name Generator</h2>
		<br>
					<h5> Select a name by country! </h5>
					<select class="custom-select my-1 mr-sm-2" id="listaPaises" name="listaPaises">
						<option value="0">Select one option</option>
						<option value="1">Spanish Name</option>
						<option value="2">English Name</option>
						<option value="3">German Name</option>
						<option value="4">Arabic Name</option>
					</select>
					<div id="ResultadosPais" class="ColorResultado"></div>
					<h5>  Click for a Nandom!</h5>
						<div class="espacio" >
						  <button class="botones" class="btn waves-effect waves-light deep-purple
						   light-2 yellow-text text-accent-1" > <a href="php/ShowName.php"
						   > Random name!</a> </button>
						</div>

			    </div>
	</div>
			
</div>
	          
 

</body>


</html>












