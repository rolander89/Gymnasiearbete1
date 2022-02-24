<?php
    session_start();
    if(!isset($_SESSION["username"])) {
            echo "<script>alert('Logga in');";
			echo 'window.location.href  = "1Framsida.html"';
		echo '</script>';
        exit();
    }
?>
