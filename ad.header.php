<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<meta charset=UTF-8>
<title>Sing-A-Song Admin Panel</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body >
<header>
   <nav>
       <ul>
	     <li><a href="ad.index.php">HOME</a></li>
		<?php
		
            if (isset($_SESSION['id'])){
	         
			  echo " <form action='logout.php' >
                      <button type='submit'>LOGOUT</button>
                      </form>";
  
        }
           else{
	         
			echo "<form action='ad.login.php' method='POST'>

               <input type='text'  name='Aname' placeholder='ADMIN'>
               <input type='password'  name='pwd' placeholder='PASSWORD'>
  
               <button type='submit'>SIGN IN</button>
 
                 </form>";

	 
 }


		        ?>

		 
		  
	   </ul>
   
   </nav>

</header>