<?php

if (isset($_POST['butonul']))
 {  	       
        $ceas=$_POST['ceas'];
		$cantitate=$_POST['cantitate'];
		$user=$_POST['user'];
		$pret=$_POST['pret'];
		$adresa=$_POST['adresa'];
		$cat=$_POST['cat'];
		$redant=$_POST['redusa'];
		if ($redant=0)
		{$red=$cantitate*$pret*0.05;}
		else
		{$red=0;}
		$da=date("Y-m-d H:i:s");						
			include "conectare.php";
			$interogare = "INSERT INTO comenzi(ceas,cantitate,user,pret,adresa,data) VALUES('$ceas','$cantitate','$user','$pret','$adresa','$da')";
			$interog = "update $cat set nrprod=nrprod-'".$cantitate."' where (titlu='".$ceas."')";
			$interogare3 = "update utilizatori set reducere='".$red."' where (username='".$user."')";
			if(( $error = mysql_query($interogare)) and ( $error = mysql_query($interog)) and ( $error = mysql_query($interogare3)) )
			{
				?>	<script type="text/javascript">
								alert("Comanda a fost inregistrata cu succes!");								
 				</script>
             <?php 
			 header("Refresh:0 indexlog.php");
			}
			else
			{
					?>	<script type="text/javascript">
								alert("Eroare la trimiterea comenzii!");
 				</script>
             <?php 
			 header("Refresh:0 indexlog.php");
			}							
			mysql_close();	
		
}
?>