<?php  /*session_start();
if(isset($_SESSION['logged']) && $_SESSION['logged']==true){
  header('Location: user/index.php');
}*/
?>
<!DOCTYPE html>
     
	 <html>
     
	 <head>
     
	 <meta charset="utf-8"/>
	 
	 <title>Online Library</title>
     
	 <link rel="stylesheet" type="text/css" href="css/main.css"/> 
	  <link rel="stylesheet" type="text/css" href="css/login.css"/> 
	 <link rel='icon' href="../img/fav.png">
     
	 </head>
     
	 <body>
        <!-- navbar -->
  <?php include 'include/nav.php'; ?>
  <!-- db conn -->
  <div class="content">
   <div class="loginBox">

   <form method="post" class="login" action="user/dashboard.php">
    <h2>Login</h2><br><br>
     <label>Username: </label><input  type="text" name="username"><br>
    <label>Password:&nbsp;&nbsp;</label><input   type="password" name="password"><br><br>
    <center><button type="submit" name="subm" >Submit</button></center><br><br>
    <center><a href="register.php">Don't Have an Account? </a></center>
   </form>

   </div>
	</div>
      <script type="text/javascript" src="js/nav.js"></script>

     </body>
     </html>