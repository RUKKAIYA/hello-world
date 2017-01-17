<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<meta charset=UTF-8>
<title>Sing-A-Song</title>
<table   border='1' align='center' width=100%>
 <tr>
    <td width='80px'> <img src='images\head1.jpg'  width='80px'> </td>
     <td> <b><font size='16px'>SING-A-SONG </font></b></td>
	  

  </tr>
</table>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<header>
   <nav>
       <ul>
	     <li><a href="index.php">HOME</a></li>
		<?php
		
            if (isset($_SESSION['id'])){
	         
			  echo " <form action='includes\logout.inc.php' >
                      <button type='submit'>LOGOUT</button>
                      </form>";
  
        }
           else{
	         
			echo "<form action='includes\login.inc.php' method='POST'>

               <input type='uname'  name='uname' placeholder='USER NAME'>
               <input type='password'  name='pwd' placeholder='PASSWORD'>
  
               <button type='submit'>SIGN IN</button>
 
                 </form>";

	 
 }


		        ?>

		 
		  <li><a href="signup.php">SIGNUP</a></li>
	   </ul>
   
   </nav>

</header>