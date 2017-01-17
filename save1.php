<?php
include 'ad.header.php';

$Sname=$_POST['Sname'];
$Syear=$_POST['Syear'];
$Artist=$_POST['Artist'];
$Title=$_POST['Title'];
mysql_connect('localhost','root','');
mysql_select_db('adminlog1');
$sql="insert into music(Sname,Syear,Artist,Title) values('$Sname','$Syear','$Artist','$Title')";

  $result = mysql_query($sql);
  
  if($result)
  {
   echo "<script>";
   echo "window.alert('record inserted sucessfully!')";
   echo "</script>";

  }
  else
  {
	 echo"<script>";
	 echo "window.alert('record not inserted!')";
     echo "</script>";
      
  }
     header("Location:save.php");
   
?>