<?php
  $db_username="root";
  $db_password="";
  $db_name="timemaster";
  $id=@mysql_connect("localhost",$db_username,$db_password) or die ("Conectare la serverul MySql Nereusita!!!"."<br>");
  @mysql_select_db($db_name,$id) or die ("Selectare baza de date esuata!!!");
  
?>