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

            }  
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

<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
<tr>
<th>ID</th>
<th>Ime </th>
<th>Prezime</th>
<th>Mobitel</th>
<th>Adresa</th>
</tr>
</thead>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prodaja";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = 'SELECT id, ime, prezime, mobitel, adresa from korisnik';
if (mysqli_query($conn, $sql)) {
echo "";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$count=1;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) { ?>
<tbody>
<tr>
<th>
<?php echo $row['id']; ?>
</th>
<td>
<?php echo $row['ime']; ?>
</td>
<td>
<?php echo $row['prezime']; ?>
</td>
<td>
<?php echo $row['mobitel']; ?>
</td>
<td>
<?php echo $row['adresa']; ?>
<td><a href="delete_users.php?" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash-o" style="font-size:16px"></i></a> 
																									
</td>
</tr>
</tbody>
<?php
$count++;
}
} else {
echo '0 results';
}
?>
</table>