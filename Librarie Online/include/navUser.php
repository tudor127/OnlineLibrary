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
	 	<a href="dashboard.php"><li>Dashboard</li></a>
	 	<a href="#"><li>Carti recomandate</li></a>
        <li onmouseover="DropShow()" onmouseleave="DropHide()" id="liDrop"><span class="spanDrop">Categorii</span> 
        	<img src="../img/downArrow.png" class="imgDrop" id="imgDrop1">
        	<img src="../img/whiteArrow.png" class="imgDrop" id="imgDrop2">
        <ul id="menuDrop">
        	<li>Nuvele</li>
        	<li>Romane</li>
        	<li>Poezii</li>
        	<li>Povesti</li>
        	<li>Fabule</li>
        </ul>
	 	</li>
	 	<a href="../filtrare.php"><li>Filtrare</li></a>
	 		<form method="post" > 
	 		<button type="submit" name="logOut" class="logOutBtn">Logout</button>
            </form>
            <?php 
            if(isset($_POST['logOut'])){
                session_unset();
                session_destroy();
            	header('Location: ../login.php');
            }
            ?>
	 	
	 </ul>
	 </div>
	 </div>