<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `registrera2` WHERE username='$username'
                     AND password='$password'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
			
            // Redirect to user dashboard page
            echo "<script>alert('Du är inloggad');";
			echo 'window.location.href  = "Framsida.php"';
		echo '</script>';
        } else {
         echo "<script>alert('Fel användarnamn eller lösenord');";
			echo 'window.location.href  = "1Framsida.html"';
		echo '</script>';
        }
    } else {
?>
    
<?php
    }
?>
</body>
</html>
