<?php
	session_start();
	if (isset ($_SESSION['admin']))
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
        <title>TimeMaster</title>
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
											echo"Hello, ".$_SESSION['admin'];		  		
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
                                            <a href="indexadmin.php">HOME</a>
                                        </li>
                                        <li>
                                            <span>WOMEN</span>
                                            <ul>
											    <li>
                                                    <a href="womecanicadmin.php">Mecanic</a>
                                                </li>
                                                <li class="parent">
                                                    <span>Quartz</span>
                                                    <ul>
                                                        <li>
                                                            <a href="woautomaticadmin.php">Automatic</a>
                                                        </li>
                                                        <li>
                                                            <a href="wokineticadmin.php">Kinetic</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="wosolaradmin.php">Solar</a>
                                                </li>
												<li>
                                                    <a href="wotimeadmin.php">Timepieces</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span>MEN</span>
                                            <ul>
											    <li>
                                                    <a href="menmecanicadmin.php">Mecanic</a>
                                                </li>
                                                <li class="parent">
                                                    <span>Quartz</span>
                                                    <ul>
                                                        <li>
                                                            <a href="menautomaticadmin.php">Automatic</a>
                                                        </li>
                                                        <li>
                                                            <a href="menkineticadmin.php">Kinetic</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="mensolaradmin.php">Solar</a>
                                                </li>
												<li>
                                                    <a href="mentimeadmin.php">Timepieces</a>
                                                </li>
                                            </ul>
                                        </li>
										<li>
                                            <a href="useri.php">USERI</a>
                                        </li>
                                        <li>
                                            <a href="comenzi.php">COMENZI</a>
                                        </li>
                                        <li>
                                            <a href="mesaje.php">MESAJE</a>
                                        </li>
                                        <li>
                                            <a href="upload.php">ADAUGA</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- End Top Menu -->
                    </div>                    				
                    <div class="container no-padding">
                        <!-- === END HEADER === -->
                        <!-- === BEGIN CONTENT === -->
                        <div class="row">
                            <!-- Carousel Slideshow -->
                            <div id="carousel-example" class="carousel slide" data-ride="carousel">
                                <!-- Carousel Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example" data-slide-to="1"></li>
                                    <li data-target="#carousel-example" data-slide-to="2"></li>
									<li data-target="#carousel-example" data-slide-to="3"></li>
                                </ol>
                                <!-- End Carousel Indicators -->
                                <!-- Carousel Images -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="assets/img/slideshow/image1.jpg">
                                    </div>
                                    <div class="item">
                                        <img src="assets/img/slideshow/image2.jpg">
                                    </div>
                                    <div class="item">
                                        <img src="assets/img/slideshow/image3.jpg">
                                    </div>
									<div class="item">
                                        <img src="assets/img/slideshow/image4.jpg">
                                    </div>
                                </div>
                                <!-- End Carousel Images -->
                                <!-- Carousel Controls -->
                                <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                                <!-- End Carousel Controls -->
                            </div>
                            <!-- End Carousel Slideshow -->
                            <!-- Tabs -->
                            <div class="tabs-dark" style="padding:0;">
                                <!-- Tab Navigation -->
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#home" data-toggle="tab">Home</a>
                                    </li>
                                    <li>
                                        <a href="#profile" data-toggle="tab">Profile</a>
                                    </li>
                                    <li>
                                        <a href="#messages" data-toggle="tab">New</a>
                                    </li>
                                </ul>
                                <!-- End Tab Navigation -->
                                <!-- Tab Panes -->
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="home">
                                        <img style="float: left; margin-right: 25px; margin-bottom: 10px;" src="assets/img/frontpage/filler1.jpg" alt="filler image">
                                        <h3>De ce sa purtam ceas de mana ?</h3>
                                        <p> Este foarte simplu. In primul rand vom sti mereu cat e ora si vom fi mereu punctuali. In al doilea rand, purtarea ceasului ne completeaza tinuta si ne defineste stilul. Alegeti de fiecare data ceasul care va place si bineinteles cel care vi se potriveste. Un lucru este cert, indiferent de stilul pe care il abordam, ceasul ramane un accesoriu indragit de cele mai multe persoane. Fie ca vorbim de un ceas elegant, casual sau sport, mana si tinuta noastra trebuie sa fie mereu accesorizate.</p>
                                    </div>
                                    <div class="tab-pane fade" id="profile">
                                        <img style="float: left; margin-right: 25px; margin-bottom: 10px;" src="assets/img/frontpage/filler2.jpg" alt="filler image">
                                        <h3>Alegerea ceasului</h3>
                                        <p>Cei mai multi dintre noi isi aleg ceasul dupa forma si culoare, doar ca le place, fara sa stie care sunt avantaje si dezavantajele acelui ceas. In primul rand trebuie sa stabilim ce fel de ceas vrem deoarece sunt mai multe tipuri. Pentru inceput trebuie sa vorbim despre tipurile de mecanism care au o influenta mare atunci cand le alegem ceasul. Exista ceasuri cu mecanism Quartz (cu baterie, solar sau rotor) si ceasuri mecanice (automatice sau manuale). Acesta trebuie sa fie primul pas in alegerea unui ceas.</p>
                                    </div>
                                    <div class="tab-pane fade" id="messages">
                                        <img style="float: left; margin-right: 25px; margin-bottom: 10px;" src="assets/img/frontpage/filler3.jpg" alt="filler image">
                                        <h3>Ultimul ceas aparut</h3>
                                        <p>Odata pe zi, Seiko Astron receptioneaza automat semnalul orar si, la cerere, se conecteaza la patru sau mai multi dintre satelitii GPS care orbiteaza in jurul Pamantului, indicand cu precizie pozitia sa si identificand zona de fus orar si ora exacta. Indicatoarele se ajusteaza automat la ora locala corecta cu precizia Ceasului Atomic. Astron este alimentat solar, astfel, nu este necesara inlocuirea bateriei, si este echipat cu calendar perpetuu, ceea ce inseamna ca data va fi tot timpul afisata corect, pana in februarie 2100, facand abstractie de anii bisecti. De asemenea, este echipat cu modul "in-flight" si un buton cu ajutorul caruia se seteaza "Ora de vara". 
</p>
                                    </div>
                                </div>
                                <!-- End Tab Panes -->
                            </div>
                            <!-- End Tabs -->
                        </div>
                    </div>
                    
                    <div class="container no-padding gridgallery">
                        <!-- Portfolio Header Text -->
                        <div class="row">
                            <div class="col-md-12 padding-vert-30">
                                <h2 class="subtitle text-center">Defining Style for Today</h2>
                                <h3 class="subtitle text-center">Here we have the right hour in Watches' technology and style</h3>
                            </div>
                        </div>
                        <!-- End Portfolio Header Text -->
                        <!-- Portfolio Images -->
                        <div class="portfolio-group">
                            <!-- Portfolio Item -->
                            <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
                                <div class="image-hover">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/image1.jpg" alt="image1">
                                            <figcaption>
                                                <h3>ROLEX SUBMARINER</h3>                                                
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
                                <div class="image-hover">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/image2.jpg" alt="image2">
                                            <figcaption>
                                                <h3>OMEGA SEAMASTER</h3>                                                
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
                                <div class="image-hover">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/image3.jpg" alt="image3">
                                            <figcaption>
                                                <h3>A.LANGE  & SOHNE SAXONIA</h3>                                                
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
                                <div class="image-hover">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/image4.jpg" alt="image4">
                                            <figcaption>
                                                <h3>BVLGARI SERPENTI</h3>                                                
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
                                <div class="image-hover">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/image5.jpg" alt="image1">
                                            <figcaption>
                                                <h3>HUBLOT BIG BANG</h3>
                                                
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
                                <div class="image-hover">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/image6.jpg" alt="image6">
                                            <figcaption>
                                                <h3>DIOR VIII GRAND BAL</h3>                                                
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
                                <div class="image-hover">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/image7.jpg" alt="image7">
                                            <figcaption>
                                                <h3>SEIKO GPS SOLAR</h3>                                                
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
                                <div class="image-hover">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/image8.jpg" alt="image8">
                                            <figcaption>
                                                <h3>CHANEL MONOCHROM</h3>                                                
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- //Portfolio Item// -->
                            <div class="clearfix"></div>
                        </div>
                        <!-- End Portfolio Images -->
                        <!-- Portfolio Footer Text -->
                        <div class="row">
                            <div class="col-12-md">
                                <h3 class="text-center padding-bottom-30" style="max-width:690px; margin:0 auto;">
								Oricare ar fi durata timpului, stiinta intrebuintarii lui il va face lung.</h3>
								<center><span>Scott Adams</span></center>
                            </div>
                        </div>
                        <!-- End Portfolio Footer Text -->
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