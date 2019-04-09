<?php
              if (isset ($_POST['but']))
           { 
            $idul=$_POST['id'];			
		    include "conectare.php";			
			$interogare="delete from comenzi where (id='".$idul."') ";
			//'".$nume."'
			if ($error=mysql_query($interogare))
					{					
					?>	<script type="text/javascript">
					           alert("Comanda a fost stersa!");
 				            </script>
                      <?php					  				
					header("Refresh: 0; comenzi.php");
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