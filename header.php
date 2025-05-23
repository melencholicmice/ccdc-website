<!DOCTYPE html>
<html>
	<head>
		<title>Centre For Career Development and Counselling - IIT Patna</title>
		<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'> -->
		<link href="slick/slick.css" rel="stylesheet" type="text/css">
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="style.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="jquery/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="jquery/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="slick/slick.min.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="text/javascript">
			$(document).ready(function(){
				$('.home-carousel').slick({
					autoplay: true,
					autoplaySpeed: 2000
				});
			});
		</script>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	</head>
	<body>
	<div class="full-head" style="height: calc;">
        <div class="container" style="margin-right: 0; margin-left: 0; width: 100%; max-width: 100%; height: auto; padding:0rem 0.3rem;">
            <nav class="navbar navbar-expand-lg" style="max-width: 100%;" id = "navbar">
                <a href="http://www.iitp.ac.in/placement/" id = "logo_a">
                    <div class="college-logo">
                        <img src="images/iitp2.png" alt="Logo">
                    </div>
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#nav" >
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="nav">
                    <div id = "nav-inside">
						<ul class="navbar-nav">
							<li class="nav-item" ><a class="nav-link" href="index.php"> Home </a></li>
							<li class="nav-item"  >
								<a class="nav-link">IIT Patna</a>
								<ul class="submenu">
									<li class="nav-item"><a class="nav-link" href="message.php">Director's Message</a></li>
									<li class="nav-item"><a class="nav-link" href="PIC_message.php">PIC Message</a></li>
									<li class="nav-item"><a class="nav-link" href="https://academics.iitp.ac.in/">Academics</a></li>
									<li class="nav-item"><a class="nav-link" href="tour.php">Campus Tour</a></li>
									<li class="nav-item"><a class="nav-link" href="activities.php">Student Activities</a></li>
								</ul>
							</li>
							<li class="nav-item"  >
								<a class="nav-link" href="procedure.php">Recruiters Corner</a>
								<ul class="submenu">
									<li class="nav-item"><a class="nav-link" href="fac.php">CCDC Facilities</a></li>
									<li class="nav-item"><a class="nav-link" href="procedure.php">Placement Procedure</a></li>
									<li class="nav-item"><a class="nav-link" href="downloads/files/TPC_Policy_for_recruiters.pdf">CCDC Policy for recruiters</a></li>
									<li class="nav-item"><a class="nav-link" href="Programmes.php">Academic Programmes and Brochures</a></li>
								</ul>
							</li>
							<li class="nav-item"  >
								<a class="nav-link" href="events.php">Events</a>
							</li>

							<li class="nav-item"  >
								<a class="nav-link" href="placementsumm.php">Statistics</a>
								<ul class="submenu">
									<li class="nav-item"><a class="nav-link" href="pastRec.php">Past Recruiters</a></li>
									<li class="nav-item"><a class="nav-link" href="placementsumm.php">Placement Statistics</a></li>
									<li class="nav-item"><a class="nav-link" href="trainingsumm.php">Internship recruiters</a></li>
								</ul>
							</li>
							<li class="nav-item"  >
								<a class="nav-link" href="https://aipciits.com/">AIPC</a>
								<ul class="submenu">
									<li class="nav-item"><a class="nav-link" href="https://aipciits.com/guidelines/">AIPC Guidlines</a></li>
								</ul>
							</li>
							<li class="nav-item"  >
								<a class="nav-link" href="contactus.php">Contact Us</a>
								<ul class="submenu" >
									<li class="nav-item"><a class="nav-link" href="howtoreach.php">Reaching IITP</a></li>
									<li class="nav-item"><a class="nav-link" href="contactus.php">Our Team</a></li>
								</ul>
							</li>
							<!-- <li class="nav-item reg"  >
								<a class="nav-link" href="https://forms.gle/7etN4RzVdqK9gHaT7">Register</a>
							</li> -->
						</ul>
						<ul class="navbar-nav" id="reg-navbar" style="margin-left: 20px;">
							<button class="btn btn-info blink-button" style="background-color: #000s; color: #000;">
								<a href="https://docs.google.com/forms/d/e/1FAIpQLSeS_9yWJxpWWTHvs-MnD_mMd07rcyLwC9anuSB4E31-RA7VQw/viewform?vc=0&c=0&w=1&flr=0" class="reg-navbar-a" target="_blank">Register for FTE hiring</a>
							</button>
							<button class="btn btn-info blink-button">
								<a href="https://docs.google.com/forms/d/e/1FAIpQLSdK74kAg2ZWfsodJxci6TbKAxIalCi8WHRmcuaKkvJH87k59A/viewform?vc=0&c=0&w=1&flr=0" class="reg-navbar-a" target="_blank">Register for Intern hiring</a>
							</button>
						</ul>						<!-- Blink effect for the button -->
						<style>
							.blink-button {
								animation: blink 1.5s linear infinite;
								box-shadow: 0 0 8px #4d79ff, 0 0 15px #4d79ff, 0 0 25px #4d79ff;
								transition: all 0.3s ease;
							}

							.blink-button:hover {
								transform: scale(1.05);
								box-shadow: 0 0 12px #4d79ff, 0 0 20px #4d79ff, 0 0 30px #4d79ff;
							}

							@keyframes blink {
								0% { opacity: 1; box-shadow: 0 0 8px #4d79ff, 0 0 15px #4d79ff, 0 0 25px #4d79ff; }
								50% { opacity: 0.7; box-shadow: 0 0 12px #4d79ff, 0 0 20px #4d79ff, 0 0 30px #4d79ff; }
								100% { opacity: 1; box-shadow: 0 0 8px #4d79ff, 0 0 15px #4d79ff, 0 0 25px #4d79ff; }
							}
						</style>					
					</div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

		<!-- <div class="full-head" style="background-color: #ffffff; margin-bottom: 100px; position: absolute;">
			<div class="head-left">
				<a href="http://www.iitp.ac.in/placement/">
					<div class="college-logo">
						<img src="images/iitp2.png" style="padding:0px 0px 0px 0px; height: 90%;"/>
						<div class="college-text" style="padding-left:22px;padding-top:18px;">
							<span style="font-size:25pt;">Centre for Career Development</span><br /><span style="font-size:17pt;">कैरियर विकास केंद्र</span><br />
							<h4>Indian Institute of Technology Patna<br /><span style="font-size:15pt;">भारतीय प्रौद्योगिकी संस्थान पटना</span></h4>
						</div>
					</div>
				</a>
			</div>
			<div class="head-mid">
				<div class="head-mid-1" style="box-shadow: 0px 1px 2px 3px #024e86;  background-color: #041166;	">
					<div class="mobile-menu-toggle">
						<i class="fas fa-bars" style="size: auto;"></i>
					</div>
					<div class="navbar-collapse scrollspy smooth-scroll collapse" id="nav" style="padding:0px;">
						<ul>
							<li><a href="index.php"> Home </a>
							</li>
							<li><a>About Us</a>
								<ul>
									<li><a href="message.php">Message</a></li>
									<li><a href="acadtieups.php">Academic Tieups</a></li>
									<li><a href="tour.php">Campus Tour</a></li>
									<li><a href="activities.php">Activities</a></li>
								</ul>
							</li>
							<li><a href="procedure.php">Recruiters Corner</a>
							<ul>
								<li><a href="fac.php">Facilities</a></li>
								<li><a href="demographics.php">Demographics</a></li>
								<li><a href="procedure.php">Placement Procedure</a></li>
								<li><a href="downloads.php">Downloads</a></li>
								<li><a href="downloads/files/TPC_Policy_for_recruiters.pdf">TPC Policy for recruiters</a></li>
								<li><a href="Programmes.php">Programmes</a></li>
								<li><a href="studentsprofile.php">Student Profiles</a></li>
							</ul>
							</li>
							<li><a href="internships.php">Alumni</a>
							<li><a href="#">Alumni</a>
							<ul>
								<li><a href="downloads.php">Downloads</a></li>
								<li><a href="demo.php">Demographics</a></li>
								<li><a href="fac.php">Facilities</a></li>
								<li><a href="internships.php">Student Profiles</a></li>
							</ul>
							</li>
							<li><a href="events.php">Training Events</a>
							<li><a href="https://www.iitp.ac.in/acad/">Academics</a>

							</li>
							<li><a href="pastRec.php">Placement Records</a>

							<ul>
								<li><a href="pastRec.php">Past Recruiters</a></li>
								<li><a href="placementsumm.php">Placement Statistics</a></li>
								<li><a href="trainingsumm.php">Internship provider</a></li>
							</ul>
							</li>
							<li><a href="contactus.php">Contact Us</a>
							<ul>
								<li><a href="contactus.php">Representatives</a></li>
								<li><a href="howtoreach.php">Reaching IITP</a></li>
							</ul>
							</li>
						</ul>
					</div>
				</div>
				<div class="head-mid-2">
					<div class="news-container">
						<a href="https://forms.gle/FdDpWF3dgKx9iQLB6" target="_blank">
							<div class="title">
								<div class="butn" style="width:fit-content; margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px;">
									<p><a href="https://forms.gle/FdDpWF3dgKx9iQLB6" target="_blank"><button id='registr' class='btn-reg'><div class="blink_me" style="font-size: 15px;">REGISTER</div></button></a></p>
								</div>
								Register
							</div>
						</a>
						<div class="hwrap"><div class="hmove">
							<div class="hitem">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
							<div class="hitem">Aliquam consequat varius consequat.</div>
							<div class="hitem">Fusce dapibus turpis vel nisi malesuada sollicitudin.</div>
							<div class="hitem">Pellentesque auctor molestie orci ut blandit.</div>
						</div></div>
						<ul>
							<li>
								Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam!
							</li>

							<li>
								Lorem ipsum dolor sit
							</li>

							<li>
								Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam!
							</li>
						</ul>
						<div class="butn" style="width:fit-content; margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px;">
							<p><a href="https://forms.gle/FdDpWF3dgKx9iQLB6" target="_blank"><button id='registr' class='btn-reg'><div class="blink_me" style="font-size: 15px;">REGISTER</div></button></a></p>
						</div>
						<a href="http://www.iitp.ac.in/placement/">
							<div class="college-text" style="padding-left:22px;padding-top:18px;">
								<span style="font-size:25pt;">Centre for Career Development</span><br /><span style="font-size:17pt;">कैरियर विकास केंद्र</span><br />
								<h4>Indian Institute of Technology Patna<br /><span style="font-size:15pt;">भारतीय प्रौद्योगिकी संस्थान पटना</span></h4>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div> -->
