
<?php
include 'header.php';
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

</br>
</br>
<form action="includes/signup.inc.php" method="POST">
  <input type="text"  name="uname" placeholder="USER NAME"></br>
  <input type="text"  name="email" placeholder="Email@xyz.com"></br>
  <input type="date"  name="dob" placeholder="YYMMDD"></br>
  <input type="password"  name="pwd" placeholder="PASSWORD"></br>
  
  <button type="submit">SIGN UP</button>
  </form>
  <br><br><br>
  
     
  <br>

</body>
</html>