<!DOCTYPE html>
<html>
<head>
	<title>Events, GnS IITK</title>
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
	<nav class="navbar navbar-inverse transparent ">
		<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="http://students.iitk.ac.in/sports"><div class="logoContainer"><img src="style/images/logo.png" style="width:50px;height:50px;"></div></a>

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
					<li>
						<div class="dropdown nav-link">
							<a class="dropbtn" style="text-decoration:none;color:lightgray;">Sports
								<i class="fa fa-caret-down"></i>
							</a>
							<div class="dropdown-content">
								<a href="sports.php" class="nav-link">Sports</a>
								<a href="clubs.php" class="nav-link">Clubs</a>
								<a href="events.php" class="nav-link">Events</a>
							</div>
						</div>
					</li>
					<li><a href="interiit.php" class="nav-link">Inter IIT</a></li>
					<li>
						<div class="dropdown nav-link">
							<a class="dropbtn" style="text-decoration:none;color:lightgray;">Important
								<i class="fa fa-caret-down"></i>
							</a>
							<div class="dropdown-content">
								<a href="awards.php" class="nav-link">Awards</a>
								<a href="ob.php" class="nav-link">Orientation Brochure</a>
							</div>
						</div>
					</li>

					<li><a href="contact.php" class="nav-link">Contact Us</a></li>

				</ul>
			</div>
		</div>
		</div>
	</nav>
	<div class="firstCover container-fluid">
		<p style='font-family:"edo";font-size:4em;color:lightgray;text-align:center;flex-direction:row;display:flex;justify-content:center;align-items:center;'>Events</p>
		<div class="container-fluid">
		<div class="row sports_info">
			<div class="sports_container col-lg-3 col-md-3 col-sm-4 col-xs-6 animated" data-aos="flip-left">
				<div class="sports_block" data-toggle="modal" data-target="#interiit">
					<p>Inter-IIT</p>
					<div class="sports_image">
						<img src="style/images/interiit.jpg">
					</div>
					<button type="button" data-toggle="modal" data-target="#aquatics">Read More</button>
				</div>
			</div>
			<div class="sports_container col-lg-3 col-md-3 col-sm-4 col-xs-6 animated" data-aos="flip-left">
				<div class="sports_block" data-toggle="modal" data-target="#udghosh">
					<p>Udghosh</p>
					<div class="sports_image">
						<img src="style/images/udghosh.jpg">
					</div>
					<button type="button" data-toggle="modal" data-target="#athletics">Read More</button>
				</div>
			</div>
			<div class="sports_container col-lg-3 col-md-3 col-sm-4 col-xs-6 animated" data-aos="flip-left">
				<div class="sports_block" data-toggle="modal" data-target="#inferno">
					<p>Inferno</p>
					<div class="sports_image">
						<img src="style/images/inferno.jpg">
					</div>
					<button type="button" data-toggle="modal" data-target="#badminton">Read More</button>
				</div>
			</div>
			<div class="sports_container col-lg-3 col-md-3 col-sm-4 col-xs-6 animated" data-aos="flip-left">
				<div class="sports_block" data-toggle="modal" data-target="#josh">
					<p>Josh</p>
					<div class="sports_image">
						<img src="style/images/josh.jpg">
					</div>
					<button type="button" data-toggle="modal" data-target="#basketball">Read More</button>
				</div>
			</div>
			<div class="sports_container col-lg-3 col-md-3 col-sm-4 col-xs-6 animated" data-aos="flip-left">
				<div class="sports_block" data-toggle="modal" data-target="#enthusia">
					<p>Enthusia</p>
					<div class="sports_image">
						<img src="style/images/enthusia.jpg">
					</div>
					<button type="button" data-toggle="modal" data-target="#cricket">Read More</button>
				</div>
			</div>
			<div class="sports_container col-lg-3 col-md-3 col-sm-4 col-xs-6 animated" data-aos="flip-left">
				<div class="sports_block" data-toggle="modal" data-target="#summercamp">
					<p>Summer Camp</p>
					<div class="sports_image">
						<img src="style/images/summercamp.jpg">
					</div>
					<button type="button" data-toggle="modal" data-target="#football">Read More</button>
				</div>
			</div>

		</div>
		</div>
	</div>



	<!-- udghosh -->
	<div class="modal animated slideInUp" id="udghosh">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
			<span><button type="button" class="remove" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i></button></span>
			<h2>Udghosh</h2>
			</div>
			<div class="modal-body divider-new2">
				<p>Udghosh is the annual sports festival of IIT Kanpur, held each year in October. Over the years Udghosh has evolved and expanded to become the biggest inter-collegiate sports extravaganza in India. Being one of the most eagerly awaited events of the year, it is a national platform where the youth of the nation get together, interact and indulge in a fair play. Udghosh witnesses participation from students from over 200 colleges from all over India. Students from all fields – humanities, engineering, science, commerce, law and medicine participate in the event with great gusto. A footfall of over 30,000 is witnessed during the festival.
<br><br>
Udghosh has come up as a classic example of the fact that it’s the endeavour that counts. Our efforts have always aimed to bring about rise in competition level among the youth, empowering the masses with the torch of social awareness, keeping the grandeur of entertainment and professional shows alive. Udghosh brings to the masses a plethora of events, comprising of all major sports, workshops and informal events.</p>
				<a href="https://www.udghosh.org/" target="_blank" data-toggle="tooltip" data-placement="right" title="Visit Udghosh website">Udghosh</a>
			</div>
			</div>
		</div>
	</div>

	<!-- inferno -->
	<div class="modal animated slideInUp" id="inferno">
		<div class="modal-dialog">
		<div class="modal-content">
      		<div class="modal-header">
			<span><button type="button" class="remove" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i></button></span>
			<h2>Inferno</h2>
		</div>
			<div class="modal-body divider-new2">
				<p>Inferno is the Inter-Hall Sports Festival of IIT Kanpur. It serves as a platform to bring forward the sporting talent in the campus where students play hard to fight for the glory of their respective halls. ‘Inferno’ comes as a confluence of spectacular performances put up by the participating pools. Hostels leave no stone unturned to fight it out till the very end, and gain the vital ‘General Championship’ points at stake.
<br><br>
Freshers’ Inferno, the Inter Hall Sports Competition exclusively for freshers, is also conducted to scout new talent and bring out enthusiasm in freshmen. This is the first competition of the GC, a chance to give one’s pool a head-start or outperforming individuals a prospective place in the Institute Teams as well!</p>
			<a href="http://students.iitk.ac.in/sports/Inferno%202016" target="_blank" data-toggle="tooltip" data-placement="right" title="Visit Inferno'18">Inferno</a>
			</div>
		</div>
		</div>
	</div>

	<!-- josh-->
	<div class="modal animated slideInUp" id="josh">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
			<span><button type="button" class="remove" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i></button></span>
			<h2>Josh</h2>
			</div>
			<div class="modal-body divider-new2">
				<p>Josh is the annual sports festival, organized for the students of IITK. Since its inception in 2004, it has become one of the most popular events in the campus. With no restriction on the number of participants in any of the events, the aim of the festival is to bring out the sports person in each and every individual in the campus.
<br><br>
Josh '18 is slated to be held from 25th to 28th of January 2018. It brings you more than 20 different events including sporting events and informal events. This year Josh is organising 8 institute leagues on the demand of the students community. Register here in any number of events here :-

</p>
			<a href="http://students.iitk.ac.in/josh/" target="_blank" data-placement="right" data-toggle="tooltip" title="Visit Josh'18 here.">Josh</a>
			</div>
			</div>
		</div>
	</div>

	<!-- enthusia-->
	<div class="modal animated slideInUp" id="enthusia">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
			<span><button type="button" class="remove" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i></button></span>
			<h2>Enthusia</h2>
			</div>
			<div class="modal-body divider-new2">
				<p>Enthusia is the PG Sports League of IIT Kanpur. It is conducted in the even semester with the aim of encouraging PG participation in sports activities on campus. PGs from different halls are seen competing and cheering on various fields and courts. The enthusiasm, finesse and competition is a feast to the eyes.</p>
				<a href="http://students.iitk.ac.in/sports/enthusia" target="_blank" data-toggle="tooltip" data-placement="right" title="Visit Enthusia here">Enthusia</a>
			</div>
			</div>
		</div>
	</div>

	<!--interiit -->
	<div class="modal animated slideInUp" id="interiit">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
			<span><button type="button" class="remove" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i></button></span>
			<h2>Inter-IIT</h2>
			</div>
			<div class="modal-body divider-new2">
				<p>Inter-IIT Sports Meet is the most eagerly looked after sports event amongst campus teams, wherein all IITs compete for glory. It comprises of two meets, Inter IIT Main Meet in December and Inter IIT Aquatics Meet. Aquatics Meet is held separately (generally in the first week of October) as part of Inter IIT each year preceding the main meet. Inter IIT is hosted by IITs turn by turn. General Championship is awarded to the teams based on their combined performance in Inter IIT Main Meet and Inter IIT Aquatics meet. IIT Kanpur hosted the Inter IIT 2016 edition. The grandness of the event can be judged by the fact that the teams practice throughout the year to give their best shot in a 10 day tournament.<br><br>&nbsp;&nbsp;Format: Each sport carries 10 points for the winners, 6 for the runners up, 4 for the 3rd place and 2 for the 4th place. Total points for a particular IIT are summed up and the total is known as their GC tally. The IIT with maximum GC tally wins the Inter IIT Sports meet, and gets to lift the prestigious GC trophy. The dream of every member of the contingent is to perform to their best of abilities at the prestigious Inter IIT tournament and contribute to bringing the GC home. IIT Kanpur has been winning the overall General Championship for the past three years. We are looking up to <b>#MissionMadras</b>.
</p>
			<a href="http://www.interiit.com" target="_blank" data-placement="right" data-toggle="tooltip" title="Visit Inter-IIT website">Inter-IIT</a>
			</div>
			</div>
		</div>
	</div>

	<!-- summer camp -->
	<div class="modal animated slideInUp" id="summercamp">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
			<span><button type="button" class="remove" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i></button></span>
			<h2>Summer Camp</h2>
			</div>
			<div class="modal-body divider-new2">
				<p>Summer Camp is the backbone of competitive sporting at IIT Kanpur. As the name vividly suggests, Summer Camp is a 35-40 day camp organized by the Games and Sports Council during the three month summer break, wherein players from all the teams hone their skills in a particular sport. Teams attend 2-3 practice sessions a day. Summer Camp majorly focuses on capturing and refining new talent.
<br><br>
This is the time when players experience a noticeable transformation in the game, parallelly sowing seeds for exceptional team bonding. Consequently, a whopping fraction of our Inter IIT Contingent is a product of Summer Camps every year. Appetizing Summer Camp messing and combined team stays in one hall are a few other exciting experiences of the camp.</p>
				<a href="http://students.iitk.ac.in/summercamp" target="_blank" data-toggle="tooltip" data-placement="right" title="Visit more.">Summer Camp</a>
			</div>
			</div>
		</div>
	</div>

	<footer data-aos="fadeIn" data-aos-offset="5" data-aos-duration=".3">
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
			<div class="container-fluid" align="center"><a style="color:darkgray;" href="feedback.php">Give us a feedback</a><br> &#169; 2018 Copyright: Web Executive, GnS Council</div>
	</footer>
	<script>
		AOS.init();
		$(document).ready(function(){
		    $('[data-toggle="tooltip"]').tooltip();
		});
	</script>
</body>
</html>
