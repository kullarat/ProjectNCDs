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
					<img src="images/logo07.png" alt=""/>
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
	
	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-center">
				<img src="images/slider-04.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>NCDs FOOD</strong></h1>
							<p class="m-b-40">เว็บแอปพลิเคชันแนะนำอาหารสำหรับผู้ป่วยในกลุ่มโรค NCDs</p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="images/slider-02.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>NCDs FOOD</strong></h1>
							<p class="m-b-40">เว็บแอปพลิเคชันแนะนำอาหารสำหรับผู้ป่วยในกลุ่มโรค NCDs</p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="images/slider-05.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>NCDs FOOD</strong></h1>
							<p class="m-b-40">เว็บแอปพลิเคชันแนะนำอาหารสำหรับผู้ป่วยในกลุ่มโรค NCDs</p>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
		
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-left">
					<p class="lead ">
						" If you're not the one cooking, stay out of the way and compliment the chef. "
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Special Menu</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="special-menu text-center">
						<div class="button-group filter-button-group">
							<button class="active" data-filter="*">เมนูทั้งหมด</button>
							<button data-filter=".breakfast">อาหารเช้า</button>
							<button data-filter=".lunch">อาหารกลางวัน</button>
							<button data-filter=".dinner">อาหารเย็น</button>
						</div>
					</div>
				</div>
			</div>
				
			<div class="row special-list">
				<div class="col-lg-4 col-md-6 special-grid breakfast">
					<div class="gallery-single fix">
						<img src="images/img-01.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>ข้าวราดต้มจืดเต้าหู้หมูสับ</h4>
							<p></p>
							<h3> น้ำหนัก/จาน (กรัม) &nbsp; 473.0</h3>
							<h3> พลังงาน (kcal)   &nbsp; 263.0</h3>
							<h3> โปรตีน (กรัม)      &nbsp; 21.2</h3>
							<h3> ไขมัน (กรัม)     &nbsp;   8.7</h3>
							<h3> คาร์โบไฮเดรต (กรัม) &nbsp;25.0</h3>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid breakfast">
					<div class="gallery-single fix">
						<img src="images/img-02.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4>ข้าวราดไข่เจียวสมุนไพร</h4>
							<p></p>
							<h3> น้ำหนัก/จาน (กรัม)   &nbsp;276.0</h3>
							<h3> พลังงาน (kcal)     &nbsp;579.0</h3>
							<h3> โปรตีน (กรัม)       &nbsp;14.0</h3>
							<h3> ไขมัน (กรัม)        &nbsp;27.9</h3>
							<h3> คาร์โบไฮเดรต (กรัม) &nbsp;68.0</h3>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="images/img-03.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4>ข้าวราดแกงส้มชะอมทอด</h4>
							<p></p>
							<h3> น้ำหนัก/จาน (กรัม)   &nbsp;370.0</h3>
							<h3> พลังงาน (kcal)     &nbsp;397.0</h3>
							<h3> โปรตีน (กรัม)       &nbsp;13.9</h3>
							<h3> ไขมัน (กรัม)        &nbsp;12.7</h3>
							<h3> คาร์โบไฮเดรต (กรัม) &nbsp;56.6</h3>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid breakfast">
					<div class="gallery-single fix">
						<img src="images/img-04.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4>ข้าวราดผัดผักรวม</h4>
							<p></p>
							<h3> น้ำหนัก/จาน (กรัม)   &nbsp;282.0</h3>
							<h3> พลังงาน (kcal)     &nbsp;332.0</h3>
							<h3> โปรตีน (กรัม)       &nbsp;8.8</h3>
							<h3> ไขมัน (กรัม)        &nbsp;5.9</h3>
							<h3> คาร์โบไฮเดรต (กรัม) &nbsp;60.9</h3>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="images/img-05.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4>ข้าวราดยำไข่ดาว</h4>
							<p></p>
							<h3> น้ำหนัก/จาน (กรัม)   &nbsp;366.0</h3>
							<h3> พลังงาน (kcal)     &nbsp;638.0</h3>
							<h3> โปรตีน (กรัม)       &nbsp;19.9</h3>
							<h3> ไขมัน (กรัม)        &nbsp;28.5</h3>
							<h3> คาร์โบไฮเดรต (กรัม) &nbsp;75.3</h3>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid dinner">
					<div class="gallery-single fix">
						<img src="images/img-06.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4>น้ำพริกกะปิ+ปลาทูทอด+ชะอมชุบไข่</h4>
							<p></p>
							<h3> น้ำหนัก/จาน (กรัม)   &nbsp;331.0</h3>
							<h3> พลังงาน (kcal)     &nbsp;386.0</h3>
							<h3> โปรตีน (กรัม)       &nbsp;32.8</h3>
							<h3> ไขมัน (กรัม)        &nbsp;24.5</h3>
							<h3> คาร์โบไฮเดรต (กรัม) &nbsp;8.5</h3>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="images/img-07.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4>ก๋วยเตี๋ยวเส้นหมี่เนื้อรวมน้ำตก</h4>
							<p></p>
							<h3> น้ำหนัก/จาน (กรัม)   &nbsp;365.0</h3>
							<h3> พลังงาน (kcal)     &nbsp;233.0</h3>
							<h3> โปรตีน (กรัม)       &nbsp;19.1</h3>
							<h3> ไขมัน (กรัม)        &nbsp;2.5</h3>
							<h3> คาร์โบไฮเดรต (กรัม) &nbsp;334.0</h3>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="images/img-08.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4>กระเพาะปลาเส้นหมี่</h4>
							<p></p>
							<h3> น้ำหนัก/จาน (กรัม)   &nbsp;412.0</h3>
							<h3> พลังงาน (kcal)     &nbsp;246.0</h3>
							<h3> โปรตีน (กรัม)       &nbsp;15.5</h3>
							<h3> ไขมัน (กรัม)        &nbsp;3.1</h3>
							<h3> คาร์โบไฮเดรต (กรัม) &nbsp;39.0</h3>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid dinner">
					<div class="gallery-single fix">
						<img src="images/img-09.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4>สุกี้รวมมิตร แห้ง</h4>
							<p></p>
							<h3> น้ำหนัก/จาน (กรัม)   &nbsp;384.0</h3>
							<h3> พลังงาน (kcal)     &nbsp;399.0</h3>
							<h3> โปรตีน (กรัม)       &nbsp;21.9</h3>
							<h3> ไขมัน (กรัม)        &nbsp;17.0</h3>
							<h3> คาร์โบไฮเดรต (กรัม)  &nbsp;39.4</h3>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- End Menu -->
	
	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							+66 2961-1372
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							ncdsfood.support@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							99/33 ม.6 ท่าอิฐ ปากเกร็ด นนทบุรี 
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->
	
	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<h3>About Us</h3>
					<p>NCDs Food คือ เว็บแอปพลิเคชันแนะนำอาหารสำหรับผู้ป่วยในกลุ่มโรค NCDs ที่ให้ผู้ป่วยในกลุ่มโรค NCDs หรือคนในครอบครัวผู้ป่วย คนดูแลผู้ป่วย สามารถใช้งานเว็บไซต์เพื่อ</p>
				</div>

				<div class="col-lg-6 col-md-6">
					<h3>ติดตามเราได้ที่</h3>
					<div class="subscribe_form">
						<form class="subscribe_form">
							<input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..." type="email">
							<button type="submit" class="submit">SUBSCRIBE</button>
							<div class="clearfix"></div>
						</form>
					</div>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		
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