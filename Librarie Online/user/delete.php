 <?php session_start();?> 
 <?php 
include '../include/conn.php';

if(!isset($_SESSION['logged'])){
  $_SESSION['logged']=false;
}



//header function locates you to a welcome page saved s wel.php
 ?>
<!DOCTYPE html>
     
   <html>
     
   <head>
     
   <meta charset="utf-8"/>
   
   <title>Online Library</title>
     
   <link rel="stylesheet" type="text/css" href="../css/main.css"/> 
    <link rel="stylesheet" type="text/css" href="../css/dashboard.css"/> 
   <link rel='icon' href="../img/fav.png">
     
   </head>
     
   <body>
        <!-- navbar -->
  <?php include '../include/navUser.php'; ?>
  <!-- db conn -->
  <div class="content">
      
    <div class="add" style="height: 300px">
    
      <form method="post">
        <center>
          <h2>Are you sure do you want to delete your account?</h2><br>
        <a href="dashboard.php" class="subCom anch">NO</a>
      <button type="submit" name="yes" class="subCom">Yes</button>
    </center>
    </form>
   
    </div>
    <?php 
     if(isset($_POST['no'])){
      header("Location : dashboard.php");
     }

     else if(isset($_POST['yes'])){
      $user=$_SESSION['name'];
      $sql='begin 
       sterge_cont( :userb);
      end;
';
$stid = oci_parse($conn, $sql);

oci_bind_by_name($stid, ':userb', $user);

oci_execute($stid);

oci_free_statement($stid);
// oci_free_statement($stid);
oci_close($conn);
header("Location: ../login.php");
}

    ?>
  


  </div>
      <script type="text/javascript" src="../js/nav.js"></script>

     </body>
     </html>

