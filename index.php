<?php 
 session_start();
 $_SESSION['npage'] = "index.php";
 header("Location:pages/modele.php");
?>