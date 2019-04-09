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
        <title>TimeMaster/Women/Kinetic</title>
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
                            <a href="index.php">
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
                                <center><h2>Women Kinetical Watches </h2></center>
                                <br><br>
                                <!-- End Filter Buttons -->
                            </div>
                          <?php 
	include "conectare.php";
    $query1 = "SELECT * FROM wokinetic ORDER BY data_p DESC";
	$rezultat=mysql_query($query1);
	$nrrow=mysql_num_rows($rezultat);
	
	$rpp=4;//randuri per pagina
	$nr=$nrrow;
	if ($nr>0)//daca exista cel putin o stire in tabela
	 {
		 $pagini=ceil($nr/$rpp);//calculez numarul de pagini
		 $pagina=$_GET['pg'];//preiau numarul paginii curente
		 if ($pagina==0) 
		  {
		   $pagina=1;
		  }
		 $start=($pagina-1)*$rpp;//numarul de ordine al stirii de pe pagina curenta
		 $query1 = "SELECT * FROM wokinetic ORDER BY data_p DESC LIMIT $start,$rpp";
		 $rezultat=mysql_query($query1);
		 if ($succes=mysql_num_rows($rezultat)>0) 
			{
			  $dir_foto="poze/";//directorul cu imagini atasate
			  if (is_dir($dir_foto))
			   {
				if ($dh=opendir($dir_foto)) 
			     {
   		      while ($rand=mysql_fetch_row($rezultat))
						{
  			      ?>
    	         <center> <table  style="margin: 10px; cellspacing:0px; width:800px" >
		          <?php
	            $fin=$rand[3];
                $dat=$rand[4];
		        $str =$rand[1];
				$id=$rand[0];
				$cantitate=$rand[5];
				if ($cantitate>0)
				{ ?>				
				<form method="post" action="addtochart.php">
					<input  type="hidden" name="id" value=" <?php echo $id; ?>">
					<input  type="hidden" name="categ" value="wokinetic">
					<input class="btn btn-primary pull-right" type="submit" value="ADD TO CHART" name="butt">
			    </form>
				<?php
				}
				//$str = preg_replace("/([a-z]+)/e","strtoupper('<small>\\1</small>')",$str);
  		        echo "<tr> <td colspan='2' align='left'> <b> <font size='4.75'> <h3 id='subtitlu'> ".$str."</h3> </font> </b></td> </tr>";
        
		          echo "<tr>";
							echo "<td align='left'>" .$rand[2]. "</td>";
							echo "<td align='center'>Pret: " .$rand[6]. "$</td>"; 
							echo "<td> <img src=\"$fin\" width='170' height='150' align='right'/> </td>";
							if ($cantitate==0)
							{echo '<x style="color:red";>Produs momentan indisponibil <x/>';}
				echo"</tr>";
							?>
							</table> </center>
							<hr color ="#75461C" size="1px" style="width: 800px;"/> 
						     <p style="text-align: right; padding-right:130px; padding-top:0px; margin-top: -5px; margin-bottom: -10px;"> Postat in <?php echo"$dat" ?> 
							<?php
            }
          }
          else
             echo "nu poate deschide!!!";
	     }
	   else
	     echo "nu-i bun directorul!!!";
	
	   }	 
	}		
	 else
		echo "Nu exista ceasuri !";
        
	 $nav='';//in nav creez  sirul ce contine numerotarea din partea de jos a paginii
			 for ($i=1;$i<=$pagini;$i++)
			 {
			   if ($pagina!=$i)
			     $nav .='<a style="color:#5E3400; text-decoration:none" href="wokineticlog.php?pg='.$i.'">'.$i.'</a>|';
			   else
			     $nav .='<a style="color:#5E3400; text-decoration:none" href="#">&raquo;'.$i.'&laquo;</a>|';
			 }
			 ?> <center> <?php echo $nav; ?> </center>  <?php
		
		mysql_close($id);		
 ?>
 </div> </center>  
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