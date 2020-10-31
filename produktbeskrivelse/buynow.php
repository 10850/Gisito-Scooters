<!DOCTYPE html>
<html lang="da">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="buynow.css">
        <title>Betaling</title>
    </head>
    <body>
    <div id="header">
        <h2>Betaling</h2>
        <a href="../index.php"><img src="../ikoner/LOGO.svg" id="logo"></a>
    </div>
    
    <div class="row">
      <div class="col-75">
        <div class="container">
         <form>
            <div class="row">
              <div class="col-50">
                <h3>Betalingsadresse</h3>
                <label for="fname"><i class="fa fa-user"></i> Fulde Navn</label>
                <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                <input type="text" id="email" name="email" placeholder="john@example.com">
                <label for="adr"><i class="fa fa-address-card-o"></i> Adresse</label>
                <input type="text" id="adr" name="address" placeholder="Skolegade 3">
                <label for="city"><i class="fa fa-institution"></i> By</label>
                <input type="text" id="city" name="city" placeholder="Møldrup">

                <div class="row">
                  <div class="col-50">
                    <label for="state">Region</label>
                    <input type="text" id="state" name="state" placeholder="Midtjylland">
                  </div>
                  <div class="col-50">
                    <label for="zip">Postnummer</label>
                    <input type="text" id="zip" name="zip" placeholder="9632">
                  </div>
                </div>
              </div>

              <div class="col-50">
                <h3>Betaling</h3>
                <label for="fname">Betalingsmetoder</label>
                <div class="icon-container">
                  <i class="fa fa-cc-visa"></i>
                  <i class="fa fa-cc-amex"></i>
                  <i class="fa fa-cc-mastercard"></i>
                </div>
                <label for="cname">Navn på kortholderen</label>
                <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                <label for="ccnum">Kredit Kort Nummer</label>
                <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                <label for="expmonth">Start dato</label>
                <input type="text" id="expmonth" name="expmonth" placeholder="11-2020">
                <label for="expmonth">Slut dato</label>
                <input type="text" id="expmonth" name="expmonth" placeholder="11-2020">
                <div class="row">
                  <div class="col-50">
                    <label for="cvv">CVR</label>
                    <input type="text" id="cvv" name="cvv" placeholder="352">
                  </div>
                </div>
              </div>

            </div>
            <label>
              <input type="checkbox" checked="checked" name="sameadr"> fragt adresse samme som betalingsadresse
            </label>
            
             <a href="kvittering.html"><input type="submit" value="Betal" class="btn"></a>
            
          </form>
        </div>
        </div>
          <div class="col-25">
            <div class="container">
              <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>1</b></span></h4>
                <p><a href="#">Blunt Envy - Raymond Warner AOS v5</a> <span class="price">1599 kr.</span></p>
                <p>Fragt <span class="price">0 kr.</span></p>
              <hr>
              <p>Total <span class="price" style="color:black"><b>1599 kr.</b></span></p>
            </div>
          </div>
        </div>
    </body>
</html>