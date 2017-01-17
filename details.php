<!DOCTYPE html>
<html>
<body style class="style.css">
 
<?php
   include'header.php';
   $id1=$_GET['id'];
 mysql_connect("localhost","root","");
 mysql_select_db("adminlog1");
 $sql="select * from music where m_id='$id1'";
 $result=mysql_query($sql);
 
 while($row=mysql_fetch_array($result))
  {
	  
	  echo"<table>";
	 include'left.php';
	echo"<tr>";
	 echo "<td><input type='text' name='id' value='$row[0]'></td>";
	 echo"</tr>";
	 echo"<tr>";
    echo "<td><input type='text' name='Sname' value='$row[1]'></td>";
	echo"</tr>";
	 echo"<tr>";
	echo "<td><input type='text' name='Syear' value='$row[2]'></td>";
	echo"</tr>";
	 echo"<tr>";
	echo "<td><input type='text' name='Artist' value='$row[3]'></td>";
	echo"</tr>";
	 echo"<tr>";
	echo "<td><input type='text' name='Title' value='$row[4]'></td>";
	echo "</tr>";
	echo "</table>";
	}
	echo "<form action='edit1.php' method='POST'>";
    echo "<input type='submit' value= 'Update'>";
 
 ?>


     
 </form>
 </body>
 </html>