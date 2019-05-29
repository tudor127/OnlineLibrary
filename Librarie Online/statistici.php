<!DOCTYPE html>
     
	 <html>
     
	 <head>
     
	 <meta charset="utf-8"/>
	 
	 <title>Online Library</title>
     
	 <link rel="stylesheet" type="text/css" href="css/index.css"/> 
   <link rel="stylesheet" type="text/css" href="css/main.css"/> 
	 
	 <link rel='icon' href="../img/fav.png">
     
	 </head>
     
	 <body>
    <!-- navbar -->
	<?php include 'include/nav.php'; ?>
  <!-- db conn -->
	<?php require_once 'include/conn.php';?>
   
   <div class="content">
	 	   <br><br>
<div class="stat">
  <h2><center>Statistici-Cele mai apreciate</center></h2>
  <br><br>
<?php

$stid = oci_parse($conn, 'select titlu,editura,get_rating(idCarte)  from carte where ROWNUM <= 10  order by get_rating(idCarte) desc ');
oci_execute($stid);


while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {
  $rating=$row[2]*100;
  ?>
        <p><?php echo $row[0].'-Editura '.$row[1]?> </p> 
       <p> <div style="width:500px;height:23px;background:#ccc"> 
        <div style="<?php echo "width:".$rating."px;background: red;height: 23px;color:#fff;font-weight: bold;font-size: 15px "; ?>" > <center><?php echo $row[2]; ?></center></div></div></p>
        
<?php
}


?>
</div>
<br>


	 </div>
  
   
     <?php // Free the statement identifier when closing the connection
oci_free_statement($stid);
oci_close($conn);
?>

     <script type="text/javascript" src="js/nav.js"></script>
     </body>
     </html>