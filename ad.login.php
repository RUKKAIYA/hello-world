<!DOCTYPE html>
<html>
<body style class="style.css">
<?php

  
   include '/ad.dbh.php';
    
  $Aname=$_POST['Aname'];
  $pwd=$_POST['pwd'];
   
  $sql = "select * from adminlogin where(Aname='$Aname' AND pwd='$pwd')";
  $result = $conn->query($sql);
  
  if(!$row = $result->fetch_assoc())
  {
	  echo "username or passwrd is incorrect";
	  
  }
  else
  {
	  $_SESSION['A_id'] = $row['A_id'];
	  echo "welcome to admin page";
  }
  header ('Location:save.php');
?>
</html>

