<?php
              if (isset ($_POST['but']))
           { 
            $numele=$_POST['nume'];			
		    include "conectare.php";			
			$interogare="delete from utilizatori where (username='".$numele."') ";			
			if ($error=mysql_query($interogare))
					{					
					?>	<script type="text/javascript">
					           alert("Userul a fost sters!");
 				            </script>
                      <?php					  				
					header("Refresh: 0; useri.php");
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