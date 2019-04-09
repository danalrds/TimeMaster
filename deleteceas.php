<?php
              if (isset ($_POST['but']))
           { 
            $idul=$_POST['id'];	
            $cat=$_POST['cat'];			
		    include "conectare.php";             
			$interogare="delete from $cat where (id='".$idul."') ";		
			if ($error=mysql_query($interogare))
					{					
					?>	<script type="text/javascript">
					           alert("Ceasul a fost sters!");
 				            </script>
                      <?php					  				
					header("Refresh: 0; ".$cat."admin.php");
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