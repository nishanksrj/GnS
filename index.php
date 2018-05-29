<!DOCTYPE html>
<html lang="en">
<head>
	<title>Games and Sports Council,IITK</title>
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
<body id="home" style="transition:1s;opacity:0;" onload="animationOnPageLoad();">
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
		<!--background cover-->
		<div class="back-cover">
			<!--<div class="contaier-fluid"><button class="btn">51<sup>st</sup> Inter IIT Sports Meet</button></div>-->
			<div class="container-fluid">
				<a class="preWeb" data-toggle="tooltip" title="" data-original-title="Visit Old Website here." data-placement="left"  href="old/">Old Website<i style="width:20px;padding:0px;"class="fa fa-angle-right"></i></a>
			</div>
			<div class="container-fluid animated slideInUp" id="quote">Games & Sports Council<p>IIT Kanpur</p></div>
		</div>
		<!-- latest events information -->
		<div class="container-fluid recentNews">
			  <br>
			  <h1>RECENT EVENTS</h1>
			  <hr style="width:10vw;align:center;border-color:darkgray;border-width:1.5px;">
			  <br><br>
			  <div class="row">
			    <div class="col-md-12">
			      <div class="carousel carousel-showsixmoveone slide " id="carousel123">
				<div class=" carousel-inner">
				
										<!-- Important Important Important Important Important Important Important -->
				
				<!-- To add any recent news use the following instructions -->
				
				<!-- Remove 'active' class from the first news block -->
				<!-- Then create a new block of following model -->
				<!--
				<div class="item active">
					<div class="col-xs-12 col-sm-4 col-md-3" data-aos="flip-left" id="next id">
						<div class="news_list">
							<div class="news_list_text">
								<h2>Title</h2>
								<h4>Date</h4>
								<img class="news_list_img" src="image src">
								<br>
								Content goes here.
							</div>
							<button type="button" onclick="show_modal('modal_id');">
								Read More
							</button>
						</div>
					</div>
				</div>
					-->
				  
				<div class="item active">
				    <div class="col-xs-12 col-sm-4 col-md-3" data-aos="flip-left" id="13">
						<div class="news_list">
							<div class="news_list_text">
								<h2>Felicitation Ceremony '18</h2>
								<h4>20/03/18</h4>
								<img class="news_list_img" src="style/images/13.jpg">
								<br>
								<p class="textInfo">
As Felicitation Ceremony of Games and Sports Council completed, one more year of contingent is completed with happiness, sorrow, wins and defeats Find the photos <a target="_blank" href="https://www.facebook.com/pg/sports.iitk/photos/?tab=album&album_id=1650932001651334">here</a>
							</div>
							<button type="button" data-toggle="modal" data-target="#modal_13">
								Read More
							</button>
						</div>
					</div>
				  </div>
				
				<div class="item">
				    <div class="col-xs-12 col-sm-4 col-md-3" data-aos="flip-left" id="11">
						<div class="news_list">
							<div class="news_list_text">
								<h2>Summer Camp'18</h2>
								<h4>14/04/18</h4>
								<img class="news_list_img" src="style/images/11.jpg">
								<br>
								<p class="textInfo">Games and Sports Council brings Summer Camp for all the sports enthusiasts in the campus. Sweat it out and be a part of glory !!<br>Summer Camp Duration :- 7th May- 10th June, 2018
							</div>
							<button type="button" data-toggle="modal" data-target="#modal_11">
								Read More
							</button>
						</div>
					</div>
				  </div>
				  <div class="item">
				    <div class="col-xs-12 col-sm-4 col-md-3" data-aos="flip-left" id="12">
						<div class="news_list">
							<div class="news_list_text">
								<h2>Archery workshop</h2>
								<h4>20/03/18</h4>
								<img class="news_list_img" src="style/images/12.jpg">
								<br>
								<p class="textInfo">Archery workshop is here !!!<br>"Nothing Clears A Troubled Mind Better Than Shooting A Bow". Games and Sports Council, IIT Kanpur conducted Archery Workshop from 29th March-1st April. Find the photos <a target="_blank" href="https://www.facebook.com/pg/sports.iitk/photos/?tab=album&album_id=1645190955558772">here</a>
							</div>
							<button type="button" data-toggle="modal" data-target="#modal_12">
								Read More
							</button>
						</div>
					</div>
				  </div>
				  <div class="item">
				    <div class="col-xs-12 col-sm-4 col-md-3" data-aos="flip-left" id="10">
						<div class="news_list">
							<div class="news_list_text">
								<h2>Inferno'18</h2>
								<h4>17/02/18</h4>
								<img class="news_list_img" src="style/images/10.jpg">
								<br>
								<p class="textInfo">Time of the year when you can unleash the sportsperson in yourself for the glory of your pool and honour of your sport. Inferno '18 was held from 8 to 11 March. It brings to you a plethora of sporting events. Find the results <a target="_blank" href="https://docs.google.com/spreadsheets/d/10WJrzdyOtgG2yMqOqHg2p-fNp-4fFaNoVyqu2vfdL4E/edit#gid=0">here</a></p>
							</div>
							<button type="button" data-toggle="modal" data-target="#modal_10">
								Read More
							</button>
						</div>
					</div>
				  </div>
				  <div class="item">
				    <div class="col-xs-12 col-sm-4 col-md-3" data-aos="flip-left" id="9">
						<div class="news_list">
							<div class="news_list_text">
								<h2>JOSH'18</h2>
								<h4>17/02/18</h4>
								<img class="news_list_img" src="style/images/9.jpg">
								<br>
								<p class="textInfo">Josh '18, the annual sports festival, is to be held from 25th to 28th of January 2018. It brings you more than 20 different events 
							and 8 institute leagues. Register here: <a href="http://students.iitk.ac.in/josh">here</a></p>
							</div>
							<button type="button" data-toggle="modal" data-target="#modal_9">
								Read More
							</button>
						</div>
					</div>
				  </div>
				  
				  
				  <div class="item">
				    <div class="col-xs-12 col-sm-4 col-md-3" data-aos="flip-left" id="8">
						<div class="news_list">
							<div class="news_list_text">
								<h2>Udghosh Results</h2>
								<h4>16/10/17</h4>
								<img class="news_list_img" src="style/images/8.jpg">
								<br>
								<p class="textInfo">Udghosh was conducted from 12th to 15th Oct, in which IIT Kanpur came on top by winning Gold in 9 events, Silver in 3, and Bronze in 2. Visit the following link for more details here</p>
							</div>
							<button type="button" data-toggle="modal" data-target="#modal_8">
								Read More
							</button>
						</div>
					</div>
				  </div>
				  
				  
				  <div class="item">
				    <div class="col-xs-12 col-sm-4 col-md-3" data-aos="flip-left" id="7">
						<div class="news_list">
							<div class="news_list_text">
								<h2>Inter IIT Aquatics Results</h2>
								<h4>05/10/17</h4>
								<img class="news_list_img" src="style/images/7.jpg">
								<br>
								<p class="textInfo">IIT Kanpur emerged as winners in Water Polo and clinched 3rd position in Swimming in Men and Women Category in the Inter 
											IIT Aquatics Meet held at IIT Madras from 1st to 4th Oct, 2017. For more detailed results visit here</p>
							</div>
							<button type="button" data-toggle="modal" data-target="#modal_7">
								Read More
							</button>
						</div>
					</div>
				  </div>       

				  
				  <div class="item">
				    <div class="col-xs-12 col-sm-4 col-md-3" data-aos="flip-left" id="6">
						<div class="news_list">
							<div class="news_list_text">
								<h2>Teachers' Day Celebration</h2>
								<h4>05/09/17</h4>
								<img class="news_list_img" src="style/images/6.jpg">
								<br>
								<p class="textInfo">Games and Sports Council marked the Teachers' Day by expressing gratitude and felicitating the coaches for their huge contribution to the sports culture at IIT Kanpur. Find the photos here</p>
							</div>
							<button type="button" data-toggle="modal" data-target="#modal_6">
								Read More
							</button>
						</div>
					</div>
				  </div>
				  
				  
					<div class="item">
				    <div class="col-xs-12 col-sm-4 col-md-3" data-aos="flip-left" id="5">
						<div class="news_list">
							<div class="news_list_text">
								<h2>National Sports Day activities</h2>
								<h4>29/08/17</h4>
								<img class="news_list_img" src="style/images/5.jpg">
								<br>
								<p class="textInfo">Games and Sports Council organized fun informal activities like Tug of War, Dog and Bone, Sack Race, Spoon Ladoo Race and 
								Musical Chair marking the birthday of the legendary Hockey Player, Major Dhyan Chand Singh. Find the photos here</p>
							</div>
							<button type="button" data-toggle="modal" data-target="#modal_5">Read More</button>
						</div>
					</div>
				  </div>
				  
				  <div class="item">
				    <div class="col-xs-12 col-sm-4 col-md-3" data-aos="flip-left" id="4">
						<div class="news_list">
							<div class="news_list_text">
								<h2>Cyclothon at IIT Kanpur</h2>
								<h4>20/08/17</h4>
								<img class="news_list_img" src="style/images/4.jpg">
								<br>
								<p class="textInfo">Udghosh'17 organised their first event 'Cyclothon', a 10km race inside the campus open to all the campus residents. 
											The event was inaugurated by Nuzhat Parween, an Indian cricketer, as she flagged off the race and later handed over 
											the prizes to the winners. Find the photos here</p>
							</div>
							<button type="button" data-toggle="modal" data-target="#modal_4">Read More</button>
						</div>
					</div>
				  </div>
				  
				  
				 
	
				</div>
				<a class="left carousel-control" href="#carousel123" data-slide="prev"><i class="glyphicon
	 glyphicon-chevron-left"></i></a>
				<a class="right carousel-control" href="#carousel123" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
			      </div>
			    </div>
			  </div>
			  <br><br><hr style="width:10vw;align:center;border-color:darkgray;border-width:2px;">
			</div>
		</div>
		<div class="back-cover2">
			<!--<div class="container upcoming">
				<h1 style="font-family:'edo';">Upcoming Events</h1>
			</div>-->
		</div>
		<div class="container-fluid bestVideo" >
			<br>
			  <h1 style="text-align:center;">Best Campus Facilities</h1>
			  <hr style="width:10vw;align:center;border-color:darkgray;border-width:1.5px;">
			  <br><br>
			<div class="container upcoming" align="middle">
				<iframe width="80%" height="360" style="margin-top:10px;margin-bottom:10px;max-width: 900px;" src="https://www.youtube.com/embed/YR9qIwYABdY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				<br><br><hr style="width:10vw;align:center;border-color:darkgray;border-width:2px;">
			</div>
		</div>
		<div class="back-cover2">
			<!--<div class="container upcoming">
				<h1 style="font-family:'edo';">Upcoming Events</h1>
			</div>-->
		</div>
		<div class="container-fluid about">
			<div class="row">
				<div class="col-md-6" data-aos="fadeIn" style="padding:20px">
					<h2>About Us</h2>
					<h4>Games and Sports Council is the voice and face of IIT Kanpur sports community, responsible for management and conduction of all sporting events in the campus. This website is a forum for reaching out to the campus junta and beyond with news, achievements and experiences! A legacy of a determined struggle and expression of selfless passion!
						<br><br>Since its conception in 1962, the GnS Council has worked to promote more and more sports in the campus. We have come a long way, and have a lot further to go.
						<br><br>
						<a href="docs/Orientation-PPT.pdf" data-toggle="tooltip" title="Read more about us." data-placement="right">Games and Sports Council</a>
					</h4>
				</div>
				<div class="col-md-6" data-aos="fadeIn" style="min-height:60vh;">
					<iframe width="100%" height="360" src="https://www.youtube.com/embed/A-sHzaik-2U" frameborder="0" allowfullscreen=""></iframe>
				</div>
			</div>
		</div>
		<div class="modal animated slideInUp" id="modal_13">
			<div class="modal-dialog">
				<div class="modal-content">
			      		<div class="modal-header">
						<h2 style="display:inline-block">Felicitation Ceremony'18</h2>
						<span>
							<button type="button" class="remove" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i></button>
						</span>
					</div>
					<div class="modal-body divider-new2">
						<h4>09/04/18</h4>
						<img class="news_modal_img" src="style/images/13.jpg">
						<br><br>
						<p>
							As Felicitation Ceremony of Games and Sports Council completed, one more year of contingent is completed with happiness, sorrow, wins and defeats. Find the photos <a target="_blank" href="https://www.facebook.com/pg/sports.iitk/photos/?tab=album&album_id=1650932001651334">here</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="modal animated slideInUp" id="modal_12">
			<div class="modal-dialog">
				<div class="modal-content">
			      		<div class="modal-header">
						<h2 style="display:inline-block">Archery workshop</h2>
						<span>
							<button type="button" class="remove" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i></button>
						</span>
					</div>
					<div class="modal-body divider-new2">
						<h4>20/03/18</h4>
						<img class="news_modal_img" src="style/images/12.jpg">
						<br><br>
						<p>
							Archery workshop is here !!!<br>"Nothing Clears A Troubled Mind Better Than Shooting A Bow". Games and Sports Council, IIT Kanpur conducted Archery Workshop from 29th March-1st April. Find the photos <a target="_blank" href="https://www.facebook.com/pg/sports.iitk/photos/?tab=album&album_id=1645190955558772">here</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="modal animated slideInUp" id="modal_11">
			<div class="modal-dialog">
				<div class="modal-content">
			      		<div class="modal-header">
						<h2 style="display:inline-block">Summer Camp'18</h2>
						<span>
							<button type="button" class="remove" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i></button>
						</span>
					</div>
					<div class="modal-body divider-new2">
						<h4>14/04/18</h4>
						<img class="news_modal_img" src="style/images/11.jpg">
						<br><br>
						<p>
							Games and Sports Council brings Summer Camp for all the sports enthusiasts in the campus. Sweat it out and be a part of glory !!<br>Summer Camp Duration :- 7th May- 10th June, 2018
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="modal animated slideInUp" id="modal_10">
			<div class="modal-dialog">
				<div class="modal-content">
			      		<div class="modal-header">
						<h2 style="display:inline-block">Inferno'18</h2>
						<span>
							<button type="button" class="remove" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i></button>
						</span>
					</div>
					<div class="modal-body divider-new2">
						<h4>11/03/18</h4>
						<img class="news_modal_img" src="style/images/10.jpg">
						<br><br>
						<p>
							Time of the year when you can unleash the sportsperson in yourself for the glory of your pool and honour of your sport. Inferno '18 was held from 8 to 11 March. It brings to you a plethora of sporting events. Find the results <a target="_blank" href="https://docs.google.com/spreadsheets/d/10WJrzdyOtgG2yMqOqHg2p-fNp-4fFaNoVyqu2vfdL4E/edit#gid=0">here</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="modal animated slideInUp" id="modal_9">
			<div class="modal-dialog">
				<div class="modal-content">
			      		<div class="modal-header">
						<h2 style="display:inline-block">JOSH'18</h2>
						<span>
							<button type="button" class="remove" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i></button>
						</span>
					</div>
					<div class="modal-body divider-new2">
						<h4>17/02/18</h4>
						<img class="news_modal_img" src="style/images/9.jpg">
						<br><br>
						<p>
							Josh '18, the annual sports festival, is to be held from 25th to 28th of January 2018. It brings you more than 20 different events 
							and 8 institute leagues. Register <a href="http://students.iitk.ac.in/josh">here</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="modal animated slideInUp" style="" id="modal_8">
			<div class="modal-dialog">
				<div class="modal-content">
			      		<div class="modal-header">
						<h2 style="display:inline-block">Udghosh Results</h2>
						<span>
							<button type="button" class="remove" data-dismiss="modal">
							<i class="glyphicon glyphicon-remove"></i></button>
						</span>
					</div>
					<div class="modal-body divider-new2">
						<h4>16/10/17</h4>
						<img class="news_modal_img" src="style/images/8.jpg" >
						<br><br>
						<p>Udghosh was conducted from 12th to 15th Oct, in which IIT Kanpur came on top by winning Gold in 9 events, Silver in 3, and Bronze in 2. Visit the following link for more details <a href="https://www.facebook.com/sports.iitk/photos/a.283145591763322.67039.280828161995065/1477495342328335/?type=3&theater">here</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="modal animated slideInUp" id="modal_7">
			<div class="modal-dialog">
				<div class="modal-content">
			      		<div class="modal-header">
						<h2 style="display:inline-block;">Inter IIT Aquatics Results</h2>
						<span>						
							<button type="button" class="remove" data-dismiss="modal">
								<i class="glyphicon glyphicon-remove"></i>
							</button>
						</span>
					</div>
					<div class="modal-body divider-new2">
						<h4>5/10/17</h4>
						<img class="news_modal_img" src="style/images/7.jpg">
						<br><br>
						<p>IIT Kanpur emerged as winners in Water Polo and clinched 3rd position in Swimming in Men and Women Category in the Inter 
											IIT Aquatics Meet held at IIT Madras from 1st to 4th Oct, 2017. For more detailed results visit <a href="http://www.interiit.com/scheduleandresults">here</a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="modal animated slideInUp" id="modal_6">
			<div class="modal-dialog">
				<div class="modal-content">
			      		<div class="modal-header">
						<h2 style="display:inline-block">Teachers' Day Celebration</h2>
						<span>						
							<button type="button" class="remove" data-dismiss="modal">
								<i class="glyphicon glyphicon-remove"></i>
							</button>
						</span>
					</div>
					<div class="modal-body">
						<h4>5/9/17</h4>
						<img class="news_modal_img" src="style/images/6.jpg">
						<br><br>
						<p>Games and Sports Council marked the Teachers' Day by expressing gratitude and felicitating the coaches for their huge contribution to the sports culture at IIT Kanpur. Find the photos <a href="https://www.facebook.com/280828161995065/photos/?tab=album&album_id=1442317465846123">here</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="modal animated slideInUp" id="modal_5">
			<div class="modal-dialog">
				<div class="modal-content">
			      		<div class="modal-header">
						<h2 style="display:inline-block">National Sports Day activities</h2>
						<span>
							<button type="button" class="remove" data-dismiss="modal">
								<i class="glyphicon glyphicon-remove"></i>
							</button>
						</span>
					</div>
					<div class="modal-body">
						<h4>29/08/17</h4>
						<img class="news_modal_img" src="style/images/5.jpg">
						<br><br>
						<p>Games and Sports Council organized fun informal activities like Tug of War, Dog and Bone, Sack Race, Spoon Ladoo Race and 
								Musical Chair marking the birthday of the legendary Hockey Player, Major Dhyan Chand Singh. Find the photos <a href="https://www.facebook.com/pg/sports.iitk/photos/?tab=album&album_id=1435982146479655">here</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="modal animated slideInUp" id="modal_4">
			<div class="modal-dialog">
				<div class="modal-content">
			      		<div class="modal-header">
						<h2 style="display:inline-block">Cyclothon at IIT Kanpur</h2>
						<span>
							<button type="button" class="remove" data-dismiss="modal">
								<i class="glyphicon glyphicon-remove"></i>
							</button>
						</span>
					</div>
					<div class="modal-body">
						<h4>20/08/17</h4>
						<img class="news_modal_img" src="style/images/4.jpg">
						<br><br>
						<p>
								Udghosh'17 organised their first event 'Cyclothon', a 10km race inside the campus open to all the campus residents. 
											The event was inaugurated by Nuzhat Parween, an Indian cricketer, as she flagged off the race and later handed over 
											the prizes to the winners. Find the photos <a href="https://www.facebook.com/pg/udghosh.iitk/photos/?tab=album&album_id=1261370053972874">here</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="modal animated slideInUp" id="modal_3">
			<div class="modal-dialog">
				<div class="modal-content">
			      		<div class="modal-header">
						<h2 style="display:inline-block">Taekwondo state Championship at IIT Kanpur</h2>	
						<span>
							<button type="button" class="remove" data-dismiss="modal">
								<i class="glyphicon glyphicon-remove"></i>
							</button>
						</span>
					</div>
					<div class="modal-body">
						<h4>22/07/17</h4>
						<img class="news_modal_img" src="style/images/3.jpg">
						<br><br>
						<p>
								Taekwondo state Championship was held recently within the premises of IIT Kanpur. Taekwondo club IIT Kanpur 
											grabbed a number of medals in different weight category and stood Overall 2nd in the event POOMSAE.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="modal animated slideInUp" id="modal_2">
			<div class="modal-dialog">
				<div class="modal-content">
			      		<div class="modal-header">
						<h2 style="display:inline-block">Shooting Club participated in 7th UP pre state championship</h2>
						<span>
							<button type="button" class="remove" data-dismiss="modal">
								<i class="glyphicon glyphicon-remove"></i>
							</button>
						</span>
					</div>
					<div class="modal-body">
						<h4>07/07/17</h4>
						<img class="news_modal_img" src="style/images/2.jpg">
						<br><br>
						<p>
								Shooting Club, IIT Kanpur has participated in 7th UP pre state championship bringing laurels to our institute by winning.
											Squadron Leader Sandeep Sharma (M. Tech 2nd year, EE dept) IAF won Gold Medal in individual event and Rintu Bhaskar 
											(PhD, Nuclear Engg) won Bronze Medal in team event in Pre UP State Shooting Championship at Moradabad.
											Vinay Kumar (PhD, CSE dept) also participated and all three qualified to play UP State level Shooting.
						</p>
					</div>
				</div>
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
			<div class="container-fluid" align="center"><a style="color:darkgray;" href="feedback.php">Give us a feedback</a><br> &#169; 2018 Copyright: Web Executive, GnS Council</div>
		</footer>
		<a href="javascript:" id="return-to-top" data-toggle="tooltip" data-placement="left" title="Scroll to the top"><i class="glyphicon glyphicon-chevron-up"></i></a>
		<script>
		
		(function(){
  // setup your carousels as you normally would using JS
  // or via data attributes according to the documentation
  // https://getbootstrap.com/javascript/#carousel
  $('#carousel123').carousel({ interval: 4000 });
  $('#carouselABC').carousel({ interval: 3600 });
}());

(function(){
  $('.carousel-showsixmoveone .item').each(function(){
    var itemToClone = $(this);

    for (var i=1;i<4;i++) {
      itemToClone = itemToClone.next();

      // wrap around if at end of item collection
      if (!itemToClone.length) {
        itemToClone = $(this).siblings(':first');
      }

      // grab item, clone, add marker class, add to collection
      itemToClone.children(':first-child').clone()
        .addClass("cloneditem-"+(i))
        .appendTo($(this));
    }
  });
}());
function animationOnPageLoad(){
	var a=document.querySelector("#home");
	a.style.opacity=1;
}
    AOS.init();  //Important:- initialize AOS plugin

$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});

			</script>
	</body>
</html>
