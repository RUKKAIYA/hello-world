<table border='1' align='center'>
<tr>
<td><input type='text' name='Sname' placeholder='SONG'></td>
<td><input type='text' name='Syear' placeholder='RELEASE YEAR'></td>
<td><input type='text' name='Artist' placeholder='ARTIST'></td>
<td><input type='text' name='Title' placeholder='TITLE'></td>
</tr>
<?php
     mysql_connect("localhost","root","");
	 mysql_select_db("adminlog1");
	 $sql="select * from music ";
	 $result=mysql_query($sql);
	 echo $result;
	 while($row=mysql_fetch_array($result))
	 {
		 echo "<tr>";
		 echo "<td>$row[1]</td>";
		 echo "<td>$row[2]</td>";
		 echo "<td>$row[3]</td>";
		 echo "<td>$row[4]</td>";
		 echo "</tr>";
		 
	 }
?>
</table>