<!DOCTYPE html>
     
	 <html>
     
	 <head>
     
	 <meta charset="utf-8"/>
	 
	 <title>Online Library</title>
     
	 <link rel="stylesheet" type="text/css" href="css/detalii.css"/> 
   <link rel="stylesheet" type="text/css" href="css/main.css"/> 
	 
	 <link rel='icon' href="../img/fav.png">
     
	 </head>
     
	 <body>
    <!-- navbar -->
	<?php include 'include/nav.php'; ?>
  <!-- db conn -->
	<?php require_once 'include/conn.php';?>
   
   <div class="content">

<?php

if(isset($_POST['plasare'])){

 $nume=$_POST['nume'];
 $prenume=$_POST['prenume'];
 $adresa=$_POST['adresa'];
 $telefon=$_POST['telefon'];
 $id=$_POST['id'];


$stid = oci_parse($conn, '
  begin
adauga_comanda( :id,:nume, :prenume,
:adresa ,:telefon);
  end;
	');
oci_bind_by_name($stid, ':id', $id);
oci_bind_by_name($stid, ':nume', $nume);
oci_bind_by_name($stid, ':prenume', $prenume);
oci_bind_by_name($stid, ':adresa', $adresa);
oci_bind_by_name($stid, ':telefon', $telefon);

oci_execute($stid);
oci_free_statement($stid);
?>

   <div class="book" style="height: 350px"><br><br>
   <center><h2>Comanda a fost plasata cu succes!</h2>
   <img src="img/sent.png" style="width: 100px;height: 100px" />
 </center>
	 </div>
  
   
     <?php 
 }
     // Free the statement identifier when closing the connection

oci_close($conn);
?>

     <script type="text/javascript" src="js/nav.js"></script>
     </body>
     </html>