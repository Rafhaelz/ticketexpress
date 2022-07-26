<?php session_start(); 
if(@$_SESSION['session_nivel_usuario'] == '1'){ ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vagas na Express</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

    <body> 

        <div class="box">
            <h2>Selecione uma categoria:</h2>
            <img src= "img/categoria A.png" alt="moto">
            <img src="img/categoria B.png" alt="carro">
        </div>
        
    </body>

</html>

<?php }else{ echo "<script language='javascript'>window.alert('SEM PERMISSÃO!'); </script>"; echo "<script language='javascript'>window.location='login.php'; </script>";} ?>