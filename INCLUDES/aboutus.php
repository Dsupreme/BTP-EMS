<!doctype html>
<?php
session_start();
?>
	<head>
		<title>EMS-Welcome Page</title>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

		<meta name="author" content="Naresh and Manmeet"/>
		<meta name="description" content="A new Job Portal and Employee Management System for IIIT-Delhi"/>
        
        <meta name="keywords" content="slider, animations, , delayed, easing, jquery, css3, kendo UI" />

		<!--Favicons-->
		<link rel="shortcut icon" href="images/favicon.png">
		<link rel="apple-touch-icon" href="">
		<link rel="apple-touch-icon" sizes="72x72" href="">
		<link rel="apple-touch-icon" sizes="114x114" href="">
		<!--Fonts-->
   		<link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		
       	
        <!-- CSS Links -->
		<link rel="stylesheet" type="text/css" href="../CSS/bootstrap.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="../CSS/index.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="../CSS/animate-custom.css" media="screen" />
        
        <!--Javascript Links-->
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script><!--JQuery Online link -->
       	<script type="text/javascript" src="../JS/bootstrap.js"></script><!--Bootstrap Javascript-->
	</head>

	<body data-spy="scroll" data-target=".navbar navbar-fixed-top">
    <!--============================== Navigation Bar ==============================-->
        <section id="Navigation">
            <!--Navigation Bar-->
            <nav class="navbar navbar-fixed-top" role="navigation">
                <div class="navbar-inner">
                <!--<li class="logo"><a><img src="Images/LogoVictor.png" /></a></li>-->
                    <div class="container">
                        <div class="navbar-header">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <ul class="nav navbar-nav">
                            <!-- Header & Brand/Company Name-->
                                <li class="active"><a class="navbar-brand" href="Home.php"><font size="+3"> Employee Management System</font></a></li>
                            </ul>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                               
                                <li><a href="Home.php">Home</a></li>
                                <li><a href="Contactus.php">Contact Us</a></li>
								
								<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo "Welcome, ".$_SESSION['username'] . "<b class='caret'></b>"?></a>
                            	<ul class="dropdown-menu">
                                	<li><a href="">Settings</a></li>
                                	<li><a href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                            </ul>
                        </div>
                    </div>     
                </div>
            </nav>
        </section>
		
		<section>
			<div class="container">
				<div id="about-text" style="margin:100px 0px;">
					Indraprastha Institute of Information Technology, Delhi (aka. IIIT-Delhi or IIIT-D) was created as a State University by an act of Delhi Government (The IIIT Delhi Act, 2007) empowering it to do research and development and grant degrees. IIIT-Delhi was officially established on 10th June, 2008 as per this notification in the Delhi Gazette. First class (for BTech(CSE) students) was held on 8th September, 2008.

The institute began with its first batch of 60 BTech students in 2008. This first batch graduated in 2012 - the first Convocation took place in November, 2012. By that time, the institute has attracted nearly 30 faculty members, and its academic program consisted of B.Tech., M.Tech. and Ph.D. programs in CSE and ECE. In a relatively short time, it has earned a good reputation in India and abroad for being a center of quality education and research in IT. 2012 turned out be more remarkable year because during the summer of this year, the institute started functioning from its permanent campus in Okhla. Smt. Sheila Dikshit, Chief Minister of Delhi, inaugurated the campus in October, 2012. The early days of this institute was chronicled by the founding and current Director in his blog here. See below for a list of all the major events of the institute so far.
				</div>
				<!--<div id="about-events" style="margin:100px 0px;">
					<table id="events">
						<tr id="r1">
							<td>2nd April 2008 : 
							</td>
							<td>the IIIT-Delhi Act passed in Legislative Assembly
							</td>
						</tr>
						<tr id="r2">
							<td>2nd May 2008 : 
							</td>
							<td>Notification of the IIIT-Delhi Act
							</td>
						</tr>
					</table>
				</div>-->
			</div>
		</section>
	<script type="text/javascript">
    $('body').scrollspy({ target: '.navbar navbar-fixed-top' })
    </script> 
	 <section>
            <div class="footer">
            	<div id="legal">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
                    In at purus at nisl pretium interdum. Aenean condimentum elementum nulla, non hendrerit diam scelerisque ac.<br><br>
                    © Copyright 2014 - 2020  IIIT - Delhi
                </div>
            </div>
        </section>
	</body>
</html>