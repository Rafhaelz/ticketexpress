<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registro na Express</title>
  <link rel="stylesheet" href="css/styles2.css">
</head>
<body>
  <div id="main-container">
    <h1>Cadastre-se para acessar o Ticket Express</h1>
    <form id="register-form" method="POST" action="">
      <div class="full-box">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="Digite seu e-mail" data-min-length="2" data-email-validate>
      </div>
      <div class="half-box spacing">
          <label for="name">Nome</label>
          <input type="text" name="name" id="name" placeholder="Digite seu nome" data-required data-min-length="3" data-max-length="16">
      </div>
      <div class="half-box">
          <label for="lastname">Sobrenome</label>
          <input type="text" name="lastname" id="lastname" placeholder="Digite seu sobrenome" data-required data-only-letters>
      </div>
      <div class="half-box spacing">
        <label for="lastname">Senha</label>
        <input type="password" name="password" id="password" placeholder="Digite sua senha" data-password-validate data-required>
      </div>
      <div class="half-box">
        <label for="passconfirmation">Confirmação de senha</label>
        <input type="password" name="passconfirmation" id="passwordconfirmation" placeholder="Digite novamente sua senha" data-equal="password">
      </div>
      <div>
        <input type="checkbox" name="agreement" id="agreement">
        <label for="agreement" id="agreement-label">Eu li e aceito os <a href="#">termos de uso</a></label>
      </div>
      <div class="full-box">
        <input id="btn-submit" type="submit" name="cadastrafunc" value="Registrar">
      </div>
    </form>
    <div id="register-container">
      <p>Ja possui uma conta?</p>
      <a href="login.php">Fazer Login</a>
  </div>
  <p class="error-validation template"></p>
  <script src="js/main2.jsS"></script>

  
</body>
</html>