<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>NCDs Food</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="{{action('WelcomeController@index')}}">
					<img src="images/logo07.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="{{action('WelcomeController@index')}}">หน้าแรก</a></li> 
						<li class="nav-item"><a class="nav-link" href="{{action('WelcomeController@food')}}">รายการแนะนำอาหาร</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">บทความ NCDs</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="{{action('WelcomeController@article')}}">NCDs คืออะไร</a>
								<a class="dropdown-item" href="reservation.html">โรคเบาหวาน</a>
								<a class="dropdown-item" href="stuff.html">โรคความดันโลหิต</a>
								<a class="dropdown-item" href="gallery.html">โรคไต</a>
								<a class="dropdown-item" href="{{action('WelcomeController@disease')}}">โรคหัวใจ</a> 
								<a class="dropdown-item" href="gallery.html">โรคไขมันอุดตันในเส้นเลือด</a>
								<a class="dropdown-item" href="gallery.html">โรคกระดูกพรุน</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="{{action('WelcomeController@gallery')}}">อัลบั้มภาพ</a></li> 
						<li class="nav-item"><a class="nav-link" href="{{action('WelcomeController@profile')}}">บัญชีของฉัน</a></li> 
						
						<!-- Authentication Links -->
						{{--@if(Auth::check())--}}
								@guest
									<li class="nav-item">
										<a class="nav-link" href="{{ url('/login') }}"><i class="fa fa-sign-in-alt"></i>  Login</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{ route('register') }}"><i class="fa fa-user-plus"></i> Register</a>
									</li>

								@else
									<li class="nav-item dropdown">
										<a href="#" class="nav-link  dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
											<i class="fa fa-user"></i>
											{{ Auth::user()->name }}
											
											<span class="caret"></span>
										</a>

										<div class="dropdown-menu" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href=" route('logout') }} "
											onclick="event.preventDefault();
															document.getElementById('logout-form').submit();">
												<i class="fa fa-sign-out-alt"></i> Logout
											</a>

											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												{{ csrf_field() }}
											</form>
										</div>
									</li>
								@endguest
						
					</ul>
				</div>
			</div>
		</nav>
	</header>

<title>Menu</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<style>
    * {
        box-sizing: border-box;
        font-size: 16px;
        font-family: "TH-sarabun", sans-serif;
    }

   
</style>

	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Suggest Menu</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Menu -->

	
	<div class="w3-container"> 
		<div class="w3-panel w3-card-4 w3-sand">
	
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<h3>ชื่ออาหาร : ข้าวราดต้มจืดเต้าหู้หมูสับ</h3>
							<img src="images/img-01.jpg" class="img-fluid" alt="image" >
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-12 text-left">
							<div class="inner-column">
							<h2>ข้อมูลโภชนาการ</h2>
								<h4>น้ำหนัก/จาน : 473 กรัม</h4>
								<h4>จำนวนแคลอรี่ : 263  Kcal</h4>
								<h4>Carbohydrate : 21.2 Kcal</h4>
								<h4>Protein : 8.7 Kcal</h4>
								<h4>Lipid : 25.0 Kcal</h4>
								<h4>Sodium : 1282 Miligrams</h4>
								<a class="btn btn-warning" href="#"><i class="fa fa-check" aria-hidden="true"></i> ทานเมนูนี้</a>
							</div>
						</div>					
					</div>
				</div>					
							
			<br>
					
		</div>		
	</div>
		
		<center>
		<a class="btn btn-info" href="#"><i class="fa fa-edit" aria-hidden="true"></i> แก้ไขเมนูอาหาร</a>
		<a class="btn btn-danger" href="#"><i class="fa fa-trash" aria-hidden="true"></i> ลบเมนูอาหาร</a>
		</center>
		<br>

	

				<br>
				<center>
				<a class="btn btn-success" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i> เพิ่มเมนูอาหาร</a>
                </center>
                <br>
	  
	
	<!-- End Menu -->
	
	




    <!-- Start Footer -->
	<footer class="footer-area bg-f">	
		<div class="copyright"> 
			<div class="container"> 
				<div class="row"> 
					<div class="col-lg-12"> 
						<p class="company-name">The Food Suggestion Web-Application for NCDs Patient (เว็บแอปพลิเคชันแนะนำอาหารสำหรับผู้ป่วยในกลุ่มโรค NCDs)</a> <br> 
						<a>มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี</a> <br> 
						<a>ปีการศึกษา 2562</a></p> 
						</div> 
					</div> 
				</div> 
			</div>
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>