
<!DOCTYPE html>
     
   <html>
     
   <head>
     
   <meta charset="utf-8"/>
   
   <title>Online Library</title>
     
   <link rel="stylesheet" type="text/css" href="css/main.css"/> 
    <link rel="stylesheet" type="text/css" href="css/regUser.css"/> 
   <link rel='icon' href="img/fav.png">
     
   </head>
     
   <body>
        <!-- navbar -->
  <?php include 'include/nav.php'; ?>
  <!-- db conn -->
  <div class="content">
       <?php session_start();?> 
 <?php 
include 'include/conn.php';

if(isset($_POST['regSub'])){
/*
$sql_check='';
$stid_check=oci_parse($conn, $sql_check);
oci_execute($stid);
oci_free_statement($stid);
*/
if(1==1){ // verificare user
$username=$_POST['usernameRegister'];
$pass=$_POST['password'];
$firstn=$_POST['firstname'];
$lastn=$_POST['lastname'];
$email=$_POST['email'];

$sql='begin 
      creare_cont_user(:user,:pass,:first,:last,:email);
      end;
';
$stid = oci_parse($conn, $sql);

oci_bind_by_name($stid, ':user', $username);
oci_bind_by_name($stid, ':pass', $pass);
oci_bind_by_name($stid, ':first', $firstn);
oci_bind_by_name($stid, ':last', $lastn);
oci_bind_by_name($stid, ':email', $email);

oci_execute($stid);

oci_free_statement($stid);
oci_close($conn);

echo '<div class="regSucc">
  <h2>Cont creat cu succes!</h2>
  <a href="../login.php">Login</a>
</div>';

}

else{ //exista deja user-ul
   echo '<div class="regSucc">
  <h2>Exista deja un cont cu username-ul "'.$_POST['usernameRegister'].'"</h2>
  <a href="../register.php">Try Again</a>
</div>';
}

}

//header function locates you to a welcome page saved s wel.php
 ?>

  </div>
      <script type="text/javascript" src="js/nav.js"></script>

     </body>
     </html>

