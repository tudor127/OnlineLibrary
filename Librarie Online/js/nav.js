	function Show(){
          	document.getElementById('navbar').style.width="350px";
          	document.getElementById('Showed').style.width="90%";
          }
     		function Hide(){
          	document.getElementById('Showed').style.width="0";
          	document.getElementById('navbar').style.width="35px";
     	}

     	function DropShow(){
     		document.getElementById('menuDrop').style.height="260px";
     		document.getElementById('imgDrop1').style.height="0px";
     		document.getElementById('imgDrop2').style.height="19px";
     	}


     	function DropHide(){
     		document.getElementById('menuDrop').style.height="0px";
     	    document.getElementById('imgDrop2').style.height="0px";
     		document.getElementById('imgDrop1').style.height="7.4px";
     	}