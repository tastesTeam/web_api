<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo $url;?>/css/" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="http://admin.shengyimao.com/template/default/css/newproject/bootstrap.css">
<link href="<?php echo $url;?>/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo $url;?>/css/chocolat.css" type="text/css" media="screen" charset="utf-8">
<!-- js -->
<script type="text/javascript" src="<?php echo $url;?>/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- script -->
	<script src="<?php echo $url;?>/js/jquery.chocolat.js"></script>
		<!--light-box-files-->
	<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.portfolio-grids a').Chocolat();
		});
	</script>
<!-- script -->
<!-- animation-effect -->
<link href="<?php echo $url;?>/css/animate.min.css" rel="stylesheet"> 
<script src="<?php echo $url;?>/js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
<!-- timer -->
<link rel="stylesheet" href="<?php echo $url;?>/css/jquery.countdown.css" />
<!-- //timer -->
<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
<body>
<!-- banner -->
	<div class="banner" id="home1">
		<div class="container">
			<div class="banner-phone animated wow slideInLeft" data-wow-delay=".5s">
				<p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+0000 123 456</p>
			</div>
			<div class="logo animated wow zoomIn" data-wow-delay=".5s">
				<h1><a href="index.html"><span></span>Nuptials</a></h1>
			</div>
			<div class="banner-social animated wow slideInRight" data-wow-delay=".5s">
				<ul class="social-icons">
					<li><a href="#" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a></li>
					<li><a href="#" class="icon-button instagram"><i class="icon-instagram"></i><span></span></a></li>
					<li><a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a></li>
					<li><a href="#" class="icon-button g-plus"><i class="icon-g-plus"></i><span></span></a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<div class="banner-info animated wow zoomIn" data-wow-delay=".5s">
				<p>wedding invitation</p>
			</div>
			<div class="navigation">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav class="link-effect-14" id="link-effect-14">
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.html"><span>Home</span></a></li>
								<li><a href="#about" class="scroll"><span>About</span></a></li>
								<li><a href="#team" class="scroll"><span>Team</span></a></li>
								<li><a href="#services" class="scroll"><span>Services</span></a></li>
								<li><a href="#events" class="scroll"><span>News & Events</span></a></li>
								<li><a href="#gallery" class="scroll"><span>Gallery</span></a></li>
								<li><a href="#mail" class="scroll"><span>Mail Us</span></a></li>
							</ul>
						</nav>
					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- banner-bottom -->
	<div class="banner-bottom" id="about">	
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s"><span>About Us</span></h3>
			<p class="about-dummy animated wow slideInUp" data-wow-delay=".5s">Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
				esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas 
				nulla pariatur.Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
				esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas 
				nulla pariatur.</p>
		</div>
		<div class="banner-bottom-grids animated wow slideInLeft" data-wow-delay=".5s">
			<ul id="flexiselDemo1">			
				<li>
					<div class="banner-bottom-grid">
						<img src="<?php echo $url.'images/1.jpg';?>" alt=" " class="img-responsive" />
					</div>
				</li>
				<li>
					<div class="banner-bottom-grid">
						<img src="<?php echo $url;?>/images/2.jpg" alt=" " class="img-responsive" />
					</div>
				</li>
				<li>
					<div class="banner-bottom-grid">
						<img src="<?php echo $url;?>/images/3.jpg" alt=" " class="img-responsive" />
					</div>
				</li>
				<li>
					<div class="banner-bottom-grid">
						<img src="<?php echo $url;?>/images/4.jpg" alt=" " class="img-responsive" />
					</div>
				</li>
				<li>
					<div class="banner-bottom-grid">
						<img src="<?php echo $url;?>/images/5.jpg" alt=" " class="img-responsive" />
					</div>
				</li>
				<li>
					<div class="banner-bottom-grid">
						<img src="<?php echo $url;?>/images/6.jpg" alt=" " class="img-responsive" />
					</div>
				</li>
			</ul>
						<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 6,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 2
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:3
										},
										tablet: { 
											changePoint:768,
											visibleItems: 4
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="<?php echo $url;?>/js/jquery.flexisel.js"></script>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<div class="col-md-6 testimonials-grid-left">
				<h3 class="animated wow zoomIn" data-wow-delay=".5s"><span>Testimonials</span></h3>
				<p class="testimonials-dummy animated wow slideInUp" data-wow-delay=".5s">Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
					esse quam nihil molestiae consequatur.</p>
				<div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
					<div class="wmuSliderWrapper">
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="testimonials-grid-left-grids">
									<div class="testimonials-grid-left-grid">
										<div class="testimonials-grid-left-grid-left">
											<img src="<?php echo $url;?>/images/1.png" alt=" " class="img-responsive" />
										</div>
										<div class="testimonials-grid-left-grid-right">
											<h4>reprehenderit qui in ea voluptate velit 
													esse quam nihil voluptas nulla pariatur.<i>Bride</i></h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="testimonials-grid-left-grid">
										<div class="testimonials-grid-left-grid-left">
											<img src="<?php echo $url;?>/images/2.png" alt=" " class="img-responsive" />
										</div>
										<div class="testimonials-grid-left-grid-right">
											<h4>Neque porro quisquam est, sed quia non numquam eius modi tempora
											incidunt.<i>Bridegroom</i></h4>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="testimonials-grid-left-grids">
									<div class="testimonials-grid-left-grid">
										<div class="testimonials-grid-left-grid-left">
											<img src="<?php echo $url;?>/images/4.png" alt=" " class="img-responsive" />
										</div>
										<div class="testimonials-grid-left-grid-right">
											<h4>reprehenderit qui in ea voluptate velit 
													esse quam nihil voluptas nulla pariatur.<i>Bride</i></h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="testimonials-grid-left-grid">
										<div class="testimonials-grid-left-grid-left">
											<img src="<?php echo $url;?>/images/3.png" alt=" " class="img-responsive" />
										</div>
										<div class="testimonials-grid-left-grid-right">
											<h4>Neque porro quisquam est, sed quia non numquam eius modi tempora
											incidunt.<i>Bridegroom</i></h4>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
						</article>
					</div>
				</div>
						<script src="<?php echo $url;?>/js/jquery.wmuSlider.js"></script> 
						<script>
							$('.example1').wmuSlider();         
						</script> 
			</div>
			<div class="col-md-6 testimonials-grid-right">
				<h3 class="animated wow zoomIn" data-wow-delay=".5s"><span>Our Skills</span></h3>
				<p class="testimonials-dummy animated wow slideInUp" data-wow-delay=".5s">Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
					esse quam nihil molestiae consequatur.</p>
				<div class='bar_group'>
					<div class='bar_group__bar thin' label='Decorations' show_values='true' tooltip='true' value='343'></div>
					<div class='bar_group__bar thin' label='Orders' show_values='true' tooltip='true' value='235'></div>
					<div class='bar_group__bar thin' label='Amount' show_values='true' tooltip='true' value='675'></div>
					<div class='bar_group__bar thin' label='Wedding' show_values='true' tooltip='true' value='456'></div>
				</div>
				<script src="<?php echo $url;?>/js/bars.js"></script>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //testimonials -->
<div class="tlinks">Collect from <a href="http://www.cssmoban.com/" >手机网站模板</a></div>
<!-- team -->
	<div class="team" id="team">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s"><span>Meet Our Team</span></h3>
			<div class="team-grids">
				<div class="col-md-3 team-grid animated wow slideInLeft" data-wow-delay=".5s">
					<div class="team-grid1">
						<img src="<?php echo $url;?>/images/8.jpg" alt=" " class="img-responsive" />
					</div>
					<h4>James Win</h4>
					<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis 
						suscipit.</p>
					<ul class="social-icons">
						<li><a href="#" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a></li>
						<li><a href="#" class="icon-button instagram"><i class="icon-instagram"></i><span></span></a></li>
						<li><a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a></li>
					</ul>
				</div>
				<div class="col-md-3 team-grid animated wow slideInLeft" data-wow-delay=".6s">
					<div class="team-grid1">
						<img src="<?php echo $url;?>/images/9.jpg" alt=" " class="img-responsive" />
					</div>
					<h4>Sunny</h4>
					<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis 
						suscipit.</p>
					<ul class="social-icons">
						<li><a href="#" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a></li>
						<li><a href="#" class="icon-button instagram"><i class="icon-instagram"></i><span></span></a></li>
						<li><a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a></li>
					</ul>
				</div>
				<div class="col-md-3 team-grid animated wow slideInLeft" data-wow-delay=".7s">
					<div class="team-grid1">
						<img src="<?php echo $url;?>/images/10.jpg" alt=" " class="img-responsive" />
					</div>
					<h4>Laura</h4>
					<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis 
						suscipit.</p>
					<ul class="social-icons">
						<li><a href="#" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a></li>
						<li><a href="#" class="icon-button instagram"><i class="icon-instagram"></i><span></span></a></li>
						<li><a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a></li>
					</ul>
				</div>
				<div class="col-md-3 team-grid animated wow slideInLeft" data-wow-delay=".8s">
					<div class="team-grid1">
						<img src="<?php echo $url;?>/images/11.jpg" alt=" " class="img-responsive" />
					</div>
					<h4>Andrew Carl</h4>
					<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis 
						suscipit.</p>
					<ul class="social-icons">
						<li><a href="#" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a></li>
						<li><a href="#" class="icon-button instagram"><i class="icon-instagram"></i><span></span></a></li>
						<li><a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //team -->
<!-- services -->
	<div class="services" id="services">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s"><span>Services</span></h3>
			<div class="services-grids">
				<div class="col-md-3 services-grid">
					<div class="services-grid1">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					</div>
					<div class="bootstrap-pop-up">
						<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
						  quo voluptas nulla natus
						</button>
						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Nuptials</h4>
							  </div>
							  <div class="modal-body">
								"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
								doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
								inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
								Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
								sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
							  </div>
							</div>
						  </div>
						</div>
					</div>
					<p>Totam rem aperiam, eaque ipsa quae ab illo
						inventore veritatis et beatae vitae dicta sunt.</p>
				</div>
				<div class="col-md-3 services-grid">
					<div class="services-grid1">
						<span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
					</div>
					<div class="bootstrap-pop-up">
						<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
						  ipsa quae abillo aperiam
						</button>
						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Nuptials</h4>
							  </div>
							  <div class="modal-body">
								"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
								doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
								inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
								Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
								sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
							  </div>
							</div>
						  </div>
						</div>
					</div>
					<p>Totam rem aperiam, eaque ipsa quae ab illo
						inventore veritatis et beatae vitae dicta sunt.</p>
				</div>
				<div class="col-md-3 services-grid">
					<div class="services-grid1">
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
					</div>
					<div class="bootstrap-pop-up">
						<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
						  voluptas sit aspernatur
						</button>
						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Nuptials</h4>
							  </div>
							  <div class="modal-body">
								"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
								doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
								inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
								Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
								sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
							  </div>
							</div>
						  </div>
						</div>
					</div>
					<p>Totam rem aperiam, eaque ipsa quae ab illo
						inventore veritatis et beatae vitae dicta sunt.</p>
				</div>
				<div class="col-md-3 services-grid">
					<div class="services-grid1">
						<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
					</div>
					<div class="bootstrap-pop-up">
						<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
						  error sit voluptatem eaque
						</button>
						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Nuptials</h4>
							  </div>
							  <div class="modal-body">
								"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
								doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
								inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
								Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
								sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
							  </div>
							</div>
						  </div>
						</div>
					</div>
					<p>Totam rem aperiam, eaque ipsa quae ab illo
						inventore veritatis et beatae vitae dicta sunt.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="services-grids-wedding">
				<div class="services-grids-wedding1">
					<div class="services-grids-wedding-left animated wow slideInLeft" data-wow-delay=".5s">
						<img src="<?php echo $url;?>/images/5.png" alt=" " class="img-responsive" />
						<h4>Michael Drew</h4>
					</div>
					<div class="services-grids-wedding-right animated wow slideInRight" data-wow-delay=".5s">
						<img src="<?php echo $url;?>/images/6.png" alt=" " class="img-responsive" />
						<h4>Laura Carl</h4>
					</div>
					<div class="clearfix"> </div>
				</div>
				<h5 class="animated wow slideInUp" data-wow-delay=".5s">We are getting married !</h5>
				<p class="animated wow slideInUp" data-wow-delay=".5s">4th avenue, Main Cross Road, New York City.</p>
				<div id="counter"> </div>
				<script src="<?php echo $url;?>/js/jquery.countdown.js"></script>
				<script src="<?php echo $url;?>/js/script.js"></script>
			</div>
		</div>
	</div>
<!-- //services -->
<!-- services-bottom -->
	<div class="services-bottom">
		<div class="container">
			<h2 class="animated wow slideInLeft" data-wow-delay=".5s">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus 
				saepe eveniet ut et voluptates repudi.</h2>
			<p class="animated wow slideInUp" data-wow-delay=".5s">Necessitatibus</p>
		</div>
	</div>
<!-- //services-bottom -->
<!-- news -->
	<div class="news" id="events">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s"><span>News & Events</span></h3>
			<div class="news-grids">
				<div class="col-md-8 news-grid-left">
					<div class="date-tag">
						<div class="date-tag-left animated wow slideInLeft" data-wow-delay=".5s">
							<p>20 April 2016</p>
						</div>
						<div class="date-tag-right animated wow slideInLeft" data-wow-delay=".5s">
							<ul>
								<li><a href="#"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> 5 Tags</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span> Admin</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> 5 Messages</a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="bootstrap-pop-up">
						<button type="button" class="btn btn-primary btn-primary-news btn-lg" data-toggle="modal" data-target="#myModal">
						  aspernatur aut odit aut fugit voluptatem quia voluptas
						</button>
						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Nuptials</h4>
							  </div>
							  <div class="modal-body">
								"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
								doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
								inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
								Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
								sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
							  </div>
							</div>
						  </div>
						</div>
					</div>
					<div class="bootstrap-pop-up1">
						<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
						  <img src="<?php echo $url;?>/images/13.jpg" alt=" " class="img-responsive" />
						</button>
						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Nuptials</h4>
							  </div>
							  <div class="modal-body">
								"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
								doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
								inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
								Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
								sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
							  </div>
							</div>
						  </div>
						</div>
					</div>
					<div class="readmore-text">
						<p class="animated wow slideInLeft" data-wow-delay=".5s">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
							sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
							 Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus 
							 saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. 
							 Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
							 voluptatibus maiores alias consequatur aut perferendis doloribus asperiores 
							 repellat.</p>
						<div class="more">
							<div class="bootstrap-pop-up">
								<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
								  Learn More...
								</button>
								<!-- Modal -->
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModalLabel">Nuptials</h4>
									  </div>
									  <div class="modal-body">
										"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
										doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
										inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
										Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
										sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
									  </div>
									</div>
								  </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 news-grid-right">
					<h4 class="animated wow zoomIn" data-wow-delay=".5s">Tags</h4>
					<ul class="animated wow slideInRight" data-wow-delay=".5s">
						<li><a href="#">Wedding</a></li>
						<li><a href="#">Rings</a></li>
						<li><a href="#">Costumes</a></li>
						<li><a href="#">Dinner</a></li>
						<li><a href="#">Groomsman</a></li>
						<li><a href="#">Bridesmaid</a></li>
						<li><a href="#">Wedding</a></li>
						<li><a href="#">Rings</a></li>
						<li><a href="#">Costumes</a></li>
						<li><a href="#">Dinner</a></li>
						<li><a href="#">Groomsman</a></li>
						<li><a href="#">Bridesmaid</a></li>
						<li><a href="#">Wedding</a></li>
						<li><a href="#">Rings</a></li>
						<li><a href="#">Costumes</a></li>
						<li><a href="#">Dinner</a></li>
						<li><a href="#">Groomsman</a></li>
						<li><a href="#">Bridesmaid</a></li>
					</ul>
					<div class="blog">
						<h4 class="animated wow zoomIn" data-wow-delay=".5s"><i>From The </i>Blog</h4>
						<div class="blog-grids">
							<div class="blog-grid">
								<div class="blog-grid-left">
									<img src="<?php echo $url;?>/images/3.png" alt=" " class="img-responsive" />
								</div>
								<div class="blog-grid-right">
									<div class="bootstrap-pop-up">
										<button type="button" class="btn btn-primary btn-primary1 btn-lg" data-toggle="modal" data-target="#myModal">
										  aspernatur aut odit aut
										</button>
										<!-- Modal -->
										<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										  <div class="modal-dialog" role="document">
											<div class="modal-content">
											  <div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title" id="myModalLabel">Nuptials</h4>
											  </div>
											  <div class="modal-body">
												"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
												doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
												inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
												Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
												sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
											  </div>
											</div>
										  </div>
										</div>
									</div>
									<p>25 April 2016</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="blog-grid">
								<div class="blog-grid-left">
									<img src="<?php echo $url;?>/images/4.png" alt=" " class="img-responsive" />
								</div>
								<div class="blog-grid-right">
									<div class="bootstrap-pop-up">
										<button type="button" class="btn btn-primary btn-primary1 btn-lg" data-toggle="modal" data-target="#myModal">
										  veritatis et architecto
										</button>
										<!-- Modal -->
										<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										  <div class="modal-dialog" role="document">
											<div class="modal-content">
											  <div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title" id="myModalLabel">Nuptials</h4>
											  </div>
											  <div class="modal-body">
												"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
												doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
												inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
												Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
												sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
											  </div>
											</div>
										  </div>
										</div>
									</div>
									<p>28 April 2016</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="blog-grid">
								<div class="blog-grid-left">
									<img src="<?php echo $url;?>/images/2.png" alt=" " class="img-responsive" />
								</div>
								<div class="blog-grid-right">
									<div class="bootstrap-pop-up">
										<button type="button" class="btn btn-primary btn-primary1 btn-lg" data-toggle="modal" data-target="#myModal">
										  dolores eos qui ratione
										</button>
										<!-- Modal -->
										<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										  <div class="modal-dialog" role="document">
											<div class="modal-content">
											  <div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title" id="myModalLabel">Nuptials</h4>
											  </div>
											  <div class="modal-body">
												"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
												doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
												inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
												Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
												sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
											  </div>
											</div>
										  </div>
										</div>
									</div>
									<p>31 April 2016</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //news -->

<!-- newsletter -->
	<div class="newsletter">	
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s"><span>Newsletter</span></h3>
			<div class="newsletter-grids">	
				<div class="col-md-7 newsletter-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<form action="#" method="post">
						<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
						<input type="submit" value="Subscribe">
					</form>
				</div>
				<div class="col-md-5 newsletter-grid-right animated wow slideInRight" data-wow-delay=".5s">
					<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam 
						vel illum qui dolorem eum fugiat quo volupta.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //newsletter -->
<!-- gallery -->
	<div class="gallery" id="gallery">
		<h3 class="animated wow zoomIn" data-wow-delay=".5s"><span>Photo Gallery</span></h3>
		<div class="gallery-grids">
			<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
				<ul id="myTab" class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">All</a></li>
					<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Wedding</a></li>
					<li role="presentation"><a href="#costumes" role="tab" id="costumes-tab" data-toggle="tab" aria-controls="costumes">Costumes</a></li>
					<li role="presentation"><a href="#honeyMoon" role="tab" id="honeyMoon-tab" data-toggle="tab" aria-controls="honeyMoon">HoneyMoon</a></li>
					<li role="presentation"><a href="#celebrations" role="tab" id="celebrations-tab" data-toggle="tab" aria-controls="celebrations">Celebrations</a></li>
				</ul>
				<div id="myTabContent" class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
						<div class="tab_img">
							<div class="col-md-3 portfolio-grids">
								<a href="<?php echo $url;?>/images/13.jpg" rel="title" class="b-link-stripe b-animate-go thickbox">
									<img src="<?php echo $url;?>/images/13.jpg" class="img-responsive" alt=""/>
									<div class="b-wrapper">
										<h5>Nuptials</h5>
										<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
									</div>
								</a>
							</div>
							<div class="col-md-3 portfolio-grids">
								<a href="<?php echo $url;?>/images/15.jpg" rel="title" class="b-link-stripe b-animate-go thickbox">
									<img src="<?php echo $url;?>/images/15.jpg" class="img-responsive" alt=""/>
									<div class="b-wrapper">
										<h5>Nuptials</h5>
										<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
									</div>
								</a>
							</div>
							<div class="col-md-3 portfolio-grids">
								<a href="<?php echo $url;?>/images/16.jpg" rel="title" class="b-link-stripe b-animate-go thickbox">
									<img src="<?php echo $url;?>/images/16.jpg" class="img-responsive" alt=""/>
									<div class="b-wrapper">
										<h5>Nuptials</h5>
										<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
									</div>
								</a>
							</div>
							<div class="col-md-3 portfolio-grids">
								<a href="<?php echo $url;?>/images/17.jpg" rel="title" class="b-link-stripe b-animate-go thickbox">
									<img src="<?php echo $url;?>/images/17.jpg" class="img-responsive" alt=""/>
									<div class="b-wrapper">
										<h5>Nuptials</h5>
										<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
									</div>
								</a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="tab_img">
							<div class="col-md-3 portfolio-grids">
								<a href="<?php echo $url;?>/images/18.jpg" rel="title" class="b-link-stripe b-animate-go thickbox">
									<img src="<?php echo $url;?>/images/18.jpg" class="img-responsive" alt=""/>
									<div class="b-wrapper">
										<h5>Nuptials</h5>
										<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
									</div>
								</a>
							</div>
							<div class="col-md-3 portfolio-grids">
								<a href="<?php echo $url;?>/images/19.jpg" rel="title" class="b-link-stripe b-animate-go thickbox">
									<img src="<?php echo $url;?>/images/19.jpg" class="img-responsive" alt=""/>
									<div class="b-wrapper">
										<h5>Nuptials</h5>
										<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
									</div>
								</a>
							</div>
							<div class="col-md-3 portfolio-grids">
								<a href="<?php echo $url;?>/images/20.jpg" rel="title" class="b-link-stripe b-animate-go thickbox">
									<img src="<?php echo $url;?>/images/20.jpg" class="img-responsive" alt=""/>
									<div class="b-wrapper">
										<h5>Nuptials</h5>
										<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
									</div>
								</a>
							</div>
							<div class="col-md-3 portfolio-grids">
								<a href="<?php echo $url;?>/images/21.jpg" rel="title" class="b-link-stripe b-animate-go thickbox">
									<img src="<?php echo $url;?>/images/21.jpg" class="img-responsive" alt=""/>
									<div class="b-wrapper">
										<h5>Nuptials</h5>
										<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
									</div>
								</a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
						<div class="tab_img">
							<div class="col-md-3 portfolio-grids">
								<a href="<?php echo $url;?>/images/16.jpg" rel="title" class="b-link-stripe b-animate-go thickbox">
									<img src="<?php echo $url;?>/images/16.jpg" class="img-responsive zoom-img" alt=""/>
									<div class="b-wrapper">
										<h5>Nuptials</h5>
										<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
									</div>
								</a>
							</div>
							<div class="col-md-3 portfolio-grids">
								<a href="<?php echo $url;?>/images/17.jpg" rel="title" class="b-link-stripe b-animate-go thickbox">
									<img src="<?php echo $url;?>/images/17.jpg" class="img-responsive zoom-img" alt=""/>
									<div class="b-wrapper">
										<h5>Nuptials</h5>
										<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
									</div>
								</a>
							</div>
							<div class="col-md-3 portfolio-grids">
								<a href="<?php echo $url;?>/images/18.jpg" rel="title" class="b-link-stripe b-animate-go thickbox">
									<img src="<?php echo $url;?>/images/18.jpg" class="img-responsive zoom-img" alt=""/>
									<div class="b-wrapper">
										<h5>Nuptials</h5>
										<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
									</div>
								</a>
							</div>
							<div class="clearfix"> </div>
						</div>	
					</div>
					<div role="tabpanel" class="tab-pane fade" id="costumes" aria-labelledby="costumes-tab">
						<div class="tab_img">
							<div class="col-md-3 portfolio-grids">
								<a href="<?php echo $url;?>/images/20.jpg" rel="title" class="b-link-stripe b-animate-go thickbox">
									<img src="<?php echo $url;?>/images/20.jpg" class="img-responsive zoom-img" alt=""/>
									<div class="b-wrapper">
										<h5>Nuptials</h5>
										<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
									</div>
								</a>
							</div>
							<div class="col-md-3 portfolio-grids">
								<a href="<?php echo $url;?>/images/21.jpg" rel="title" class="b-link-stripe b-animate-go thickbox">
									<img src="<?php echo $url;?>/images/21.jpg" class="img-responsive zoom-img" alt=""/>
									<div class="b-wrapper">
										<h5>Nuptials</h5>
										<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
									</div>
								</a>
							</div>
							<div class="clearfix"> </div>
						</div>	
					</div>
					<div role="tabpanel" class="tab-pane fade" id="honeyMoon" aria-labelledby="honeyMoon-tab">
						<div class="tab_img">
							<div class="col-md-3 portfolio-grids">
								<a href="<?php echo $url;?>/images/13.jpg" rel="title" class="b-link-stripe b-animate-go thickbox">
									<img src="<?php echo $url;?>/images/13.jpg" class="img-responsive zoom-img" alt=""/>
									<div class="b-wrapper">
										<h5>Nuptials</h5>
										<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
									</div>
								</a>
							</div>
							<div class="col-md-3 portfolio-grids">
								<a href="<?php echo $url;?>/images/16.jpg" rel="title" class="b-link-stripe b-animate-go thickbox">
									<img src="<?php echo $url;?>/images/16.jpg" class="img-responsive zoom-img" alt=""/>
									<div class="b-wrapper">
										<h5>Nuptials</h5>
										<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
									</div>
								</a>
							</div>
							<div class="col-md-3 portfolio-grids">
								<a href="<?php echo $url;?>/images/15.jpg" rel="title" class="b-link-stripe b-animate-go thickbox">
									<img src="<?php echo $url;?>/images/15.jpg" class="img-responsive zoom-img" alt=""/>
									<div class="b-wrapper">
										<h5>Nuptials</h5>
										<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
									</div>
								</a>
							</div>
							<div class="clearfix"> </div>
						</div>	
					</div>
					<div role="tabpanel" class="tab-pane fade" id="celebrations" aria-labelledby="celebrations-tab">
						<div class="tab_img">
							<div class="col-md-3 portfolio-grids">
								<a href="<?php echo $url;?>/images/22.jpg" rel="title" class="b-link-stripe b-animate-go thickbox">
									<img src="<?php echo $url;?>/images/22.jpg" class="img-responsive zoom-img" alt=""/>
									<div class="b-wrapper">
										<h5>Nuptials</h5>
										<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
									</div>
								</a>
							</div>
							<div class="col-md-3 portfolio-grids">
								<a href="<?php echo $url;?>/images/23.jpg" rel="title" class="b-link-stripe b-animate-go thickbox">
									<img src="<?php echo $url;?>/images/23.jpg" class="img-responsive zoom-img" alt=""/>
									<div class="b-wrapper">
										<h5>Nuptials</h5>
										<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
									</div>
								</a>
							</div>
							<div class="clearfix"> </div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- //gallery -->
<!-- contact -->
	<div class="contact" id="mail">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s"><span>Mail Us</span></h3>
			<div class="mail-grids">
				<div class="col-md-6 mail-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<form action="#" method="post">
						<input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
						<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
						<input type="text" name="Subject" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" required="">
						<textarea type="text"  name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required>Message...</textarea>
						<input type="submit" value="Submit Now">
					</form>
				</div>
				<div class="col-md-6 mail-grid-right">
					<div class="get-in animated wow slideInUp" data-wow-delay=".5s">
						<h4>Get In Touch</h4>
						<ul>
							<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+1234 567 891</li>
							<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+1234 567 892</li>
						</ul>
					</div>
					<div class="get-in animated wow slideInUp" data-wow-delay=".6s">
						<h4>Where We Are</h4>
						<ul>
							<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>4th Avenue, New Building,</li>
							<li>3rd Cross Road, </li>
							<li>New York City.</li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //contact -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-pos">
				<a href="#home1" class="scroll"><img src="<?php echo $url;?>/images/7.png" alt=" " class="img-responsive" /></a>
			</div>
			<div class="footer-logo">
				<a href="index.html" class="animated wow zoomIn" data-wow-delay=".5s">Nuptials</a>
				<p class="animated wow slideInUp" data-wow-delay=".5s">we are social</p>
			</div>
			<ul class="social-icons animated wow slideInUp" data-wow-delay=".6s">
				<li><a href="#" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a></li>
				<li><a href="#" class="icon-button instagram"><i class="icon-instagram"></i><span></span></a></li>
				<li><a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a></li>
				<li><a href="#" class="icon-button g-plus"><i class="icon-g-plus"></i><span></span></a></li>
			</ul>
		</div>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="<?php echo $url;?>/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>
