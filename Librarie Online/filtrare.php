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
   
  <?php

if(isset($_POST['filter'])){


 if(isset( $_POST['pretMin'])){
  $pretMin=$_POST['pretMin'];
}
else 
$pretMin=5;

 if(isset( $_POST['pretMax']))
{  $pretMax=$_POST['pretMax'];

}
else 
$pretMax=100;

 if(isset( $_POST['sort']))
  {
    $sort=$_POST['sort'];
}

else 
$sort='titlu' ;

if(isset( $_POST['categorie']))
{
  $gen=trim($_POST['categorie']);
 $stidFilter = oci_parse($conn, 'select * from carte where gen=:genb and pret>=:pretMinb and pret <=:pretMaxb order by pret desc' );
  oci_bind_by_name($stidFilter, ':genb', $gen);
  oci_bind_by_name($stidFilter, ':pretMinb', $pretMin);
  oci_bind_by_name($stidFilter, ':pretMaxb', $pretMax);
  //oci_bind_by_name($stidFilter, ':sortb', $sort);
  oci_execute($stidFilter);

}

else 
{ 

 
  $stidFilter = oci_parse($conn, 'select * from carte where pret>=:pretMinb and pret <=pretMaxb order by :sortb' );
 oci_bind_by_name($stidFilter, ':pretMinb', $pretMin);
  oci_bind_by_name($stidFilter, ':pretMaxb', $pretMax);
  oci_bind_by_name($stidFilter, ':sortb', $sort);
  oci_execute($stidFilter);

}

}

else if(isset($_POST['subS'])){
    $search='%'.strtolower (trim($_POST['search'])).'%';
   $stidFilter = oci_parse($conn, 'select * from carte where lower(titlu) like :srch');
    oci_bind_by_name($stidFilter, ':srch', $search);
    oci_execute($stidFilter);
}

else

{
    $stidFilter = oci_parse($conn, 'select * from carte' );
    oci_execute($stidFilter);
}



?>

   <div class="content" >
	 	<div class="filter">
      <br>
      <form method="post"  style="margin-left: 30px;margin-bottom: 20px">
        Categorie: <select name="categorie">
        <option value="afaceri">Afaceri</option>
         <option value="arta">Arta</option>
          <option value="literatura">Literatura</option>
           <option value="sanatate">Sanatate</option>
            <option value="stiinta">Stiinta</option>
             <option value="altele">Altele</option>

      </select>
    Pret minim: <input type="number" name="pretMin" max="100" min="5" placeholder="5">
    Pret maxim: <input type="number" name="pretMax" max="100" min="5" placeholder="100">

Sorteaza: <select name="sort">
 <option value="pret asc">Pret crescator</option>
  <option value="pret desc">Pret descrescator</option>
   <option value="titlu asc">Alfabetic</option>
  
</select>
 <button type="submit" name="filter">Trimite</button>
      </form>

      <form method="post" style="margin-left: 30px">
      <input type="text" placeholder="Cauta carte" name="search">
      <button type="submit" name="subS">Cauta</button>
      </form>
    </div>





<?php 

while (($row = oci_fetch_array($stidFilter, OCI_BOTH)) != false) {
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

	 </div>
  
   
     <?php // Free the statement identifier when closing the connection
oci_free_statement($stidFilter);
oci_close($conn);
?>

     <script type="text/javascript" src="js/nav.js"></script>
     </body>
     </html>