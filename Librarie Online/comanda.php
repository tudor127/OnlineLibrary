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

if(isset($_POST['comanda'])){
  $id=$_POST['comanda'];



$stid = oci_parse($conn, 'select * from carte where idCarte=:idb');
oci_bind_by_name($stid, ':idb', $id);
oci_execute($stid);
$row = oci_fetch_array($stid, OCI_BOTH);
oci_free_statement($stid);
?>

   <div class="book" style="height: 400px">
    <div class="left" style="height: 400px;width: 50%">
    <form method="post" class="formC" action="plasare.php">
      Nume: <input type="text" name="nume" style="margin-left: 64px" required><br>
      Prenume: <input type="text" name="prenume" style="margin-left: 43px"  required><br>
      Adresa Livrare: <input type="text" name="adresa" style="margin-left: 3px" required><br>
      Numar Telefon: <input type="text" name="telefon" style="margin-left: 0px" required><br>
      <input style="display: none;" type="text" name="id" value=<?php echo $id; ?>>
      <button type="submit" name="plasare" class="subCom">Plaseaza Comanda</button>
    </form>
  </div>
  <div class="right" style="height: 360px;width: 50%">
    <center>
    <h2><?php echo $row[2]; ?></h2>
    <img src=<?php echo "img/".$row[8].".jpg"; ?> >
  </center>
  </div>
	 </div>
  
   
     <?php 
 }
     // Free the statement identifier when closing the connection

oci_close($conn);
?>

     <script type="text/javascript" src="js/nav.js"></script>
     </body>
     </html>