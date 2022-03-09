<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
	<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        
        $sql_u = "SELECT * FROM registrera2 WHERE username='$username'";		
	    $res_u = mysqli_query($con, $sql_u);
		if (mysqli_num_rows($res_u) > 0) {
  	    echo "<script>alert('användarnamn upptaget');";
			echo 'window.location.href  = "registration1.php"';
		echo '</script>';
		}
		else{
        $query    = "INSERT into `registrera2` (username, password)
                     VALUES ('$username', '". $password ."')";
					 
        $result   = mysqli_query($con, $query);
		
       if($result) {
            echo header('Location: Framsida.php');
	   }
		
		}
	}
     else{
		
?>
 <form action="" method="POST">
  <div class="container">
    <h1>Registrera</h1>
    <p>Fyll i användarnamn och lösenord.</p>
    <hr>

    <label for="username"><b>Skriv användarnamn</b></label>
    <input type="text" placeholder="skriv användarnamn" name="username" id="username" required>

    
    <label for="password"><b>Skriv lösenord</b></label>
    <input type="password" placeholder="skriv lösenord" name="password" id="password" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Registrera</button>
  </div>
  
  <div class="container signin">
    <p>Har du redan ett konto? <a href="1Framsida.html">Logga in</a>.</p>
  </div>
</form>
<?php
    }
?>
</body>
</html>
