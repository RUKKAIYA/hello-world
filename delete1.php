<!DOCTYPE html>
<html>
<body style class="style.css">

<?php
include 'search.php';
$sname=$_POST['Sname'];
mysql_connect("localhost","root","");
mysql_select_db("adminlog1");
$sql="delete from music where Sname='$sname'";
$result=mysql_query($sql);
 if($result)
  {
   echo "<script>";
   echo "window.alert('record deleted sucessfully!')";
   echo "</script>";

  }
  else
  {
	 echo"<script>";
	 echo "window.alert('record not deleted!')";
     echo "</script>";
  }  

    
?>
</body>
</html>