<?php

include 'ad.header.php';


 $conn = mysqli_connect("localhost","root","", "adminlog1");
 if(!$conn)
 {
	die("connection failed:".mysqli_connect_error());
	
 }


?>
<body>


<?php
 if (isset($_SESSION['id'])){
	 echo  $_SESSION['id'];
 }
 else{
	 echo "you are not logged in!";
	 
 }
?>

   <br>

</body>
</html>