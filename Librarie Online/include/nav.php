 <div class="navbar" onmouseover="Show()" onmouseleave="setTimeout(Hide, 0);" id="navbar"> 
	 	<div class="menuHided" id="Hided">
	 	<p>M</p>
	 	<p>E</p>
	 	<p>N</p>
	 	<p>I</p>
	 	<p>U</p>
	 </div>

	 <div class="menuShowed" id="Showed">
	 	<ul class="menuList">
	 	<a href="index.php"><li>Acasa</li></a>
	 	<a href="login.php"><li>Carti recomandate</li></a>
        <li onmouseover="DropShow()" onmouseleave="DropHide()" id="liDrop"><span class="spanDrop">Categorii</span> 
        	<img src="img/downArrow.png" class="imgDrop" id="imgDrop1">
        	<img src="img/whiteArrow.png" class="imgDrop" id="imgDrop2">
        <ul id="menuDrop">
        	<li>Afaceri</li>
        	<li>Arta</li>
        	<li>Literatura</li>
        	<li>Sanatate</li>
        	<li>Stiinta</li>
        	<li>Altele</li>
        </ul>
	 	</li>
	 	<a href="filtrare.php"><li>Filtrare</li></a>
	 	<a href="statistici.php"><li>Statistici</li></a>
	 	<a href="login.php"><li>Login</li></a>
	 </ul>
	 </div>
	 </div>