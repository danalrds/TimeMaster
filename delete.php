<?php
              if (isset ($_POST['but']))
           { 
            $idul=$_POST['id'];			
		    include "conectare.php";			
			$interogare="delete from mesaje where (id='".$idul."') ";
			//'".$nume."'
			if ($error=mysql_query($interogare))
					{					
					?>	<script type="text/javascript">
					           alert("Mesajul a fost sters!");
 				            </script>
                      <?php					  				
					header("Refresh: 0; mesaje.php");
					}  
					else					
			        {
					               ?>	<script type="text/javascript">
								      alert("Eroare la stergere!");
 				                    </script>
                                   <?php 
			                }
            mysql_close();
           }
   ?> 