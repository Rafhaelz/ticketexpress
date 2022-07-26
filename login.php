<?php include_once('conexao.php');session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div id="login-container">
    <h1>Ticket Express</h1>
    <form action="func/validar_login.php" method="post">
      <label for="email">E-mail</label>
      <input type="email" name="email" id="email" placeholder="Digite seu e-email" autocomplete="off">
      <label for="password">Senha</label>
      <input type="password" name="senha" id="password" placeholder="Digite sua senha">
      <a href="#" id="forgot-pass">Esqueceu a senha?</a>
      <input type="submit" value="Login">
    </form>
   
    <div id="register-container">
      <p>Ainda não tem uma conta?</p>
      <a href="registrarfunc.php">Registrar</a>
    </div>
  </div>

    

  <script src="js/js1.js"></script>
</body>
</html>