<html>
<head>
	
</head>

<body>
  <?php
       include "conectare.php";
       if (isset ($_POST['buton']))
           { 
            //session_start();
            $numeutilizator=$_POST['nume'];
			$parola=SHA1($_POST['pass']);			
			if ($_POST['rad']=="2")
			{
            $exista=("SELECT username,password FROM utilizatori WHERE username='".$numeutilizator."' and 
			   password='".$parola."' "); 
            if ($q=@mysql_query($exista))
			   { 
			     if (mysql_num_rows($q)>0) 
				   {
					   session_start();
				       $linie=mysql_fetch_array($q);
                       $_SESSION['user']=$linie[0];					  
				       header("Location: indexlog.php");//incarc pagina cu structura logata a userului
				   }
				   else
				    {
					?>	<script type="text/javascript">
								alert("Date incorecte!");
 				                </script>
                             <?php 		
					header("Refresh:0 index.php");
					}
			   
			   }
			    else
				{
				  echo "interogare imposibila !";
				}
			}
				else
				if ($_POST['rad']=="1")
						{						
						$exista=("SELECT username,password FROM admin WHERE username='".$numeutilizator."' and password='".$parola."' "); 
						if ($q=@mysql_query($exista))
						{ 
							if (mysql_num_rows($q)>0) 
							{
								session_start();
								$linie=mysql_fetch_array($q);
								$_SESSION['admin']=$linie[0];
								header("Location: indexadmin.php");//incarc pagina cu structura logata a adminului
							}
								else
							{
								?>
								<script language="Javascript">
								Alert("Date incorecte!!!!");
								</script>
								<?php			
								header("Location: loginreconect.php");
							}
			   
						}
								else
							{
								echo "interogare imposibila !";
							}		
						}		
            mysql_close($id);
           }
   ?> 




</body>
</html>