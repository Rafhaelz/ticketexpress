<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Checkout</title>
  <link rel="stylesheet" href="css/styles3.css">
</head>
<body>
      <div class="container">
        <form action="/action_page.php">
  
          <div class="row">
            <div class="col-50">
              <h3>Endereço de Cobrança</h3>
              <label for="fname"><i class="fa fa-user"></i> Nome Completo</label>
              <input type="text" id="fname" name="firstname" placeholder="Beatriz Crispim">
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
              <input type="text" id="email" name="email" placeholder="bia@example.com">
              <label for="adr"><i class="fa fa-address-card-o"></i> Endereço</label>
              <input type="text" id="adr" name="address" placeholder="AV. Getúlio vargas 97">
              <label for="city"><i class="fa fa-institution"></i> Cidade</label>
              <input type="text" id="city" name="city" placeholder="Manaus">
  
              <div class="row">
                <div class="col-50">
                  <label for="state">Estado</label>
                  <input type="text" id="state" name="state" placeholder="AM">
                </div>
                <div class="col-50">
                  <label for="CEP">CEP</label>
                  <input type="text" id="CEP" name="CEP" placeholder="00000-000">
                </div>
              </div>
            </div>
  
            <div class="col-50">
              <h3>Pagamento</h3>
              <label for="fname">Cartão de Crédito</label>
              <div class="icon-container">
                <i class="fa fa-cc-visa" style="color:navy;"></i>
                <i class="fa fa-cc-amex" style="color:blue;"></i>
                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                <i class="fa fa-cc-discover" style="color:orange;"></i>
              </div>
              <label for="cname">Nome no Cartão</label>
              <input type="text" id="cname" name="cardname" placeholder="Beatriz de C Crispim">
              <label for="ccnum">Número do cartão de crédito</label>
              <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
              <label for="expmonth">Exp Mês</label>
              <input type="text" id="expmonth" name="expmonth" placeholder="Setembro">
  
              <div class="row">
                <div class="col-50">
                  <label for="expyear">Exp Ano</label>
                  <input type="text" id="expyear" name="expyear" placeholder="2028">
                </div>
                <div class="col-50">
                  <label for="cvv">CVV</label>
                  <input type="text" id="cvv" name="cvv" placeholder="352">
                </div>
              </div>
            </div>
  
          </div>
          <input type="submit" value="Concluir compra" class="btn"><br>
          <a type="button"  href="ticket.php" class="btn">VOLTAR</a>
        </form>
      </div>
</body>
</html>