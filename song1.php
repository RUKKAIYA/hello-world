<!DOCTYPE html>
<html>
<body style class="style.css">

 <?php
 include'ad.header.php';
 $Sname=$_POST['Sname'];
 mysql_connect("localhost","root","");
 mysql_select_db("adminlog1");
 $sql="select * from music where Sname='$Sname'";
 $result=mysql_query($sql);
  while($row=mysql_fetch_array($result))
{
	echo"<table>";
	 include'left.php';
	echo"<tr>";
    echo "<td><input type='text'  name='Sname'  placeholder='SONG'           value='$row[1]'></td>";
    echo "<td> <input type='year'  name='Syear'  placeholder='RELEASE YEAR' value='$row[2]'></td>";
    echo "<td> <input type='text'  name='Artist' placeholder='ARTIST'       value='$row[3]'></td>";
    echo "<td> <input type='text'  name='Title'  placeholder='TITLE'        value='$row[4]'></td>";
	echo "<td><a href='details.php?id=$row[0]'> DETAILS</a></td>";
    echo "</tr>";
    echo"</table>";
	 
}

 ?>
 </body>
 </html>
 