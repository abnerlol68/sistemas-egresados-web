<?php 
  if (!isset($_SESSION["id_graduate"])) {
    header("Location: login.php");
    return;
  }
?>
