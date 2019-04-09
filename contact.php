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
        <title>TimeMaster/Contact</title>
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
                            <!-- Main Column -->
                            <div class="col-md-9">
                                <!-- Main Content -->
                                <div class="headline">
                                    <h2>Contact Form</h2>
                                </div>
                                <br>
                                <!-- Contact Form -->
                                <form method="POST" enctype="multipart/form-data">	
                                    <label>Name
									   <span class="color-red">*</span>
									</label>
                                    <div class="row margin-bottom-20">
                                        <div class="col-md-6 col-md-offset-0">
                                            <input class="form-control" type="text" name="nume" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <label>Email
                                        <span class="color-red">*</span>
                                    </label>
                                    <div class="row margin-bottom-20">
                                        <div class="col-md-6 col-md-offset-0">
                                            <input type="email" pattern="[^ @]*@[^ @]*" placeholder="Email" class="form-control" name="email" >
                                        </div>
                                    </div>
                                    <label>Message</label>
                                    <div class="row margin-bottom-20">
                                        <div class="col-md-8 col-md-offset-0">
                                            <textarea rows="8" class="form-control" name="mesaju" required></textarea>
                                        </div>
                                    </div>
                                    <p>
                                        <button type="submit" class="btn btn-primary" name="submit2">Send Message</button>
                                    </p>
                                </form>
                                <!-- End Contact Form -->
                                <!-- End Main Content -->
                            </div>
                            <!-- End Main Column -->
                            <!-- Side Column -->
                            <div class="col-md-3">
                                <!-- Recent Posts -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Contact Info</h3>
                                    </div>
                                    <div class="panel-body">
                                        <p>Va stam la dispozitie pentru orice intrebare, nelamurire sau sugestie. </p>
                                        <ul class="list-unstyled">
                                            <li>
                                                <i class="fa-phone color-primary"></i>+353-44-55-66</li>
                                            <li>
                                                <i class="fa-envelope color-primary"></i>TimeMaster@yahoo.com</li>
                                            <li>
                                                <i class="fa-home color-primary"></i>http://www.TimeMaster.com</li>
                                        </ul>
                                        <ul class="list-unstyled">
                                            <li>
                                                <strong class="color-primary">Monday-Friday:</strong>9am to 6pm</li>
                                            <li>
                                                <strong class="color-primary">Saturday:</strong>10am to 3pm</li>
                                            <li>
                                                <strong class="color-primary">Sunday:</strong>Closed</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End recent Posts -->
                                <!-- About -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">About</h3>
                                    </div>
                                    <div class="panel-body">
                                        Oferim clientilor care vor sa se exprime prin ceasurile si accesoriile purtate sau oferite cadou bucuria unei experiente profesioniste, aspirationale, educative prin care noi ii ajutam cu prietenie si altruism.
                                    </div>
                                </div>
                                <!-- End About -->
                            </div>
                            <!-- End Side Column -->
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

if (isset($_POST['submit2']))
{
	if ((trim($_POST['mesaju'])!='') && (!empty($_POST['nume']))){
		//verific daca exista introduse stirea si titlul acesteia
	if ($_FILES['sursa']['size']<=10000000){
	    				
		$da=date("Y-m-d H:i:s");		
		$email=$_POST['email'];
		$mesaj=$_POST['mesaju'];
		$nume=$_POST['nume'];
			$ok = 0;
			include "conectare.php";
			$interogare = "INSERT INTO mesaje(nume,email,mesaj,data_p) VALUES('$nume','$email','$mesaj','$da')";
			if( $error = mysql_query($interogare))
			{
				?>	<script type="text/javascript">
								alert("Mesajul a fost adaugat!");
 				</script>
             <?php 
			}
			else
			{
					?>	<script type="text/javascript">
								alert("Eroare la INSERT!");
 				</script>
             <?php 
			}
			mysql_close();	
			
	}
	else{
	    ?>
				<script type="text/javascript">
								alert("Alegeti un fisier a carui marime sa fie de cel mult 1000 octeti");
 				</script>
			<?php
		
	}
	}
	
}

?>
<?php
	}
	else
		header("Location: index.php");
?>