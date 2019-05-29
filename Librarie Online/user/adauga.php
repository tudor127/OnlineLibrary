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
      
    <?php if(!isset($_POST['add'])){ ?>
    <div class="add">
      <h2><center>Adauga o carte</center></h2>
      <form method="post" action="">
      Titlu: <input type="text" name="titlu" style="margin-left: 64px" required><br>
      Categorie: <input type="text" name="categorie" style="margin-left: 30px"  required><br>
     Nume Autor: <input type="text" name="nautor" style="margin-left: 11px" required><br>
      Preume Autor: <input type="text" name="pautor" style="margin-left: 0px" required><br>
      Editura: <input type="text" name="editura" style="margin-left: 46px" required><br>
      Stoc: <input type="text" name="stoc" style="margin-left: 70px" required><br>
      Numar Pagini: <input type="text" name="pagini" style="margin-left: 0px" required><br>
      Pret: <input type="text" name="pret" style="margin-left: 70px" required><br>
      <button type="submit" name="add" class="subCom">Submit</button>
    </form>
   
    </div>
    <?php 
     }
     else {


       if(1==1){ // verificare user
$titlu=$_POST['titlu'];
$categorie=$_POST['categorie'];
$nautor=$_POST['nautor'];
$pautor=$_POST['pautor'];
$editura=$_POST['editura'];
$stoc=$_POST['stoc'];
$pagini=$_POST['pagini'];
$pret=$_POST['pret'];

$sql='begin 
       adauga_carte( :categorie, :titlu, 5, 
:editura, :stoc, :pagini, :pret,:nautor,:pautor);
      end;
';
$stid = oci_parse($conn, $sql);

oci_bind_by_name($stid, ':titlu', $titlu);
oci_bind_by_name($stid, ':categorie', $categorie);
oci_bind_by_name($stid, ':nautor', $nautor);
oci_bind_by_name($stid, ':pautor', $pautor);
oci_bind_by_name($stid, ':editura', $editura);
oci_bind_by_name($stid, ':stoc', $stoc);
oci_bind_by_name($stid, ':pagini', $pagini);
oci_bind_by_name($stid, ':pret', $pret);


oci_execute($stid);

oci_free_statement($stid);
oci_close($conn);



    ?>

    <div class="add" style="height: 300px">
      <br>
      <center>
      <h2>Carte adaugata cu succes!</h2>
       <img src='../img/sent.png' style="width:100px;height: 100px" >
    </center>
    </div>

  <?php }}?>


  </div>
      <script type="text/javascript" src="../js/nav.js"></script>

     </body>
     </html>

