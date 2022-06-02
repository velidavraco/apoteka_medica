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
                  <li><a href="adminpage.php"> Početna </a> </li>
                  <li><a href="add_product.php" > Dodaj proizvod </a></li>
                  <li><a href="orders.php" ><i class="fab fa-adn"></i> Narudžbe</a></li>
                  <li><a href="users.php" > Korisnici</a></li>
              

              </ul>
            </nav>
        </header>
        <div>
            <img src="slike/bijela.jpg"; width="1500" height="100" />
        
        </div>
<!DOCTYPE html>
<html lang="en">
  

<title>Dodavanje proizvoda</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
  
<body>
   
  
        <form action="insert.php" method="post">
        <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Dodaj proizvod </h1>
 </div><br>
              
              

  
            <label for="id">ID: </label>
 <input type="text" name="id" id="id" class="form-control"> <br>

 <label for="naziv"> Naziv proizvoda: </label>
 <input type="text" name="naziv" id="naziv" class="form-control"> <br>

 <label for="opis"> Opis: </label>
 <input type="text" name="opis" id="opis" class="form-control"> <br>

 <label for="cijena"> Cijena [KM]: </label>
 <input type="text" name="cijena" id="cijena" class="form-control"> <br>

 <label for="slika">Slika: </label>
 <input type="text" name="slika" id="slika" class="form-control"> <br>

 <label for="kolicina"> Količina: </label>
 <input type="text" name="kolicina"  id="kolicina" class="form-control"> <br>
 <button class="btn btn-success" type="submit" name="done"> Dodaj </button><br>
 
        </form>
    </center>
</body>
  
</html>