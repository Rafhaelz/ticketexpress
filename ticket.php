<?php  include_once('conexao.php');session_start(); 
if(@$_SESSION['session_nivel_usuario'] == '1'){ ?>


<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- Cdn Materialize CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css" />
      <style media="screen">
         h3{
         text-align:  center;
         }
         select {
             display: block;
         }
      </style>
      <title>Ticket - tela principal</title>
   </head>
   <body>
      <section>
        <div class="container">
            <h3>Ticket - tela principal</h3>
            <br>
            <h4>Menu</h4>
            <a type="button" href="ticket.php" class="btn waves-effect" >Ticket - Tela Principal</a>
            <a type="button" href="pagamento.php" class="btn waves-effect" >Fazer Pagamento</a>
            <a type="button" href="func/logout.php" class="btn waves-effect" >Sair do sistema</a>
            <br>
            <h4>Dados Gerais - Pagos</h4>
            <br>
            <div id="dadosGerais" class="">
                
               <table class="table">
                  <thead>
                     <tr>
                     <th>id</th>
                        <th>Placa</th>
                        <th>Categoria</th>
                        <th>Entrada</th>
                        <th>Saida</th>
                        <th>Permanencia</th>
                        <th>Valor</th>
                     </tr>
                  </thead>
                  <tbody>
                     <!-- dados  -->
                     <?php
                        $dados = "SELECT * from ticket where status = 'pago' ";
                        $dadosquery = mysqli_query($conexao, $dados);

                        while($resdados = mysqli_fetch_array($dadosquery)){
                        $placa= $resdados["placa"];
                        $id= $resdados["id"];
                        $categoria= $resdados["categoria"];
                        $horario_en= $resdados["horario_en"];
                        $horario_sa= $resdados["horario_sa"];
                        $permanencia= $resdados["permanencia"];
                        $valor= $resdados["valor"];
                     ?>


                     <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $placa; ?></td>
                        <td><?php echo $categoria; ?></td>
                        <td><?php echo $horario_en; ?></td>
                        <td><?php echo $horario_sa; ?></td>
                        <td><?php echo $permanencia; ?></td>
                        <td>R$: <?php echo $valor; ?></td>
                     </tr>

                     <?php } ?>
                  </tbody>
               </table>
            </div>
            <br>
            <h4>Veiculos no Estacionamento</h4>
            <br>
            <div id="estacionamento" class="">
               <table class="table">
                  <thead>
                     <tr>
                        <th>id</th>
                        <th>Placa</th>
                        <th>Categoria</th>
                        <th>Horario de Entrada</th>
                     </tr>
                  </thead>
                  <tbody>
                     <!-- dados  -->
                        <!-- dados  -->
                        <?php
                        $dados1 = "SELECT * from ticket where status = 'aberto' ";
                        $dadosquery1 = mysqli_query($conexao, $dados1);
                        while($resdados1 = mysqli_fetch_array($dadosquery1)){
                        $placa= $resdados1["placa"];
                        $id= $resdados1["id"];
                        $categoria= $resdados1["categoria"];
                        $horario_en= $resdados1["horario_en"];
                     ?>
                     <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $placa; ?></td>
                        <td><?php echo $categoria; ?></td>
                        <td><?php echo $horario_en; ?></td>
                    
                     </tr>
                     <?php } ?>
                  </tbody>
               </table>
            </div>
            <h4>Registrar Veículo</h4>
            <br>
            <!-- registrar Entrada de Veiculo -->
            <form class="form-entrada" method="POST" action="">
                <div class="form-group">
                  <label class="control-label" for="idEntrada">Registro de Entrada</label>
                  <input id="idEntrada" name="idEntrada" type="text" placeholder="Entre com a placa do veiculo para da entrada no Estacionamento" class="form-control input-md" required="">
                  <br>
                </div>
                <div class="form-group">
                  <label class="control-label" for="idEntrada">Selecione o tipo de veículo:</label>
                  <select class="form-control input-md" name="categoria">
                    <option value="A">A</option>
                    <option value="B">B</option>
                  </select>
                  <br>
                </div>
                <button type="submit" name="confirmar_entrada" class="btn waves-effect" >Confirmar Entrada</button>
            </form>
        </div>
         <br>
       
         <!-- Text input-->
        <div class="container">
        <h4>Registrar Saída de Veículo</h4>
            <br>
            <form class="form-saida" method="POST" action="">
                <div class="form-group">
                    <label class="col s4 control-label" for="inputSaida">Confirmar Saida</label>
                    <input id="inputSaida" name="inputSaida" type="text" placeholder="Entre com a placa do veiculo para Registrar a saida do Estacionamento" class="form-control input-md" required="">
                    <br>
                    <button type="submit" name="confirmar_saida"  class="btn waves-effect">Confirmar Saida</button>
                </div>
            </form>
        </div>
         
      </section>
      <script src="js/scripts.js"></script>

    <!-- SCRIPTS -->

    <!-- SCRIPT CADASTRAR ENTRADA -->     
    <?php 
    if(isset($_POST['confirmar_entrada'])){

        $idEntrada = mysqli_real_escape_string($conexao, $_POST['idEntrada']);
        $categoria = mysqli_real_escape_string($conexao,$_POST['categoria']);


        date_default_timezone_set('America/Sao_Paulo');
        $date = date('H:i:s'); 
        $horaEntrada = $date;
        $status = "aberto";
        
        $query = "INSERT INTO ticket  ( placa, categoria, horario_en, status ) VALUES ( '$idEntrada', '$categoria', '$horaEntrada', '$status')";
        $result = mysqli_query($conexao, $query);

        if($result == ''){
            echo "<script language='javascript'>window.alert('Erro ao cadastrar!'); </script>";
            echo "<script language='javascript'>window.location='ticket.php'; </script>";
        }else{
            echo "<script language='javascript'>window.alert('Cadastrado com sucesso!'); </script>";
            echo "<script language='javascript'>window.location='ticket.php'; </script>";
        }

    } ?>

    <!-- SCRIPT CADASTRAR SAÍDA --> 
    <?php 
    if(isset($_POST['confirmar_saida'])){
        $inputSaida = mysqli_real_escape_string($conexao, $_POST['inputSaida']);
   

        date_default_timezone_set('America/Sao_Paulo');
        $date = date('H:i:s');
        $horario_sa = $date;
        $status = "pago";
     
        //Pegar o horario de entrada
        $horarioentrada = "SELECT * from ticket where placa = '$inputSaida' ";
        $horarioentrada = mysqli_query($conexao, $horarioentrada);
        $res = mysqli_fetch_array($horarioentrada);
        $horario_en= $res["horario_en"];
        
        //Calcula o tempo de permanencia
        $entrada = $horario_en;
        $saida = $horario_sa;
        $hora1 = explode(":",$entrada);
        $hora2 = explode(":",$saida);
        $acumulador1 = ($hora1[0] * 3600) + ($hora1[1] * 60) + $hora1[2];
        $acumulador2 = ($hora2[0] * 3600) + ($hora2[1] * 60) + $hora2[2];
        $resultado = $acumulador2 - $acumulador1;
        $hora_ponto = floor($resultado / 3600);
        $resultado = $resultado - ($hora_ponto * 3600);
        $min_ponto = floor($resultado / 60);
        $resultado = $resultado - ($min_ponto * 60);
        $secs_ponto = $resultado;

         if($hora_ponto == 0 ){
            $inputValor = 1*3.00;
         }else{
            $inputValor = 3.00 * $hora_ponto;
         }

        //Grava na variável resultado final
        if($hora_ponto == 0){
            $tempo = $hora_ponto."0:".$min_ponto.":".$secs_ponto;
        }else{
            $tempo = $hora_ponto.":".$min_ponto.":".$secs_ponto;
        }
       
        
        $query1 = "UPDATE ticket SET status = '$status', horario_sa = '$horario_sa', permanencia = '$tempo' , valor = '$inputValor' where placa = '$inputSaida' ";
        $result1 = mysqli_query($conexao, $query1);

        if($result1 == ''){
            echo "<script language='javascript'>window.alert('Erro ao confirmar a saida!'); </script>";
            echo "<script language='javascript'>window.location='ticket.php'; </script>";
        }else{
            echo "<script language='javascript'>window.alert('Saida cadastrada com sucesso!'); </script>";
            echo "<script language='javascript'>window.location='ticket.php'; </script>";
        }

    } ?>   

   </body>
</html>

<?php }else{ echo "<script language='javascript'>window.alert('SEM PERMISSÃO!'); </script>"; echo "<script language='javascript'>window.location='login.php'; </script>";} ?>