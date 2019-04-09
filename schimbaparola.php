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
					$interogare=("update utilizatori set password='".$parola."' where username='".$u."'");
					if ($error=mysql_query($interogare))
					{
					?>
						<script type="text/javascript">
					           alert("Parola schimbata!");
 				            </script>
                      <?php 
					header("Refresh: 0; login.php");
					}
					}
					else
					{				       
				      ?>	<script type="text/javascript">
					           alert("Utilizator inexistent!");
 				            </script>
                      <?php 
		                    header("Refresh: 0; changepass.php");						 					
				   }
				   
					
			   }
			    else
				{
				  echo "interogare imposibila !";
				}  
            mysql_close($id);
           }
   ?> 