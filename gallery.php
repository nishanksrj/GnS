<!DOCTYPE html>
<html>
<head>
	<title>Gallery, Gns IITK</title>
	<link rel="shortcut icon" type="image/x-icon" href="style/images/logo.png" />
	<meta name="keyword" content="Games,Sports,Games and Sports Council,IITK">
	<meta name=”description” content="">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->
	
	<!-- JQuery plugins -->
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.compatibility.js"></script>
	<script type="text/javascript" src="js/animation.js"></script>
	<script type="text/javascript" src="js/aos.js"></script>
	<script type="text/javascript" src="js/wow.min.js"></script>
	<script type="text/javascript" src="js/jquery.waypoints.js"></script>
</head>
<body>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Bootstrap 101 Template</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		
		<link href="style/layout.css" rel="stylesheet">
		
		<link href="style/sports.css" rel="stylesheet">
		
		<link href="style/aos.css" rel="stylesheet">
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<!-- Animation css -->
		<link href="style/animate.css" rel="stylesheet">

		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>

	<!-- navigation bar -->
	<nav class="navbar navbar-default transparent navbar-fixed-slide navbar-fixed-slide-right">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="#"><div class="logoContainer"><img src="style/images/logo.png" style="width:50px;height:50px;"></div></a>
			  
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
			</button>
			
			</div>
			<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">
				<div id="mynavbar">
					<ul class="nav navbar-nav navbar-right">
					  <li><a href="index.php" class="nav-link">Home</a></li>
					  <li><a href="sports.php" class="nav-link">Sports</a></li>
					  <li><a href="clubs.php" class="nav-link">Clubs</a></li>
					  <li><a href="events.php" class="nav-link">Events</a></li>
					  <li><a href="interiit.php" class="nav-link">Inter IIT</a></li>
					  <li><a href="awards.php" class="nav-link">Awards</a></li>
					  <li><a href="contact.php" class="nav-link">Contact Us</a></li>
					</ul>
				</div>
			</div>
		  </div>
		</nav>	
	<div class="back-cover">
	</div>
	<div class="galleryContainer">
		<div class="container">
			<ul>
				<li class="animateColumn"><img src="https://i.imgur.com/veGcOkd.jpg"></li>
				<li class="animateColumn"><img src="style/images/logo.png"></li>
				<li class="animateColumn"><img src="style/images/logo.png"></li>
				<li class="animateColumn"><img src="style/images/logo.png"></li>
				<li class="animateColumn"><img src="style/images/logo.png"></li>
				<li class="animateColumn"><img src="style/images/logo.png"></li>
				<li class="animateColumn"><img src="style/images/logo.png"></li>
				<li class="animateColumn"><img src="style/images/logo.png"></li>
				<li class="animateColumn"><img src="style/images/logo.png"></li>
			</ul>
		</div>
	</div>
	<footer data-aos="fadeIn" data-aos-offset="5">
			<ul>
				<li>
					<a href="https://www.facebook.com/sports.iitk/?fref=ts" class="fa fa-facebook"></a>
				</li>
				<li>
					<a href="https://www.instagram.com/games_sports_council/?hl=en" class="fa fa-instagram"></a>
				</li>
				<li>
					<a href="https://www.youtube.com/channel/UC_DYfHIfAlTH3ECXXCGo_9g" class="fa fa-youtube"></a>
				</li>
			</ul>
			<div class="container-fluid" align="center"> &#169; 2018 Copyright: Web Executive, GnS Council</div>
	</footer>
	<script>
		AOS.init();
		var scroller = function() {
		var i = 0;
		$('.animateColumn').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('animated') ) {

				i++;

				$(this.element).addClass('item-animate');
				setTimeout(function(){

					$('body .animateColumn.item-animate').each(function(k){
						var el = $(this);
						setTimeout( function () {
							el.addClass('fadeInUp animated');
							el.removeClass('item-animate');
						},  k * 200, 'easeInOutExpo' );
					});

				}, 100);

			}

		} , { offset: '85%' } );
	};
		scroller();
	</script>
</body>
</html>
