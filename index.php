<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
		<link rel="stylesheet" href="common/css/bootstrap.min.css" />
		<link rel="stylesheet" href="common/css/font-awesome.min.css" />
		<!-- style css -->
		<link rel="stylesheet" href="css/style-above.css" />
		<!-- <link rel="stylesheet" href="css/style-below.css" /> -->
		<!--Animate-->
		<link rel="stylesheet" href="css/animate.css" />
		<!-- jquery -->
		<script src="common/js/jquery-1.9.1.min.js"></script>
		<!-- Slider -->
		<link rel="stylesheet" href="plugins/owl-carousel/owl.carousel.css" />
		<link rel="stylesheet" href="plugins/owl-carousel/owl.theme.css" />
		<script src="plugins/owl-carousel/owl.carousel.min.js"></script>
		<script src="plugins/wow/wow.min.js"></script>
		<script src="plugins/jquery.validate.min.js"></script>
		<script>
		 	new WOW().init();
		</script>
		<script>
	    $(document).ready(function () {

	        $("#owl-quandt").owlCarousel({

	            autoPlay: true, //Set AutoPlay to 3 seconds
	            navigation: true, // Show next and prev buttons
	            pagination : false,
	            slideSpeed: 3000,
	            paginationSpeed: 3000,
	            stopOnHover : true,
	            navigationText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
	            singleItem: true
	        });
	    });
	</script>

		
	</head>
	<body>
		<div class="menu wow fadeInLeft">
			<div class="container">
				<div class="row">
					<a href="#" class="pull-left logo"><img src="images/logo.png" class="img-responsive" alt="Image"></a>
					<div class="nav-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<i class="fa fa-bars" aria-hidden="true"></i>
						</button>
					</div>
					<div class="main-menu pull-right">
						<ul class="nav navbar-nav collapse navbar-collapse">
							<li><a href="#get-started" class="active">home</a></li>
							<li><a href="#">services</a></li>
							<li><a href="#">process</a></li>
							<li><a href="#work">work</a></li>
							<li><a href="#about-us">about us</a></li>
							<li><a href="#">facts</a></li>
							<li><a href="#contact">contacts</a></li>
							<li><a href="#contact" class="btn-get-started">Get started</a></li>
						</ul>
						
					</div>
				</div>
			</div>
		</div>
		<div class="get-started wow fadeIn"  id="get-started">
			<div class="title">
				<h1>get the website you deserve</h1>
			</div>
			<div class="container-fluid">
				<div class="row">	
					<div class="img-screen">
						<img src="images/screenshots3.png" class="img-responsive" alt="Image">
					</div>
					<!--<div class="btn-getstarted">
						<a href="#contact" class="btn btn-primary btn-link-to">get started<i class="line"></i><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
					</div>!-->
					<div class="quality wow fadeInLeft">
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 left-content">

							<img src="images/laptopmac.png" class="img-responsive" alt="Image">
							<img src="images/icon-arrows.png" class="img-responsive icon-arrows" alt="Image">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<ul class="exp">
								<li> <img src="images/icon-dola.png"> affordable</li>
								<li> <img src="images/icon-made.png"> tailor made</li>
								<li> <img src="images/icon-star.png"> top notch</li>
							</ul>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<ul class="skill">
								<li><i class="fa fa-hand-o-right" aria-hidden="true"></i> 100% transparence</li>
								<li><i class="fa fa-hand-o-right" aria-hidden="true"></i> Skilled, experenced team</li>
								<li><i class="fa fa-hand-o-right" aria-hidden="true"></i> Focus and results</li>
								<li><i class="fa fa-hand-o-right" aria-hidden="true"></i> On time dilivery</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="design wow fadeInLeft" id="design">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 padding-none">
						<div class="cell cell-11">
							<p>web design</p>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 padding-none">
						<div class="cell">
							<img src="images/icon-spen.png" class="img-responsive" alt="Image">
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 padding-none">
						<div class="cell m-border">
							<img src="images/icon-shopping.png" class="img-responsive" alt="Image">
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 padding-none">
						<div class="cell cell-14">
							<p>E-commerce Website Development</p>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 padding-none">
						<div class="cell cell-21">
							<img src="images/icon-wp.png" class="img-responsive" alt="Image">
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 padding-none">
						<div class="cell cell-22">
							<p>Wordpress Development</p>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 padding-none">
						<div class="cell cell-23">
							<p>Laravel  Development</p>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 padding-none">
						<div class="cell cell-24  m-border">
							<img src="images/icon-laravel.png" class="img-responsive" alt="Image">
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 padding-none">
						<div class="cell cell-31">
							<p>MVC based  Framework  Development</p>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 padding-none">
						<div class="cell cell-cake">
							<img src="images/icon-cake.png" class="img-responsive" alt="Image">
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 padding-none">
						<div class="cell">
							<img src="images/icon-other.png" class="img-responsive" alt="Image">
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 padding-none">
						<div class="cell cell-34">
							<p>Other custom code development</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="work wow fadeInLeft" id="work">
			<div class="title under-line">
				<h1>our works</h1>
			</div>
			<div class="container-friud">
			<div id="owl-quandt">
	            <div class="item">
	            	<div class="image">
	            		<img src="images/img-work-2.png" class="img-responsive" alt="Image">
	            	</div>
	                <div class="work-content">
	                	<div class="logo">
	                		<img src="images/logo-work.png" class="img-responsive" alt="Image">
	                		<!-- <p>Title logo</p> -->
	                	</div>
	                	<div class="text">
	                		<p>Leading agriculture and food companu in VietNam</p>
	                	</div>
	                	<div class="btn-more-work">
	                		<a href="http://thepangroup.vn/en/home.htm" target="_blank" class="btn">Learn more <i class="fa fa-angle-right" aria-hidden="true"></i></a>
	                	</div>
	                </div>
	            </div>
	            <div class="item">
	            	<div class="image">
	            		<img src="images/img-work-3.png" class="img-responsive" alt="Image">
	            	</div>
	                <div class="work-content">
	                	<div class="logo">
	                		<img src="images/logo-work-3.png" class="img-responsive" alt="Image">
	                		<!-- <p>Title logo</p> -->
	                	</div>
	                	<div class="text">
	                		<p>Travel booking</p>
	                	</div>
	                	<div class="btn-more-work">
	                		<a href="http://www.viewretreats.com/" target="_blank" class="btn">Learn more <i class="fa fa-angle-right" aria-hidden="true"></i></a>
	                	</div>
	                </div>
	            </div>
	            <div class="item">
	            	<div class="image">
	            		<img src="images/img-work-4.png" class="img-responsive" alt="Image">
	            	</div>
	                <div class="work-content">
	                	<div class="logo">
	                		<img style="width: 45%;" src="images/logo-work-4.png" class="img-responsive" alt="Image">
	                		<!-- <p>Title logo</p> -->
	                	</div>
	                	<div class="text">
	                		<p>A global real estate services provider listed on the London Stock Exchange.</p>
	                	</div>
	                	<div class="btn-more-work">
	                		<a href="http://www.savills.com.vn/" target="_blank" class="btn">Learn more <i class="fa fa-angle-right" aria-hidden="true"></i></a>
	                	</div>
	                </div>
	            </div>
	            <div class="item">
	            	<div class="image">
	            		<img src="images/img-work-5.png" class="img-responsive" alt="Image">
	            	</div>
	                <div class="work-content">
	                	<div class="logo">
	                		<img src="images/logo-work-5.png" class="img-responsive" alt="Image">
	                		<!-- <p>Title logo</p> -->
	                	</div>
	                	<div class="text">
	                		<p>News portal about Saigon</p>
	                	</div>
	                	<div class="btn-more-work">
	                		<a href="http://saigoneer.com/" target="_blank" class="btn">Learn more <i class="fa fa-angle-right" aria-hidden="true"></i></a>
	                	</div>
	                </div>
	            </div>
			</div>
			</div>
		</div>

		<div class="testimonials wow fadeInLeft" id="testimonials">
			<div class="title under-line-white">
				<h1>testimonials</h1>
			</div>
			<div class="container">
				<div class="content">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					    <li data-target="#myCarousel" data-slide-to="1"></li>
					    <li data-target="#myCarousel" data-slide-to="2"></li>
					    <li data-target="#myCarousel" data-slide-to="3"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
					    <div class="item active">
					      <p>“I trust my entire software business with Vinsofts. They are a true partner.” Mark from New York.</p>
					    </div>

					    <div class="item">
					      <p>“Communication is on par with North American boutiques. Vinsofts is the real deal.” Jesse from Chicago.</p>
					    </div>

					    <div class="item">
					      <p>“Vinsofts is an excellent development firm. They helped us achieve all of our goals in record time.” Lauren from Texas.</p>
					    </div>

					    <div class="item">
					      <p>“I’m SUPER happy about the speed improvements. I’m pretty confident that we’ll achieve a significant improvement in both search ranking AND conversion!” Mat from Australia.</p>
					    </div>
					  </div>

					  <!-- Left and right controls -->
					  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
				</div>
			</div>
		</div>
		<div class="about-us wow fadeInLeft" id="about-us">
			<div class="title under-line">
				<h1>about us</h1>
			</div>
			<div class="container">
				<div class="content">
					<p>We have helped dozens of startups and small businesses across the Globe to craft the ideas into reality by developing outstanding websites. We love what we do and transform our passion into great websites. We build not just an authentic online image, but also scalable and custom web solutions. Every client receives special approach, we successfully use several web development methodologies like Agile and Waterfall depending on the needs of the project.  Our committed team is ready to help you to achieve your goals drive growth 
	for your business.</p>

				</div>
			</div>
		</div>
		<div class="work-start wow fadeInLeft" id="work-start">
			<img src="images/web-app-process.png" class="img-responsive proress" alt="Image" />
			<div class="btn-getstarted">
				<a href="#contact" class="btn btn-link-to">get started	&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i></a>
			</div>
		</div>

		<div class="contact wow fadeInLeft" id="contact">
			<div class="title under-line">
				<h1>contact us</h1>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div class="about">
							<h4>If you have a project you would like to discuss, <br>get in touch with us.</h4><br />
							<p><strong>Vinsofts Company</strong><br>
							Address: 8th Floor, Sannam Building<br>
							Duy Tan Street, Cau Giay District<br>
							Hanoi City, 10000<br>
							Vietnam</p>
							<p><span class="phone">Phone: <a href="tel:+844-6259-3148">+844-6259-3148</a></span><br>
							<span>Email: </span><a href="mailto:hi@vinsofts.com"> hi@vinsofts.com</a><br><span>Skype: <a href="skype:vinsofts.com"> vinsofts.com</a></span></p>
							<hr />
						</div>

					</div>

					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div class="form-contact">
							<form action="" method="POST" class="form-horizontal" id="form-ct" role="form">
								<div class="form-group">
								    <label for="name" class="col-sm-2 control-label">Name:</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" name="name" id="name" placeholder="Name" required="required"><span class="required">*</span>
								    </div>
								</div>
								<div class="form-group">
								    <label for="email" class="col-sm-2 control-label">Email:</label>
								    <div class="col-sm-10">
								      <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="required"><span class="required">*</span>
								    </div>
								</div>
								<div class="form-group">
								    <label for="message" class="col-sm-2 control-label">Message:</label>
								    <div class="col-sm-10">
								      <textarea type="text" class="form-control" name="message" id="message" placeholder="Message" rows="10" required="required"></textarea><span class="required">*</span>
								    </div>
								    <div class="loading">
								    	<img src="images/loading_icon.gif" />
								    </div>
								    <p class="rs-mail"></p>
								</div>
								<div class="form-group">
									<div class="col-sm-10 col-sm-offset-2">
										<button type="button" class="btn btn-send">send</button>
									</div>
								</div>
							</form><!--end form-->
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer wow fadeIn">
			<div class="container">
				<div class="row logo">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 copyright">
						<a href="#"><img src="images/logo.png" class="img-responsive" alt="Image"></a>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 copyright">
						<span>Copyright © 2017</span>
						<a href="http://vinsofts.com">VINSOFTS JSC</a>
					</div>
				</div>
				
		</div>




		<!-- <script src="common/js/jquery.min.js"></script> -->
		<script src="common/js/bootstrap.min.js"></script>
		<script src="js/sendemail.js"></script>
		<script src="plugins/jqueryEasing.js"></script>
		<script>
			(function($){
				$(document).ready(function(){

				$('a.btn-link-to').click(function(e){
				    e.preventDefault();

				    el = $(this);

				    name = el.attr('href');

				    pos = $(name).position().top;

				    $('html,body').stop().animate({scrollTop:pos},800,'easeInQuad');
				    return false;
					});
				});

				})(jQuery);
		</script>
	</body>
</html>