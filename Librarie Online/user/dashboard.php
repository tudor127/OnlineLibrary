 <?php session_start();?> 
 <?php 
include '../include/conn.php';

if(!isset($_SESSION['logged'])){
  $_SESSION['logged']=false;
}

if($_SESSION['logged']!=true){
$query = "SELECT username  FROM users WHERE username =
 :user_bv and parola=:pwd"; 
//query is sent to the db to fetch row id.
 $stid = oci_parse($conn, $query);


if (isset($_POST['username'])
 ||isset($_POST['password'])){           
$name=trim($_POST['username']);
$pass=trim($_POST['password']);
}

oci_bind_by_name($stid, ':user_bv', $name);
oci_bind_by_name($stid, ':pwd', $pass);


oci_execute($stid);
$row = oci_fetch_array($stid, OCI_ASSOC);

 if ($row) {
 $_SESSION['name']=$name;
 $_SESSION['logged']=true;
  }
  
 else {
$_SESSION['logged']=false;
}  
 
oci_free_statement($stid);
oci_close($conn);
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
        <?php if($_SESSION['logged']==false && (!isset($_POST['logOut'])) ) 
           header('Location: ../logFail.php');
           //else logged true
        ?>

    <div class="panel">
    <a href='adauga.php'><div class="box"> <img src="../img/bookPlus.png"><h2>Adauga Carte</h2></div></a>
    <a href='#'><div class="box"> <img src="../img/books.png"><h2>Cartile Mele</h2></div></a>
    <a href='#'><div class="box"> <img src="../img/books.png"><h2>Editeaza carte</h2></div></a>
    <a href='delete.php'><div class="box"> <img src="../img/delete.png"><h2>Serge Cont</h2></div></a>
    </div>


  </div>
      <script type="text/javascript" src="../js/nav.js"></script>

     </body>
     </html>

