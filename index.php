<!DOCTYPE html>
<html>
<head>
	<title>Online Doctor Apponintment System</title>

	<link href="./css/bootstrap.min.css" rel="stylesheet" integrity="" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./css/mycss.css">
	<style type="text/css">
		.section-header .sub-title{
			color: #757575;
		    font-size: 16px;
		    max-width: 600px;
		    margin: 15px auto 0;
		}
		.section-header h2{
			font-size: 36px;
		    margin-bottom: 0;
		    font-weight: 500;
		}
		.navbar {
			padding-top: 0px;
			background-color: #FFFFFF !important;
		}
		.nav-item a, .btn-login{
			color: #000000 !important;
		}
		.nav-link{
			font-weight: bolder;
			font-size: 18px;
		}
		.dropdown-menu{
			text-align: center !important;
		} 
	</style>
	<script src="./js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body style="font-family: sans-serif;text-align: center;">
	<!-- sans-serif, cursive -->

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="index.php"><img src="./images/logo.png"></a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="#">Home</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Link</a>
	        </li>
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Doctors
	          </a>
	          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
	            <li><a class="dropdown-item" href="#">Action</a></li>
	            <li><a class="dropdown-item" href="#">Another action</a></li>
	            <!-- <li><hr class="dropdown-divider"></li> -->
	            <li><a class="dropdown-item" href="#">Something else here</a></li>
	          </ul>
	        </li>
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Patients
	          </a>
	          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
	            <li><a class="dropdown-item" href="#">Action</a></li>
	            <li><a class="dropdown-item" href="#">Another action</a></li>
	            <li><a class="dropdown-item" href="#">Something else here</a></li>
	          </ul>
	        </li>
	      </ul>
	      <div class="d-flex">
				<button class="btn btn-outline-success btn-login"data-bs-toggle="modal" data-bs-target="#loginSignupModal" style="width: fit-content;">Login/signup</button>

				<!-- Modal -->
				<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="loginSignupModal" tabindex="-1" aria-labelledby="loginSignupModal" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable">
				    <div class="modal-content">
				        <div class="modal-header">
					        <h5 class="modal-title" id="loginSignupModal">Modal title</h5>
					        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				        </div>
				        <div class="modal-body">
				        

							<form class="row g-3 needs-validation" novalidate>
								<div class="col-md-12">
									<input type="text" class="form-control" id="validationCustom01" required placeholder="username">
									<div class="valid-feedback">Looks good!</div>
								</div>
								<div class="col-md-12">
									<input type="password" class="form-control" id="validationCustom02" required placeholder="password">
									<div class="valid-feedback">Looks good!</div>
								</div>
								<div class="col-12">
									<button class="btn btn-primary" type="submit" style="width: 100%;">Login</button>
								</div>
							</form>
				        </div>
				    </div>
				  </div>
				</div>
				
	      </div>	      
	    </div>
	  </div>
	</nav>
	<div class="container-fluid" style="background-color: #f9f9f9; min-height: 300px;">
		<div class="row">
			<div class="col">
				<div class="container" style="text-align: center;">
					<h1 style="margin-bottom: 10px;font-size: 40px;font-weight: 600;margin-top: 65px;">Search Doctor, Make an Appointment</h1>
					<p style="color: #757575;font-size: 20px;margin-bottom: 0;">Discover the best doctors, clinic & hospital the city nearest to you.</p>
				</div>

			</div>
				<form class="d-flex flex-row justify-content-center" style="margin-top: 20px;">
					<input class="form-control me-2" type="search" placeholder="Search based on your Location" aria-label="Search" style="width:350px;">
					<input class="form-control me-2" type="search" placeholder="Ex : Dental or Sugar Check up etc" aria-label="Search" style="width:350px;">
					<button class="btn btn-outline-success form-control me-1" type="submit" style="width: fit-content;">Search</button>
				</form>			
		</div>
	</div>


	<section id="footer">
		<div class="container">
			<div class="row text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Videos</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Videos</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Imprint</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				<hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p><u><a href="#">Lorem Ipsum</a></u> s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
					<p class="h6">© All right Reversed.<a class="text-green ml-2" href="#" target="_blank">Lorem Ipsum</a></p>
				</div>
				<hr>
			</div>	
		</div>
	</section>
</body>
</html>