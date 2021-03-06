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
    <h1>Librarie Online</h1>    <br><br>

<?php
$stidCount = oci_parse($conn, 'select * from carte');
oci_execute($stidCount);
oci_fetch_all($stidCount, $res);
$pages=ceil(oci_num_rows($stidCount)/18);

oci_free_statement($stidCount);

$pageNumber=1;
//$pages=20;

if(isset($_POST['number'])){
  $pageNumber=$_POST['number'];
}
$min=(($pageNumber-1)*18)+1;
$max=$min+18;
$stid = oci_parse($conn, 'select * from carte where idCarte>=:min and idCarte<:max');
oci_bind_by_name($stid, ':min', $min);
oci_bind_by_name($stid, ':max', $max);
oci_execute($stid);


while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {
        echo '<form method="post" action="detalii.php"> 
        <button class="item" type="submit" value='.$row[0].' name="idCarte">
        <div class="pic">
          <img src="img/'.$row[8].'.jpg"/>
        </div>
        <div class="desc">
          <p>'.ucfirst($row[2]).'</p>
          <p style="font-size:14px">Editura:'.ucfirst($row[4]).'</p>
            <p>$'.$row[7].'</p>
        </div>
       </button> 
       </form>';
}


?>
<br>
<div class="pagination">
<?php
for($i=1;$i<=$pages;$i++){
  if($i==$pageNumber){
    echo "<form method='post' action='index.php'>
     <input type='submit' value=".$i." name='number' style='background:#eee;color:#163d6b;'>
  </form>";
  }
  else
  echo "<form method='post' action='index.php'>
     <input type='submit' value=".$i." name='number'>
  </form>";
}
?>
   </div>

   </div>
  
   
     <?php // Free the statement identifier when closing the connection
oci_free_statement($stid);
oci_close($conn);
?>

     <script type="text/javascript" src="js/nav.js"></script>
     </body>
     </html>