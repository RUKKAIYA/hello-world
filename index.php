<!DOCTYPE html>
<html>
<?php
include 'header.php';


 if (isset($_SESSION['id'])){
	 echo  $_SESSION['id'];
 
 }
 else{
	 echo "<b>you are not logged in!<b>";
	 
 }
?>
<body style class="style.css">

<div>
<?php include'search.php'?>
</div>
<table  height='100%' width='95%' cellpadding='2' cellspacing='5' background='white' >
<?php include'left.php'?>
<tr>
<td><img src='images\lagaan.jpg'></td>
<td><img src='images\pk.jpg'></td></tr>
<td><img src='images\dangal.jpg'></td>
</tr>
<tr>
<td width='100px' height='100px'><img src='images\aedil.jpg'></td>
<td width='100px' height='100px'><img src='images\ghayal.jpg'></td>
<td width='100px' height='100px'><img src='images\tzp.jpg'></td>
 
</tr>



</table>
<div>
<?php include 'footer.php'
 ?>

</div>


</body>
</html>