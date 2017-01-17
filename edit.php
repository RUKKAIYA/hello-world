 <!DOCTYPE html>
<html>
<body style class="style.css">

<?php
  
 //include'header.php';
 session_start();
 $id2=$_session['songid'];
 mysql_connect("localhost","root","");
 mysql_select_db("adminlog1");
 $sql="select * from music where m_id='$id2'";
 $result=mysql_query($sql);
 while($row=mysql_fetch_array($result))
  {
	  
	  echo"<table>";
	 include'left.php';
	echo"<tr>";
    echo "<td>$row[1]></td>";
	echo "<td>$row[2]></td>";
	echo "<td>$row[3]></td>";
	echo "</tr>";
	echo "</table>";
  }
 ?>
 
  </body>
 </html>