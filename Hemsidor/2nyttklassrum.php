<?php

include("auth_session.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>NIRO</title>
  <link rel="stylesheet" href="nyttklassrum.css" />
   <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css" />
</head>
<body>
	
   <div id="header">
   
    <ul>
     <li><a href="Framsida.php">Startsida</a></li>
     <li onclick="location.href='file:///C:/Users/rha09/OneDrive/Skrivbord/Gymnasiearbete/Hemsidor/Nyttklassrum/2nyttklassrum.html#news'"><a href="#Nyttklassrum">Nytt klassrum</a></li>
	 <li onclick="location.href=''"><a href="#Minaklassrum">Mina klassrum</a></li> 
     <button onclick="location.href= 'loggaut.php'" style="width:auto;">Log out</button>	
	 <li style="float:right"><a class="active" href="#Hjälp">Hjälp</a></li>
    </ul>
	</div>





 <div id="container">
 <div id="Titel"><center><h1>Välkommen till ditt klassrum</h1></center> </div> 



<div class="main">
<img src="wood2.jpg" alt="wood2">

<div class="mobel original ram" id="pappa">

</div>


<div class="mobelstor original ram" id="daddy">
<input type="text" size="5" />
</div>

<div class="jattemobel original ram" id="storsatan">
<input type="text" size="50" />
<br>
<input type="text" size="50" />



</div>
</div>




<main>
 <div id="klassrum"></div>
</main>

</div>
<button onclick="window.print()">Skriv ut</button>

   <script>
   function koords()
   {
	document.getElementsById("child").offsetTop;
	}
	</script>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
	<script src="nyttklassrum.js"></script>
</body>

</html>
