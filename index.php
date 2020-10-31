<!DOCTYPE html>
<html lang="da">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="style.css">
        <title>Gisito Scooters</title>
    </head>

    <body>
        <div id="pagewrap">
            <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
            
            <header class="fordele">
                <img src="ikoner/ikon3whitegray-11.svg" id="fragt" >
                <img src="ikoner/ikon1whitegray-09.svg" id="bytteret" >
                <img src="ikoner/ikon2whitegray-10.svg" id="rating" >
                <img src="ikoner/stjerner-12.svg" id="produkt" >
            </header>

            <nav class="menu"> 
                <div class="nav">
                    <label for="toggle">&#9776; <p id="menu-button-text">menu</p></label>
                    <input type="checkbox" id="toggle"/>
                    <div class="menupop">
                        <img src="ikoner/komplete-04.svg" id="completes">
                        <p class="menutext">Komplette løbehjul</p>
                        <img src="ikoner/dele_Artboard%206.svg" id="dele">
                        <p class="menutext">Dele</p>
                        <img src="ikoner/beskyttelse-07.svg" id="beskyttelse">
                        <p class="menutext">Beskyttelse</p>
                        <img src="ikoner/apparel-05.svg" id="apparel">
                        <p class="menutext">Apparel</p>
                        <img src="ikoner/rampe-08.svg" id="rampe">
                        <p class="menutext">Ramper og Rails</p>
                    </div>

                </div>
            </nav>

            <nav class="menudesktop">
                <ul class="menudesktopcontainer">
                    <li class="itemmenudekstop" id="item1top"><img src="ikoner/komplete-04.svg" id="completesdesktop"><p>Komplete Løbehjul</p></li>
                    <li class="itemmenudekstop" id="item2top"><img src="ikoner/dele_Artboard%206.svg" id="deledesktop"><p>Dele</p></li>
                    <li class="itemmenudekstop" id="item3top"><img src="ikoner/beskyttelse-07.svg" id="beskyttelsedesktop"><p>Beskyttelse</p></li>
                    <li class="itemmenudekstop" id="item4top"><img src="ikoner/apparel-05.svg" id="appareldesktop"><p>Apparel</p></li>
                    <li class="itemmenudekstop" id="item5top"><img src="ikoner/rampe-08.svg" id="rampedesktop"><p>Ramper og Rails</p></li>
                </ul>
            </nav> <!-- MENU FOR DESKTOP -->

            <nav class="menuleftdesktop">

                <section id="kompletemenuleft">
                    <h3>Komplete Løbehjul</h3>
                    <ul class="menuleftkomplete">
                        <li>Envy Blunt</li>
                        <li>Ethic</li>
                        <li>Lucky</li>
                        <li>Native</li>
                        <li>MADD</li>
                    </ul>
                </section>

                <section id="delemenuleft">
                    <h3>Dele</h3>
                    <ul class="menuleftkomplete">
                        <li>Bars</li>
                        <li>Decks</li>
                        <li>Hjul</li>
                        <li>Grips</li>
                        <li>Forgafler</li>
                    </ul>
                </section>

                <section id="beskyttelsemenuleft">
                    <h3>Beskyttelse</h3>
                    <ul class="menuleftkomplete">
                        <li>Hjelme</li>
                        <li>Knæbeskyttere</li>
                        <li>Albuebeskyttere</li>
                        <li>Handsker</li>
                        <li>Tandbeskyttere</li>
                    </ul>
                </section>

                <section id="apparelmenuleft">
                    <h3>Apparel</h3>
                    <ul class="menuleftkomplete">
                        <li>T-shirts</li>
                        <li>Sko</li>
                        <li>Bukser</li>
                        <li>Hoodies</li>
                        <li>Mobilkasser</li>
                    </ul>
                </section>

                <section id="rampermenuleft">
                    <h3>Ramper og Rails</h3>
                    <ul class="menuleftkomplete">
                        <li>Quaters</li>
                        <li>Kickers</li>
                        <li>Banks</li>
                        <li>Flat Rails</li>
                        <li>Runde Rails</li>
                    </ul>
                </section>

            </nav> <!-- MENU TIL VENSTRE FOR DESKTOP -->


            <section class="selvbetjening">
                <ul class="betjeningimg">
                    <li id="logo"><a href="../index.html"><img src="ikoner/LOGO.svg"></a></li>
                    <li id="gemt" class="ikonerfordesk"><img src="ikoner/gemt3-02.svg" width="60" height="60"><p class="img-text-selv">Gemt</p></li>
                    <li id="kurv" class="ikonerfordesk"><img src="ikoner/kurv3-03.svg" width="60" height="60"><p class="img-text-selv">Kurv</p></li>
                    <li id="konto" class="ikonerfordesk"><img src="ikoner/konto3-01.svg" width="60" height="60"><p class="img-text-selv">Konto</p></li>
                </ul>
            </section>

            <nav class="search">
                <input type="text" placeholder="Søg efter produkter eller brands..." id="searchbar">
            </nav>
            
            <!-- BOOTSTRAP CAROUSEL TIL NYHEDER -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="produktbilleder/bignews-codyflomdele-tabletmini.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="produktbilleder/bignews-envyprodigy-tabletmini.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="produktbilleder/bignews-maddtilbud-tabletmini.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

            <section class="top3">
                <section id="top3completes">
                    <h3 class="titeltop3">Top 3 Løbehjul</h3>
                    <ul class="top3container">
                        <li><img src="produktbilleder/prodigys81.png" class="imgtop3" id="complete1"><p>Envy Prodigy S8</p> 1599 kr.</li>
                        <li><a href="produktbeskrivelse/codycomplete.php"><img src="produktbilleder/codycomplete1.png" class="imgtop3" id="complete2"><p>Cody Flom Complete</p> 1699 kr.</a></li>
                        <li><img src="produktbilleder/erawancomplete1.png" class="imgtop3" id="complete3"><p>Ethic Erawan</p> 1549 kr.</li>
                    </ul>
                </section>

                <section id="top3deck">
                    <h3 class="titeltop3">Top 3 Decks</h3>
                    <ul class="top3container">
                        <li><a href="produktbeskrivelse/raymond-warner-aosv5.php"><img src="produktbilleder/raywarnersigdeck1.png" class="imgtop3" id="deck1"><p>Raymond Warner AOS V5</p>1599 kr.</a></li>
                        <li><img src="produktbilleder/codysigdeck1.png" class="imgtop3" id="deck2">1199 kr.</li>
                        <li><img src="produktbilleder/azteklucid1.png" class="imgtop3" id="deck3">1399 kr.</li>
                    </ul>
                </section>

                <section id="top3bar">
                    <h3 class="titeltop3">Top 3 Bars</h3>
                    <ul class="top3container">
                        <li><img src="produktbilleder/unions1.png" class="imgtop3" id="bar1">1399 kr.</li>
                        <li><img src="produktbilleder/ygwbar1.png" class="imgtop3" id="bar2">1899 kr.</li>
                        <li><img src="produktbilleder/tenacity1.png" class="imgtop3" id="bar3">799 kr.</li>
                    </ul>
                </section>

                <section id="top3hjul">
                    <h3 class="titeltop3">Top 3 Hjul</h3>
                    <ul class="top3container">
                        <li><img src="produktbilleder/blunthollowcores1.png" class="imgtop3" id="hjul1">249 kr.</li>
                        <li><img src="produktbilleder/honeycores1.png" class="imgtop3" id="hjul2">299 kr.</li>
                        <li><img src="produktbilleder/riverwheels1.png" class="imgtop3" id="hjul3">499 kr.</li>
                    </ul>
                </section>

                <section id="top3hjelm">
                    <h3 class="titeltop3">Top 3 Hjelme</h3>
                    <ul class="top3container">
                        <li><img src="produktbilleder/rekdhelmet1.png" class="imgtop3" id="hjelm1">349 kr.</li>
                        <li><img src="produktbilleder/s1helmet1.png" class="imgtop3" id="hjelm2">559 kr.</li>
                        <li><img src="produktbilleder/triple81.png" class="imgtop3" id="hjelm3">299 kr.</li>
                    </ul>
                </section>

                <section id="top3beskytter">
                    <h3 class="titeltop3">Top 3 Knæbeskyttere</h3>
                    <ul class="top3container" id="top3beskyttercon">
                        <li><img src="produktbilleder/fusealpha1.png" class="imgtop3" id="beskytter1">349 kr.</li>
                        <li><img src="produktbilleder/fusekneepads1.png" class="imgtop3" id="beskytter2">499 kr.</li>
                        <li><img src="produktbilleder/rekdkneepads1.png" class="imgtop3" id="beskytter3">339 kr.</li>
                    </ul>
                </section>
            </section>

            <section class="team">
                <img src="banner/teamet.jpg" id="team">
            </section>

            <section class="nyhedsbrev">
                <form action="action_page.php">
                    <div class="containerbrev">
                        <h3 class="titelnyhedsbrev">Modtag vores nyhedsbrev!</h3>
                        <p id="underrubriknyhedsbrev">Modtag e-mails med gode tilbud, tips og produktnyheder.</p>
                    </div>

                    <div class="containerbrev">
                        <input type="text" placeholder="Email addresse" name="Indtast e-mail her..." required>
                    </div>

                    <div class="containersub">
                        <input type="submit" value="Subscribe">
                    </div>
                </form>


            </section>

            <footer class="information">
                <div class="containernummer">
                    <h2 id="sporgsmal">Spørgsmål?</h2> <h2 id="kontaktos"> Ring 33 23 46 54</h2>
                </div>

                <section id="support">
                    <h3 class="titelfooter">SUPPORT</h3>
                    <ul class="containersupport">
                        <li>Hjælp og Kontakt</li>
                        <li>Leveringsinfo</li>
                        <li>Ordrestatus</li>
                        <li>Returner odre</li>
                    </ul>
                </section>

                <section id="gisito">
                    <h3 class="titelfooter">GISITO</h3>
                    <ul class="containergisito">
                        <li>Log ind</li>
                        <li>Om os</li>
                        <li>Butik</li>
                        <li>Sikker betaling</li>
                    </ul>
                </section>

                <img src="socials/youtube.png" class="imgsocial" id="yt" width="50">
                <img src="socials/instagram.png" class="imgsocial" id="ig" width="50">
                <img src="socials/tiktok.png" class="imgsocial" id="tiktok" width="50">
                <img src="socials/em%C3%A6rket.png" id="credible" id="em" width="80">
            </footer>
        </div> <!-- PAGE WRAP -->  
    </body>
</html>