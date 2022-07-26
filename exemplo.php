<?php  include_once('conexao.php');session_start(); 
if(@$_SESSION['session_nivel_usuario'] == '1'){ ?>

codigo html protegido

<?php }else{ echo "<script language='javascript'>window.alert('SEM PERMISSÃO!'); </script>"; echo "<script language='javascript'>window.location='login.php'; </script>";} ?>