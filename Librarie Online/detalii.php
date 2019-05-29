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

if(isset($_POST['idCarte'])){
  $id=$_POST['idCarte'];



$stid = oci_parse($conn, 'select * from carte where idCarte=:idb');
oci_bind_by_name($stid, ':idb', $id);
oci_execute($stid);
$row = oci_fetch_array($stid, OCI_BOTH);
oci_free_statement($stid);


$stid2 = oci_parse($conn, 'select get_rating(idCarte) from carte where idCarte=:idb2');
oci_bind_by_name($stid2, ':idb2', $id);
oci_execute($stid2);
$row2 = oci_fetch_array($stid2, OCI_BOTH);
oci_free_statement($stid2);

$stid1 = oci_parse($conn, 'select * from autori where idAutor=:idb2');
oci_bind_by_name($stid1, ':idb2', $row[3]);
oci_execute($stid1);
$row1 = oci_fetch_array($stid1, OCI_BOTH);

?>

   <div class="book">
    <div class="left">
    <img src=<?php echo 'img/'.$row[8].'.jpg' ?> >
  </div>
  <div class="right">
    <h2><center> <?php echo $row[2]; ?> </center> </h2><br>
    <p><?php echo 'Autor: '.$row1[1].' '.$row1[2]; ?></p>
    <p><?php echo 'Editura: '.$row[4]; ?></p>
    <p><?php echo 'Categorie: '.ucfirst($row[1]);?></p>
    <p><?php echo 'Numar pagini: '.$row[6]; ?></p>
    <p><?php echo 'Carti disponibile: '.$row[5]; ?></p>
    <p><?php echo 'Pret: $'.$row[7]; ?></p>
    <p><?php if(isset($row2[0])) echo 'Rating: '.$row2[0].'/5'; 
     else echo 'Rating: 0/5';
    ?></p>
    <form method="post" action="comanda.php">
    <button type="submit" name='comanda' value=<?php echo $row[0]; ?> >Comanda</button>
    </form>
  </div>
	 </div>
  
   
     <?php 
 }
     // Free the statement identifier when closing the connection
oci_free_statement($stid1);
oci_close($conn);
?>

     <script type="text/javascript" src="js/nav.js"></script>
     </body>
     </html>