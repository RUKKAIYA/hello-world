 <?php
 $id=$_POST['id'];
$Sname=$_POST['Sname'];
 $Syear=$_POST['Syear'];
 $Artist=$_POST['Artist']; 
 $Title=$_POST['Title'];
 mysql_connect("localhost","root","");
 mysql_select_db("adminlog1");
 $sql="update music set m_id='$id' Sname='$Sname', Syear='$Syear', Artist='$Artist', Title='$Title'";
 $result=mysql_query($sql);
 
if($result)
{
	echo "Record updated";	
}
else
{
	echo "failed to update!!!";
}
 
 ?>