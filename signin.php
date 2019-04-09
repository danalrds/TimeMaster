 <?php
              if (isset ($_POST['but']))
           { 
            session_start();
            $e=$_POST['email'];
			$u=$_POST['nume'];
            $p=$_POST['pass'];
		    include "conectare.php";
			   //session_start();
			   $parola=SHA1($p);
			   $exista=("select username,email from utilizatori where username='".$u."'or email='".$e."'");
            if ($q=@mysql_query($exista))
			   { 
			     if (mysql_num_rows($q)>0) 
				   {				       
				      ?>	<script type="text/javascript">
					           alert("Utilizator existent!");
 				            </script>
                      <?php 
		                    header("Refresh: 0; crearecont.php");						 					
				   }
				   else
				    {
					$interogare=("insert into utilizatori(username,password,email) values('$u','$parola','$e')");
					if ($error=mysql_query($interogare))
					{
					?>
						<script type="text/javascript">
					           alert("Cont creat cu succes!");
 				            </script>
                      <?php 
					header("Refresh: 0; login.php");
					}
					}
			   }
			    else
				{
				  echo "interogare imposibila !";
				}  
            mysql_close($id);
           }
   ?> 