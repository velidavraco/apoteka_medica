
<?php include "config.php";?>
<?php 
include_once 'cart.class.php'; 
$cart = new Cart;


if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['ime']);
    header("location: index.php");
  }
?>
<!DOCTYPE html>
<html>
    <head>
          <meta charset="UTF-8">
        <title>Apoteka Medica</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="/js/homeslideshow.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
        crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
         crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
         crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" 
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
          .lol{
            height:45px;
    width:145px;
    background-color:#0d6e0d;
    color:green;
    border: 1px solid #ffffff;
    text-align:center;
    cursor: pointer;
    font-size: 17px;
    border-radius: 16px;
    font-weight: bold;
    text-decoration: none;
          }
        </style>
  </head>
       
  <div class="content">
      <!-- notification message -->
       <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
   <?php endif ?>
  
   </div>
    <body>
    <header>
         <div class="homepageheader"> 
         <?php if( isset($_SESSION['ime']) && !empty($_SESSION['ime']) )
           {
          ?>
          <button class="logout" style="color:white;"><a href="index.php?logout='1'" style="color:white;">Odjava</a></button>
	  <button class="logout" style="color:white;"><a href="viewCart.php" style="color:white;">Ko??arica</a></button>
            <?php }else{ ?>
          <button class="signin" style="color:white;"><a href="signin.php" style="color:white;">Registracija</a></button>
          <button class="login" style="color:white;"><a href="login.php" style="color:white;">Prijava</a></button>
           
            
             <?php } ?>    
         <div class="logo">
             <a href="index.php">
                  <img style=" height: 75px; width: 130px;" src="slike/Medica.jpg">
              </a>
          </div>

          <nav clas="izb">
              <ul>
                  <li><a href="index.php" ><i class="fa fa-home"></i> Naslovnica</a></li>
                  <li><a href="#proizvodi" ><i class="fas fa-caret-right"></i> Kategorije</a></li>
                  <li><a href="#onama" ><i class="fab fa-adn"></i> O nama</a></li>
                  <li><a href="#kontakt" ><i class="fa fa-envelope"></i> Kontakt</a></li>
                  <li><a href="admin/adminlogin.php" ><i class="fa fa-gear"></i> Admin</a></li>

              </ul>
            </nav>
      </header>
        
      </div>
       
       
  
       
        <div class="home-welcome">
            <div class="home-welcome-text" style="background-image: url(slike/izrezak.jpg); height: 340px; ">
                <h1 style="margin: 0px;">Apoteka Medica</h1>
                
            </div>
       
        </div>

        <div>
            <img src="slike/laroche.jpg"; width="1500" height="500" />
        
        </div>
</div>                    

        
             
        </div>
        <div class="home-prodlist">
        <div class = "kontakt-area" id = "proizvodi">
                
                <div class = "col2-tekst">
                   </br></br>
                    <h2>KATEGORIJE:</h2>
                    <button class="lol" style="color:white;"><a href="ko??a.php" style="color:white;">Ko??a</a></button>
          <button class="lol" style="color:white;"><a href="kosa.php" style="color:white;">Kosa</a></button>
                </div>
      </div> 

  <?php if( isset($_SESSION['ime']) && !empty($_SESSION['ime']) )
  
           {?>
          <div class="row">
          <?php
           $result = $con->query("SELECT * FROM proizvod WHERE id>=1 && id<=3 ORDER BY id ASC"); 
           if($result->num_rows > 0){  
               while($row = $result->fetch_assoc()){ 
          ?>
          
          <div class="col-md-3">
          <form method="post" style="margin:auto 200px;">
          <div class="products">
          <img src="<?php echo $row["slika"] ?>" class="img-responsive"style="width:250px; height:300px;">
          <a href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>" class="btn btn-primary" style="background-color:#0d6e0d; border:none;width:172px; height:44px;line-height:30px;">Dodaj u ko??aricu</a>
          </div>
          </form>
      </div>
  <?php 
               }
            }
        ?>
        
        </div> 
        
            <?php }else{ 
          ?>
<div class="row1">
            <div class="column1">
               <img src='slike/slika1.jpg' alt="Tonik" style="width:100%">
               <!-- Button trigger modal -->
               <button type="button" class="btt" data-toggle="modal" data-target="#exampleModal1">A-Derma Exomega Control emolijentni pjenu??avi gel </button>
               <!-- Modal -->
                  <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">A-Derma Exomega Control emolijentni pjenu??avi gel </h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                         </div>
                       <div class="modal-body">
                            <div class="rowmod">
                               <div class = "columnmod">
                                  <div class= "columnmod-left">
                                    <img style =" width:150px; height: 300px;" src="slike/slika1.jpg"></br></br></br></br></br></br>
                          
                                    </div>
                        
                             
                                 </div>
                             
                              <div class="rowmod">
                                 <div class="columnmod-right">
                              
                                   <p class="columnmod-tekst">
                                     <ul>
                                       <li>
                                         <h2 style="font-size:13px">Opis:</h2>
                                         <span style="font-size:12px">Nje??no cisti suhu ko??u sklonu atopiji. Emolijentni pjenu??avi gel za suhu ko??u sklonu atopiji. Protiv grebanja. Dojen??ad, djeca, odrasli.</br> 
                                        
                                        </span>
                                       </li>
                                       <br>
                                       <li>
                                          </br>
                                         <h2 style="font-size:13px">Cijena:</h2>
                                         <span style="font-size:12px">59.10KM</span>
                                       </li>
                                     </ul>

                                   </p>
                                   </div>
                        
                               </div>
                            </div>
                          </div>
                       <div class="modal-footer">
                          <button type="button" class="btt" data-dismiss="modal">Zatvori</button>
                          <script>$(function () {
  $('[data-toggle="popover"]').popover()
})</script>
                          <button type="button" class="btn btn-secondary" style="background-color:#0d6e0d; width:88px;
    height:44px; border-radius:0;" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Morate se registrirati/prijaviti">
                          <i class="fa fa-shopping-cart"></i> Kupi</button>
                          
                       </div>
                       </div>
                     </div>
                   </div>
            </div>
            <div class="column1">
                <img src="slike/kosa2.jpg" alt="Dnevna" style="width:100%">
                <!-- Button trigger modal -->
               <button type="button" class="btt" data-toggle="modal" data-target="#exampleModal2">Vichy Dercos tretman ??ampon za umirivanje osjetljivog tjemena</button>
               <!-- Modal -->
                  <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Vichy Dercos tretman ??ampon za umirivanje osjetljivog tjemena</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                         </div>
                       <div class="modal-body">
                       <div class="rowmod">
                               <div class = "columnmod">
                                  <div class= "columnmod-left">
                                    <img style =" width:150px; height: 300px;" src="slike/kosa2.jpg"></br></br></br></br></br></br>
                          
                                  </div>                           
                                 </div>
                             
                              <div class="rowmod">
                                 <div class="columnmod-right">
                              
                                   <p class="columnmod-tekst">
                                     <ul>
                                       <li>
                                         <h2 style="font-size:13px">Opis:</h2>
                                         <span style="font-size:12px">Njegov kompleks protiv nastanka sebuma nastao je na temelju ekskluzivnog spoja 4 tenzioaktivna sastojka posabno odabrana i dozirana za smanjenje ??irenja sebuma du?? vlakna kose i za o??uvanje integriteta vlasi??ta te usporavanje zama????ivanja. Kosa je lagana i lako se ??e??lja.<br>
Njegova hipoalergena formula ne sadr??i paraben ni silikon.
U??inkovitost testirana pod dermatolo??kim nadzorom.

Lak??a kosa s vi??e volumena.
                                           </span>
                                       </li>

                                       <li>
                                          </br>
                                         <h2 style="font-size:13px">Cijena:</h2>
                                         <span style="font-size:12px">37.00KM</span>
                                       </li>
                                     </ul>

                                   </p>
                                   </div>
                        
                               </div>
                            </div>
                       </div>
                       <div class="modal-footer">
                          <button type="button" class="btt" data-dismiss="modal">Zatvori</button>
                          <script>$(function () {
  $('[data-toggle="popover"]').popover()
})</script>
                          <button type="button" class="btn btn-secondary" style="background-color:#0d6e0d; width:88px;
    height:44px; border-radius:0;" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Morate se registrirati/prijaviti">
                          <i class="fa fa-shopping-cart"></i> Kupi</button>
                       </div>
                       </div>
                     </div>
                   </div>
            </div>
            <div class="column1">
                <img src="slike/kosa1.jpg" alt="Nocna" style="width:100%">
                <!-- Button trigger modal -->
               <button type="button" class="btt" data-toggle="modal" data-target="#exampleModal3">Pilfud sprej 50 mg/ml lije??enje nasljednog gubitka</button>
               <!-- Modal -->
                  <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Pilfud sprej 50 mg/ml lije??enje nasljednog gubitka</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                         </div>
                       <div class="modal-body">
                       <div class="rowmod">
                               <div class = "columnmod">
                                  <div class= "columnmod-left">
                                    <img style =" width:150px; height: 300px;" src="slike/kosa1.jpg"></br></br></br></br></br></br>
                          
                                  </div>                           
                                 </div>
                             
                              <div class="rowmod">
                                 <div class="columnmod-right">
                              
                                   <p class="columnmod-tekst">
                                     <ul>
                                       <li>
                                         <h2 style="font-size:13px">Opis:</h2>
                                         <span style="font-size:12px">Pilfud 50 mg/ml otopina je lijek koji se primjenjuje za lije??enje nasljednog gubitka kose, ??estog u mu??karaca u dobi od 18 do 65 godina, budu??i da spre??ava daljnji gubitak kose i poma??e njen ponovni rast. Pilfud 50 mg/ml otopina sadr??i minoksidil, za kojeg se smatra da poma??e dotok krvi u folikule kose (??elije iz kojih izrastaju rastu dlake) na vlasi??tu.

Ovaj lijek namijenjen je za primjenu u mu??karaca u dobi izme??u 18 i 65 godina. <br>
Pilfud 50 mg/ml otopina najbolje djeluje u mu??karaca s gubitkom ili prorje??ivanjem kose na vrhu vlasi??ta.
Najbolji rezultati vjerovatno ??e se pokazati u mla??ih osobe, u kojih je gubitak kose prisutan tokom kratkog vremenskog perioda ili imaju malo podru??je ??elavosti.<br>
                                         -50 ml.
                                           </span>
                                       </li>
                                       <br>
                                       <li>
                                          </br>
                                         <h2 style="font-size:13px">Cijena:</h2>
                                         <span style="font-size:12px">36.50KM</span>
                                       </li>
                                     </ul>

                                   </p>
                                   </div>
                        
                                   </div>
                            </div>
                       </div>
                       <div class="modal-footer">
                          <button type="button" class="btt" data-dismiss="modal">Zatvori</button>
                          <script>$(function () {
  $('[data-toggle="popover"]').popover()
})</script>
                          <button type="button" class="btn btn-secondary" style="background-color:#ffffff; width:88px;
    height:44px; border-radius:0;" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Morate se registrirati/prijaviti">
                          <i class="fa fa-shopping-cart"></i> Kupi</button>
                       </div>
                       </div>
                     </div>
                   </div>
                </div>
                  <?php   } ?> 
       </div>
       </br></br>
        
        <div >
            <div class = "kontakt-area" id = "Informacije">
                
                       <div class = "col2-tekst">
                          </br></br>
                           <h2>KONTAKTIRAJTE NAS</h2>
                           <p>Obratite nam se za bilo kakve informacije.</p>
                       </div>
                       <div class="naru??i">
 <div style="background: transparent url(slike/naru??i.jpg) no-repeat;
 background-position: center center; background-size: cover; 
 height: 300px;"></div>
</div>
<div class="onama" id="onama"></br></br></br></br>
       
       <div class="row">
             <div class = "column">
                      <div class= "column-left">
                          <img style =" width:400px; height: 459px;" src="slike/mi.jpg"></br></br></br></br></br></br>
                         
                       </div>
                       
                            
                </div>
           <div class="row">
           <div class="column-right">
               <h3 style="text-align:center;" >O nama</h3>
               <p class="anthos">Na?? tim ??ine Velida Vra??o i D??ana Zlatar. </p>
               <p> Velida - student na Fakultetu za saobra??aj i komunikacije, smjer komunikacijske tehnologije. Prvi ciklus studija zavr??ila na odsjeku saobra??aj, smjer zrakoplovni saobra??aj, te stekla znanja iz oblasti zrakoplovnog saobra??aja i zra??ne plovidbe. </p>
               <p>D??ana - student na Fakultetu za saobra??aj i komunikacije, smjer Kompjuterske i informacijske tehnologije. Na drugom ciklusu studija usavr??ava znanja iz prodru??ja kompjuterskih i informacijskih tehnologija. </p> 
               <p>Veoma smo zainteresovane za ovaj projekat. Za temu online apoteke, pod nazivom Apoteka Medica smo se odlu??ile zbog lak??eg naru??ivanja proizvoda za njegu ko??e i kose i mogu??nosti pregleda sprecifikacija tog proizvoda. 
                 
               </p>
              <h3><a href="https://drive.google.com/file/d/1wvCfDQ5UQl5UIhV65Swl5yrrmaJKG0eW/view">Vizija projekta</h3> <br><br></a>
              <h3><a href="https://drive.google.com/file/d/1ARNvuFkvweH_pbXw2CyndPeSS4GX7DxM/view?usp=sharing"> Use Case dijagram</h3> <br><br></a>
              
            </div>
              </div>
</div>
       </div>


       
                         <div class="row2">
              <div class = "column2">
                       <div class= "column2-left">
                           <img style=" height: 75px; width: 150px;" src="slike/Medica.jpg">
                           <p>Apoteka Medica garantuje kvalitetu proizvoda kupljenih u na??em web shopu.</p> 
                           <p>Za vas smo odabrali vrhunsku ponudu dermokozmetike, dodataka prehrani, medicinskih proizvoda, te proizvoda za samolije??enje.
                             </p>
                        </div>
                        
                             
            </div>
            <div class="row2">
                     
                     <div class= "kont-podaci"  id = "kontakt">
                              <ul>
                                  <li>
                                     <div class="podaci">
                                         <i class="fa fa-home"></i>
                                         <h4>Adresa</h4>
                                         <span>Sarajevo, BiH</span>
                                      </div> 
                                   </li>
                                    </br>
                                  <li>
                                     <div class="podaci">
                                         <i class="fa fa-plane"></i>
                                         <h4>Email</h4>
                                         <span> velidavraco121@hotmail.com</span>
                                      </div> 
                                   </li>
                                   </br>
                                  <li>
                                     <div class="podaci">
                                         <i class="fa fa-phone"></i>
                                         <h4>Telefon</h4>
                                         <span> 0333333333</span>
                                     </div> 
                                   </li>   
                                   </br>

                                </ul> 
                         </div>
                  
                    </div>
               </div>
            </div>
            




        </div> 
        <hr class=h>
          <div class="footer">
             <p> Velida Vra??o, D??ana Zlatar</p>
          </div>
  
                
    </body>
</html>