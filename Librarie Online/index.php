<!DOCTYPE html>
     
	 <html>
     
	 <head>
     
	 <meta charset="utf-8"/>
	 
	 <title>Online Software Repository</title>
     
	 <link rel="stylesheet" type="text/css" href="css/index.css"/> 
	 
	 <link rel='icon' href="../img/fav.png">
     
	 </head>
     
	 <body>
	 <div class="navbar" onmouseover="Show()" onmouseleave="setTimeout(Hide, 0);" id="navbar"> 
	 	<div class="menuHided" id="Hided">
	 	<p>M</p>
	 	<p>E</p>
	 	<p>N</p>
	 	<p>I</p>
	 	<p>U</p>
	 </div>

	 <div class="menuShowed" id="Showed">
	 	<ul>
	 	<li>Acasa</li>
	 	<li>Carti recomandate</li>
	 	<li>Categorii</li>
	 	<li>Filtrare</li>
	 	<li>Login</li>
	 </ul>
	 </div>
	 </div>
	 <div class="content">
	 	<h1>BESTSELLERS</h1>

       <div class="item">
       	<div class="pic">
       		<img src="img/sahara.jpg"/>
       	</div>
       	<div class="desc">
       		<p>Product</p>
            <p>Price: 20$</p>
       	</div>
       </div>

       <div class="item">
       	<div class="pic">
       		<img src="img/sahara.jpg"/>
       	</div>
       	<div class="desc">
       		<p>Product</p>
            <p>Price: 20$</p>
       	</div>
       </div>
       
       <div class="item">
       	<div class="pic">
       		<img src="img/sahara.jpg"/>
       	</div>
       	<div class="desc">
       		<p>Product</p>
            <p>Free</p>
       	</div>
       </div>
       
       <div class="item">
       	<div class="pic">
       		<img src="img/sahara.jpg"/>
       	</div>
       	<div class="desc">
       		<p>Product</p>
            <p>Price: 20$</p>
       	</div>
       </div>
       
       <div class="item">
       	<div class="pic">
       		<img src="img/sahara.jpg"/>
       	</div>
       	<div class="desc">
       		<p>Product</p>
            <p>Free</p>
       	</div>
       </div>
       
       <div class="item">
       	<div class="pic">
       		<img src="img/sahara.jpg"/>
       	</div>
       	<div class="desc">
       		<p>Product</p>
            <p>Free</p>
       	</div>
       </div>
       
       <div class="item">
       	<div class="pic">
       		<img src="img/sahara.jpg"/>
       	</div>
       	<div class="desc">
       		<p>Product</p>
            <p>Price: 20$</p>
       	</div>
       </div>
       
	 </div>
     <script type="text/javascript">
   
     	function Show(){
          	document.getElementById('navbar').style.width="350px";
          	document.getElementById('Showed').style.width="90%";
          }
     		function Hide(){
          	document.getElementById('Showed').style.width="0";
          	document.getElementById('navbar').style.width="35px";
     	}
     </script>

     </body>
     </html>