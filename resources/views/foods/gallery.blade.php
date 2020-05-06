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
						<li class="nav-item "><a class="nav-link" href="{{action('WelcomeController@index')}}">หน้าแรก</a></li> 
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
						<li class="nav-item active"><a class="nav-link" href="{{action('WelcomeController@gallery')}}">อัลบั้มภาพ</a></li> 
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

    	<!-- Start header -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>อัลบั้มภาพ</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End header -->

	<!-- Start Gallery -->
	<div class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Gallery</h2>
						<p></p>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/img-01.jpg"> <!--ขยาย-->
							<h1 style="text-align: center" >ข้าวราดต้มจืดเต้าหู้หมูสับ</h1>
							<img class="img-fluid" src="images/img-01.jpg" alt="Gallery Images"> <!--ย่อ-->
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/img-02.jpg">
							<h1 style="text-align: center" >ข้าวราดไข่เจียวสมุนไพร</h1>
							<img class="img-fluid" src="images/img-02.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/img-03.jpg">
							<h1 style="text-align: center" >ข้าวราดแกงส้มชะอมทอด</h1>
							<img class="img-fluid" src="images/img-03.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="images/img-04.jpg">
							<h1 style="text-align: center" >ข้าวราดผัดผักรวม</h1>
							<img class="img-fluid" src="images/img-04.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/img-05.jpg">
							<h1 style="text-align: center" >ข้าวราดยำไข่าว</h1>
							<img class="img-fluid" src="images/img-05.jpg" alt="Gallery Images">
						</a>
					</div> 
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/img-06.jpg">
							<h1 style="text-align: center" >น้ำพริกกะปิปลาทูทอดชะอมชุบไข่</h1>
							<img class="img-fluid" src="images/img-06.jpg" alt="Gallery Images">
						</a>
					</div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/img-07.jpg">
							<h1 style="text-align: center" >ก๋วยเตี๋ยวเส้นหมี่เนื้อรวม น้ำตก</h1>
							<img class="img-fluid" src="images/img-07.jpg" alt="Gallery Images">
						</a>
					</div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/img-08.jpg">
							<h1 style="text-align: center" >กระเพาะปลาเส้นหมี่</h1>
							<img class="img-fluid" src="images/img-08.jpg" alt="Gallery Images">
						</a>
					</div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/img-09.jpg">
							<h1 style="text-align: center" >สุกี้รวมมิตร แห้ง</h1>
							<img class="img-fluid" src="images/img-09.jpg" alt="Gallery Images">
						</a>
					</div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/img-10.jpg">
							<h1 style="text-align: center" >ข้าวราดแกงขี้เหล็ก</h1>
							<img class="img-fluid" src="images/img-10.jpg" alt="Gallery Images">
						</a>
					</div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/img-011.jpg">
							<h1 style="text-align: center" >ข้าวราดแกงเขียวหวานไก่</h1>
							<img class="img-fluid" src="images/img-011.jpg" alt="Gallery Images">
						</a>
					</div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/img-012.jpg">
							<h1 style="text-align: center" >ข้าวราดแกงคั่วกลิ้งหมู</h1>
							<img class="img-fluid" src="images/img-012.jpg" alt="Gallery Images">
						</a>
					</div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/img-013.jpg">
							<h1 style="text-align: center" >ข้าวราดแกงฉู่ฉี่ปลาทู</h1>
							<img class="img-fluid" src="images/img-013.jpg" alt="Gallery Images">
						</a>
					</div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/img-014.jpg">
							<h1 style="text-align: center" >ข้าวราดแกงไตปลา</h1>
							<img class="img-fluid" src="images/img-014.jpg" alt="Gallery Images">
						</a>
					</div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/img-015.jpg">
							<h1 style="text-align: center" >ข้าวราดแกงเทโพหมูสามชั้น</h1>
							<img class="img-fluid" src="images/img-015.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/img-016.jpg">
							<h1 style="text-align: center" >ข้าวราดแกงแพนงหมู</h1>
							<img class="img-fluid" src="images/img-016.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/img-017.jpg">
							<h1 style="text-align: center" >ข้าวราดแกงส้มผักรวม</h1>
							<img class="img-fluid" src="images/img-017.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/img-018.jpg">
							<h1 style="text-align: center" >ข้าวราดแกงเหลือง</h1>
							<img class="img-fluid" src="images/img-018.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/img-019.jpg">
							<h1 style="text-align: center" >ข้าวกล้องราดต้มจับฉ่าย(เจ)</h1>
							<img class="img-fluid" src="images/img-019.jpg" alt="Gallery Images">
						</a>
					</div>

					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/img-020.jpg">
							<h1 style="text-align: center" >ข้าวราดต้มหมูพะโล้กับไข่</h1>
							<img class="img-fluid" src="images/img-020.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/img-021.jpg">
							<h1 style="text-align: center" >ข้าวราดกระเพราไก่</h1>
							<img class="img-fluid" src="images/img-021.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/img-022.jpg">
							<h1 style="text-align: center" >ข้าวราดผัดคะน้าหมูกรอบ</h1>
							<img class="img-fluid" src="images/img-022.jpg" alt="Gallery Images">
						</a>
					</div>

					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/img-023.jpg">
							<h1 style="text-align: center" >ข้าวราดผัดฉ่าปลากะพง</h1>
							<img class="img-fluid" src="images/img-023.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/img-024.jpg">
							<h1 style="text-align: center" >ข้าวราดผัดฉ่าปลาดุก</h1>
							<img class="img-fluid" src="images/img-024.jpg" alt="Gallery Images">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->

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
				<div class="col-lg-3 col-md-6">
					<h3>About Us</h3>
					<p>Integer cursus scelerisque ipsum id efficitur. Donec a dui fringilla, gravida lorem ac, semper magna. Aenean rhoncus ac lectus a interdum. Vivamus semper posuere dui, at ornare turpis ultrices sit amet. Nulla cursus lorem ut nisi porta, ac eleifend arcu ultrices.</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Opening hours</h3>
					<p><span class="text-color">Monday: </span>Closed</p>
					<p><span class="text-color">Tue-Wed :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Thu-Fri :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Sat-Sun :</span> 5:PM - 10PM</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>ติดต่อเราได้ที่</h3>
					<p class="lead">99/33 ม.6 ซอยท่าอิฐ 25 </a> <br>
					ถนนรัตนาธิเบศร์ ตำบลท่าอิฐ  <br>
					อำเภอปากเกร็ด นนทบุรี 11120 
					<p class="lead"><a href="#">+66 2961-1372</a></p>
					<p><a href="#"> ncdsfood.support@gmail.com</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
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