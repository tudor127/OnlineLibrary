<!DOCTYPE html>
     
	 <html>
     
	 <head>
     
	 <meta charset="utf-8"/>
	 
	 <title>Online Library</title>
     
	 <link rel="stylesheet" type="text/css" href="css/main.css"/> 
	  <link rel="stylesheet" type="text/css" href="css/register.css"/> 
	 <link rel='icon' href="../img/fav.png">
     
	 </head>
     
	 <body>
        <!-- navbar -->
  <?php include 'include/nav.php'; ?>
  <!-- db conn -->
  <div class="content">
   <div class="regBox">
   
   <form method="post" class="reg" action="register_process.php">
    <h2> Register </h2><br><br>
    <label>Username: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="usernameRegister" required><br>
    <label>Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="password" name="password" required><br>
    <label>Confirm Pass:&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="password" name="confirmPassword" required><br>
    <label>First Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="firstname" required><br>
    <label>Last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</label><input type="text" name="lastname" required><br>
    <label>E-mail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label><input type="text" name="email" required><br><br>
    <center><button type="submit" name="regSub" >Submit</button></center><br><br>
   </form>
   </div>
	</div>
      <script type="text/javascript" src="js/nav.js"></script>

      
     </body>
     </html>