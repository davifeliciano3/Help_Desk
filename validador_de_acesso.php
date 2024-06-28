<?php
session_start();
  $_SESSION['passou'];
  if ((!isset($_SESSION['passou'])) || (!$_SESSION['passou']='s')) {
    header('Location:index.php?login=erro2');
  }


?>