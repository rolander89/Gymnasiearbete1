<?php
include("auth_session.php");
require('db.php');
?>


<!DOCTYPE html>
<html>
<head>
  <meta content="2;url=2nyttklassrum.html">
  <meta charset="utf-8" />
  <title>NIRO</title>
  <link rel="stylesheet" href="nyttklassrum.css" />
   <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css" />
</head>
<body>

   <div id="header">
    <ul>
     <li><a href="Framsida.php">Startsida</a></li>
     <li onclick="location.href='2Nyttklassrum'"><a href="#Nyttklassrum">Nytt klassrum</a></li>
	 <li onclick="location.href=''"><a href="#Minaklassrum">Mina klassrum</a></li>
     <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Logout</button>
	 <li style="float:right"style="width:auto;"><a class="active" href="#Hjälp">Hjälp</a></li>
	  
    </ul>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="login.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="email"><b>Användarnamn</b></label>
      <input type="text" placeholder="Namn" name="email" required>

      <label for="psw"><b>Lösenord</b></label>
      <input type="password" placeholder="Lösenord" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Kom ihåg</label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
	  <span style="float:right" class="psw">Registrera dig <a href="registrera.html">här!</a></span><br /><br />
      <span style="float:right" class="rgr">Glömt <a href="#">lösenord?</a></span><br />
    </div>
  </form>
</div>




 <div id="container">
 <div id="Titel"><center><h1>Välkommen till din virutella klass</h1></center> </div> 



<div class="main">
<div class="mobel" id="pappa">
</div>

<main>
 <div id="klassrum"></div>
</main><br /><br /><br />






<script>


function gogogo(){
                   

		  alert("hello");
        var elem = $(this),
            id = elem.attr('id'),
            newleft = elem.attr('data-left'),
            newtop = elem.attr('data-top');
            
        $.ajax({
            type: 'POST',
            url: 'save-position.php',
            data: {'id':id, 'newleft': newleft, 'newtop':newtop},
            success: function(result){
                alert(result);
            },
			failure: function(){
				alert("fail");
			}
        }) ;           
            
    }
                                                                                                  

</script>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="nyttklassrum.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
	<script>
</body>

</html>
