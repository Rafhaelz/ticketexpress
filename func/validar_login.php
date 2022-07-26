<?php include_once('../conexao.php');session_start(); ?>

<?php

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

	$query = "SELECT * from admins where email = '$email' ";
	$result = mysqli_query($conexao, $query); 

	$dado = mysqli_fetch_array($result); 

	$linha = mysqli_num_rows($result);
	@$senhabd = $dado['senha'];

	if ($linha > 0){ 

        if($senha == $senhabd ){

            $_SESSION['session_email'] = $email;
            $_SESSION['session_nivel_usuario'] = $dado['nivel'];
            header('Location:../ticket.php');
            exit();

        }else{
            echo "<script language='javascript'>window.alert('Senha errada'); </script>";
            echo "<script language='javascript'>window.location='../login.php'; </script>";
        }	

	}else{
        echo "<script language='javascript'>window.alert('Não existe esse usuário'); </script>";
        echo "<script language='javascript'>window.location='../login.php'; </script>";
    }

?>