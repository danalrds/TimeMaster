<?php
	session_start();
	if (isset ($_SESSION['user']))
	{
?>
<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <title>TimeMaster/Water resistance</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open Sans:300,400" />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Source Sans Pro:300,400" />
    </head>
    <body>
        <div id="body_bg">
            <div class="primary-container-group">
                <!-- Background -->
                <div class="primary-container-background">
                    <div class="primary-container"></div>
                    <div class="clearfix"></div>
                </div>
                <!--End Background -->
                <div class="primary-container">
                    <div id="container_hornav" class="container no-padding">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="indexlog.php">
                                <img src="assets/img/logo.gif" alt="Logo" />
                            </a>
                        </div>
                        <!-- End Logo -->
                        <!-- Slogan -->
                        <p class="site-slogan">
										CHOOSE A WATCH AND LIVE FOR GREATNESS!
										<?php			                               
											echo"Hello, ".$_SESSION['user'];		  		
										?>
									    <a class="color-orange" href='deconectare.php' size="20px"> LOGOUT</a>
										</p>
                        <!-- End Slogan -->
                        <!-- Top Menu -->
                      <div class="row">
                            <div class="hornav-block">
                                <div id="hornav" class="pull-right">
                                    <ul id="hornavmenu" class="nav navbar-nav">
                                        <li>
                                            <a href="indexlog.php">HOME</a>
                                        </li>
                                        <li>
                                            <span>WOMEN</span>
                                            <ul>
											    <li>
                                                    <a href="womecaniclog.php">Mecanic</a>
                                                </li>
                                                <li class="parent">
                                                    <span>Quartz</span>
                                                    <ul>
                                                        <li>
                                                            <a href="woautomaticlog.php">Automatic</a>
                                                        </li>
                                                        <li>
                                                            <a href="wokineticlog.php">Kinetic</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="wosolarlog.php">Solar</a>
                                                </li>
												<li>
                                                    <a href="wotimelog.php">Timepieces</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span>MEN</span>
                                            <ul>
											    <li>
                                                    <a href="menmecaniclog.php">Mecanic</a>
                                                </li>
                                                <li class="parent">
                                                    <span>Quartz</span>
                                                    <ul>
                                                        <li>
                                                            <a href="menautomaticlog.php">Automatic</a>
                                                        </li>
                                                        <li>
                                                            <a href="menkineticlog.php">Kinetic</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="mensolarlog.php">Solar</a>
                                                </li>
												<li>
                                                    <a href="mentimelog.php">Timepieces</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span>BRANDS</span>
                                            <ul>
                                                <li>
                                                    <a href="alangelog.php">A. Lange & Sohne</a>
                                                </li>
                                                <li>
                                                    <a href="bvlgarilog.php">Bvlgari</a>
                                                </li>
                                                <li>
                                                    <a href="chanellog.php">Chanel</a>
                                                </li>
                                                <li>
                                                    <a href="diorlog.php">Dior</a>
                                                </li>
												<li>
                                                    <a href="hublotlog.php">Hublot</a>
                                                </li>
												<li>
                                                    <a href="omegalog.php">Omega</a>
                                                </li>
												<li>
                                                    <a href="rolexlog.php">Rolex</a>
                                                </li>
												<li>
                                                    <a href="seikolog.php">Seiko</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span>WORLD OF WATCHES</span>
                                            <ul>
												<li>
                                                    <a href="albumlog.php">ALBUM</a>
                                                </li>
                                                <li>
                                                    <a href="latestlog.php">Latest trends</a>
                                                </li>
												<li>
                                                    <a href="typeslog.php">Types of watches</a>
                                                </li>
												<li>
                                                    <a href="waterlog.php">Water resistance</a>
                                                </li>
                                                <li>
                                                    <a href="historylog.php">Watches History</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact.php">CONTACT</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- End Top Menu -->
                    </div>                    
                    <div class="container">
                        <!-- === END HEADER === -->
                        <!-- === BEGIN CONTENT === -->
                        <div class="row margin-vert-30">
                            <div class="col-md-12">
                                <h2>Rezistenta la apa a ceasurilor</h2>
                                <p>Majoritatea ceasurilor prezinta un marcaj pe carcasa sau cadran, privind rezistenta la apa. Acest marcaj poate fi exprimat in metri (m.), atmosfere (atm) sau bari (bar). Astfel:</p>
                                <hr class="margin-vert-40">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="tab-content">
                                            <div class="tab-pane active in fade" id="faq">
                                                <div class="panel-group" id="accordion">
                                                    <!-- FAQ Item -->
                                                    <div class="panel panel-default panel-faq">
                                                        <div class="panel-heading">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#faq-sub">
                                                                <h4 class="panel-title">
                                                                    30m = 3atm sau bar
                                                                    <span class="pull-right">
                                                                        <i class="glyphicon glyphicon-plus"></i>
                                                                    </span>
                                                                </h4>
                                                            </a>
                                                        </div>
                                                        <div id="faq-sub" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                water resistant 30m: ceasul rezista la stropiri intimplatoare, ploaie, spalat pe maini
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End FAQ Item -->
                                                    <!-- Faq Item -->
                                                    <div class="panel panel-default panel-faq">
                                                        <div class="panel-heading">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#faq-sub-2">
                                                                <h4 class="panel-title">
                                                                    50m = 5atm sau bar
                                                                    <span class="pull-right">
                                                                        <i class="glyphicon glyphicon-plus"></i>
                                                                    </span>
                                                                </h4>
                                                            </a>
                                                        </div>
                                                        <div id="faq-sub-2" class="panel-collapse collapse">
                                                            <div class="panel-body">
																 water resistant 50m: ceasul rezista la baie, dus, inot de suprafata
															</div>
                                                        </div>
                                                    </div>
                                                    <!-- End FAQ Item -->
                                                    <!-- Faq Item -->
                                                    <div class="panel panel-default panel-faq">
                                                        <div class="panel-heading">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#faq-sub-3">
                                                                <h4 class="panel-title">
                                                                   100m =10 atm sau bar
                                                                    <span class="pull-right">
                                                                        <i class="glyphicon glyphicon-plus"></i>
                                                                    </span>
                                                                </h4>
                                                            </a>
                                                        </div>
                                                        <div id="faq-sub-3" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                water resistant 100m: ceasul rezista la sarituri in apa si sporturi acvatice
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End FAQ Item -->
                                                    <!-- Faq Item -->
                                                    <div class="panel panel-default panel-faq">
                                                        <div class="panel-heading">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#faq-sub-4">
                                                                <h4 class="panel-title">
                                                                    200m =20atm sau bar
                                                                    <span class="pull-right">
                                                                        <i class="glyphicon glyphicon-plus"></i>
                                                                    </span>
                                                                </h4>
                                                            </a>
                                                        </div>
                                                        <div id="faq-sub-4" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                water resistant 200m: ceasul rezista la scufundari
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End FAQ Item -->
                                                    <!-- Faq Item -->                                                                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h3>Nu ai gasit raspunsul cautat?</h3>
                                        <p>Daca vreunul din raspunsuri nu te-a lamurit sau ai o alta intrebare acceseaza sectiunea de mai jos.</p>
                                        <a href="contact.php"><button type="button" class="btn btn-primary btn-sm">ASK A QUESTION</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- === END CONTENT === -->
                        <!-- === BEGIN FOOTER === -->
                    </div>
                    <div id="base" class="container padding-vert-30">
                        <div class="row">
                            <!-- Disclaimer -->
                            <div class="col-md-6">
                                <h3 class="margin-bottom-10">Disclaimer</h3>
                                <p>All stock images on this site are for presentation purposes only.</p>
                                <p>Most of the images used here are available from
                                    <a class="nobold" href="http://www.watches.com/" target="_blank">watches.com</a>. Links are provided if you wish to purchase them from their copyright owners.</p>
                                <div class="clearfix"></div>
                            </div>
                            <!-- End Disclaimer -->
                            <!-- Contact Details -->
                            <div class="col-md-3">
                                <h3 class="margin-bottom-10">Contact Details</h3>
                                <p>Cimpeni,
                                    <br />Alba,
                                    <br />TimeMaster,
                                    <br />Romania
                                </p>
                                <p>Email:
                                    <a href="mailto:timemaster@yahoo.com">timemaster@yahoo.com</a>
                                    <br />Website:
                                    <a href="http://www.TimeMaster.com">www.TimeMaster.com</a>
                                </p>
                            </div>
                            <!-- End Contact Details -->
                            <!-- Sample Menu -->
                            <div class="col-md-3">
                                <h3 class="margin-bottom-10">Shop Online</h3>
                                <ul class="menu">
                                    <li>
                                        <a class="fa-tasks" href="#">Quality</a>
                                    </li>
                                    <li>
                                        <a class="fa-users" href="#">Speed</a>
                                    </li>
                                    <li>
                                        <a class="fa-signal" href="#">Best option</a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <!-- End Sample Menu -->
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- Footer Menu -->
                    <div id="footermenu" class="container">
                        <div class="row">
                            <ul class="list-unstyled list-inline">
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">Facebook</a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com/" target="_blank">Twitter</a>
                                </li>
                                <li>
                                    <a href="https://www.pinterest.com/" target="_blank">Pinterest</a>
                                </li>
                                <li>
                                    <a class="fa-shopping-cart" href="#" target="_blank">ShopChart</a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- End Footer Menu -->
                </div>
            </div>
            <div class="container padding-vert-30">
                <div class="row">
                    <div id="copyright">
                        <p>Copyright 2017 Dana XII MII </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- JS -->
        <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/js/scripts.js"></script>
        <!-- Isotope - Portfolio Sorting -->
        <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
        <!-- Mobile Menu - Slicknav -->
        <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
        <!-- Animate on Scroll-->
        <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
        <!-- Modernizr -->
        <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
        <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->
<?php
	}
	else
		header("Location: index.php");
?>