<?php 

session_start();
session_destroy();
  echo "<script language='javascript'>window.alert('Logout feito com sucesso!'); </script>";
  echo "<script language='javascript'>window.location='../login.php'; </script>";
exit();

 ?>