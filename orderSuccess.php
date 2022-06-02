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
           
          ?>
          <button class="logout" style="color:white;"><a href="adminlogin.php?logout='1'" style="color:white;">Odjava</a></button>

            
         <div class="logo">
             <a href="adminlogin.php">
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
        <div>
            <img src="slike/bijela.jpg"; width="1500" height="100" />
        
        </div>
<?php 
if(!isset($_REQUEST['id'])){ 
    header("Location: index.php"); 
} 
 
 
require_once 'config.php'; 
 
// Fetch order detalje iz baze 
$result = $con->query("SELECT r.*, k.ime, k.prezime, k.email, k.mobitel FROM narudzba as r LEFT JOIN korisnik as k ON k.id = r.kupac_id WHERE r.id = ".$_REQUEST['id']); 
 
if($result->num_rows > 0){ 
    $orderInfo = $result->fetch_assoc(); 
}else{ 
    header("Location: index.php"); 
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Status narudzbe</title>
<meta charset="utf-8">
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
</head>
<body>
<div class="container">
    <h1>Status narudžbe</h1>
    <div class="col-12">
        <?php if(!empty($orderInfo)){ ?>
            <div class="col-md-12">
                <div class="alert alert-success">Vaša narudžba je uspješna.</div>
            </div>
            
            <!-- Order status & shipping info -->
            <div class="row col-lg-12 ord-addr-info">
                <div class="hdr">Info narudžbe</div>
                <ul>
                <li><b>ID:</b> #<?php echo $orderInfo['id']; ?></li>
                <li><b>Total:</b> <?php echo ''.$orderInfo['grand_total'].' KM'; ?></li>
                <li><b>Datum:</b> <?php echo $orderInfo['created']; ?></li>
                <li><b>Ime:</b> <?php echo $orderInfo['ime'].' '.$orderInfo['prezime']; ?></li>
                <li><b>Email:</b> <?php echo $orderInfo['email']; ?></li>
                <li><b>Mobitel:</b> <?php echo $orderInfo['mobitel']; ?></li>
                </ul>
            </div>
            
            <!-- Order items -->
            <div class="row col-lg-12">
                <table class="table table-hover">
                <img src="slike/slika9.gif" style="width:100px; height:100px;float:right;">
                    <thead>
                        <tr>
                            <th>Proizvod</th>
                            <th>Cijena</th>
                            <th>Količina</th>
                            <th>Ukupan iznos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        // dohvati stavke narudzbe iz baze 
                        $result = $con->query("SELECT i.*, p.naziv, p.cijena FROM stavka_narudzbe as i LEFT JOIN proizvod as p ON p.id = i.proizvod_id WHERE i.narudzba_id = ".$orderInfo['id']); 
                        if($result->num_rows > 0){  
                            while($item = $result->fetch_assoc()){ 
                                $price = $item["cijena"]; 
                                $quantity = $item["kolicina"]; 
                                $sub_total = ($price*$quantity); 
                        ?>
                        <tr>
                            <td><?php echo $item["naziv"]; ?></td>
                            <td><?php echo ''.$price.' KM'; ?></td>
                            <td><?php echo $quantity; ?></td>
                            <td><?php echo ''.$sub_total.' KM'; ?></td>
                        </tr>
                        <?php } 
                        } ?>
                    </tbody>
                </table>
            </div>
        <?php } else{ ?>
        <div class="col-md-12">
            <div class="alert alert-danger">Vaša narudžba je neuspješna.</div>
        </div>
        <?php } ?>
    </div>
</div>
</body>
</html>
