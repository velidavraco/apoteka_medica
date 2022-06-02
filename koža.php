<?php include ( "config.php" ); ?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="css/style1.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Koža</title>
    <style>
      .sidenav {
  height: 100%;
  width: 300px;
  position: fixed;
  top: 41px;
  left: 0;
  background-color:#0d9e0d;
  
  
  
}
.content {
  margin-left: 300px;
  padding-left: 20px;
}
.mt-50 {
    margin-top: 50px
}

.mb-50 {
    margin-bottom: 50px
}

.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, .125);
    border-radius: .1875rem
}

.card-img-actions {
    position: relative
}

.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
    text-align: center
}

.card-img {
    width: 350px
}


.bg-cart {
    background-color: grey;
    color: #fff
}

.bg-cart:hover {
    color: #fff
}


.bg-buy:hover {
    color: #fff
}

a {
    text-decoration: none !important
}
.btn{
    border: 5px solid rgb(3, 0, 0);
    background-color: #fff;
    border-radius: 15px 15px;
    padding: 10px 20px;
    font-size: 20px;
    font-family: "montserrat";
    cursor: pointer;
    margin: 10px;
    transition: 0.5s;
    position: relative;
    overflow: hidden;
}
.btn1,.btn2,.btn3{
    color:#000000;
}
.btn1:hover,.btn2:hover,.btn3:hover{
    color: rgb(255, 255, 255);
}


h1{
    background-color: rgba(230, 222, 231, 0.164);
    text-align: center;
}

.categories{
    background-color: #fff;
    width: 100%;
}

.categories .wrapper{
    width: 80%;
    margin: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    gap:25px;
    flex-direction: column;
    padding: 50px ;
}

.categories .wrapper .categories-container{
    display: flex;
    gap: 35px;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;

}

.categories .wrapper .categories-container .category{
    width: 250px;
    height: 250px;
    position: relative;
    overflow: hidden;
    border-radius: 100%;
    transition: .5s ease-out
}
.categories .wrapper .categories-container .category:hover{
    cursor: pointer;
}
.categories .wrapper .categories-container .category:hover img{
    transform:scale(1,2);
    transition: .5s ease-in
}
.categories .wrapper .categories-container .category::before{
    content: '';
    top:0;
    left:0;
    right:0;
    bottom:0;
    background-color: rgba(0, 0, 0, 0.267);
    position: absolute;
    z-index: 1;

}
.categories .wrapper .categories-container .category img{
    height: 100%;
    width: 100%;
    object-fit: cover;
    position: relative;

}

.categories .wrapper .categories-container .category .category-body{
    position:absolute;
    text-align: center;
    color: #fff;
    z-index:2;
    height:100%;
    width:100%;
    top:0;
    left:0;
    bottom:0;
    right:0;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    
}
.categories .wrapper .categories-container .category .category-body h4{
    font-size: 18px;
}
.categories .wrapper .categories-container .category .category-body span{
    font-size: .8rem;
}

.btn-show-all{
    display:block;
    padding: 10px 20px;
    border-radius: 8px;
    background-color: black;
    color: #fff;
    text-transform: uppercase;
    outline:none;
    border: 0;
    transition: .25s ease;
    margin-top: 30px;
}

.btn-show-all:hover{
    outline: none;
    border: 0;
    background-color: #0d9e0d;
}

.category-sub-title{
    text-transform: uppercase;
    color: var(--intech-theme-indigo);
    font-weight: 700;
    font-size: .3rem;

}

.category-title{
    text-transform: uppercase;
    font-size: 2rem;

}

.categories1{
    background-color: #fff;
    width: 20%;
}



.categories1 .wrapper1 .categories-container{
    display: flex;
    gap: 35px;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    
    
}

.categories1 .wrapper1 .categories-container .category1{
    width: 150px;
    height: 150px;
    position: relative;
    overflow: hidden;
    border-radius: 100%;
    transition: .5s ease-out
}

.categories1 .wrapper1 .categories-container .category1:hover{
    cursor: pointer;
}

.categories1 .wrapper1 .categories-container .category1:hover img{
    transform:scale(1,2);
    transition: .5s ease-in
}

.categories1 .wrapper1 .categories-container .category1::before{
    content: '';
    top:0;
    left:0;
    right:0;
    bottom:0;
    background-color: rgba(0, 0, 0, 0.267);
    position: absolute;
    z-index: 1;

}

.categories1 .wrapper1 .categories-container .category1 img{
    height: 100%;
    width: 100%;
    object-fit: cover;
    position: relative;

}

.categories1 .wrapper1 .categories-container .category1 .category-body{
    position:absolute;
    text-align: center;
    color: #fff;
    z-index:2;
    height:100%;
    width:100%;
    top:0;
    left:0;
    bottom:0;
    right:0;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.categories1 .wrapper1 .categories-container .category1 .category-body span{
    font-size: .8rem;
}
</style>
</head>

<body>
<header style="background-color:#0d9e0d;height:60px;">
<?php if( isset($_SESSION['ime']) && !empty($_SESSION['ime']) )
           {
            ?>
    
    
    

  <div class="col-9" style="">
    <h3 style="padding-left:100px;text-align:center;color:white;font-family:verdana;font-size:300%"> Njega osjetljive kože</h3>
  </div>
</div>
<button class="btn-show-all" type="button" onclick="window.open('index.php','_self');">Natrag</button><br>
<div class="categories1">
            <h3>KATEGORIJE: <h3>
            <div class="wrapper1">
            <h6 class="category-title"> </h6><br>
            <h6 class="category-title"></h6>
            <h3></h3>
            <h1 class="category-sub-title"></h1>

            <div class="categories-container">
                <div class="category1">

                    <img src="slike/koža.jpg" alt="">
                    <div class="category-body">
                        <span> <button class="btn-show-all" type="button" onclick="window.open('koža.php','_self');">koža</button><span>
                    </div>
                </div>

                <div class="category1">

                    <img src="slike/kosa.jpg" alt="">
                    <div class="category-body">
                        <span> <button class="btn-show-all" type="button" onclick="window.open('kosa.php','_self');">Kosa</button><span>
                    </div>
           </div>

                

            </div>
            </div>
        </div>
<?php }else{ ?> 
  <div class="col-9" style="">
    <h3 style="padding-left:100px;text-align:center;color:white;font-family:verdana;font-size:300%">Njega osjetljive kože</h3>
  </div>
</div>
<button class="btn-show-all" type="button" onclick="window.open('index.php','_self');">Natrag</button><br>
<div class="categories1">
            <h3>KATEGORIJE<H3>
            <div class="wrapper1">
            <h6 class="category-title"> </h6><br>
            <h6 class="category-title"></h6>
            <h3></h3>
            <h1 class="category-sub-title"></h1>

            <div class="categories-container">
                <div class="category1">

                    <img src="slike/koža.jpg" alt="">
                    <div class="category-body">
                        <span> <button class="btn-show-all" type="button" onclick="window.open('koža.php','_self');">Koža</button><span>
                    </div>
                </div>

                <div class="category1">

                    <img src="slike/kosa.jpg" alt="">
                    <div class="category-body">
                        <span> <button class="btn-show-all" type="button" onclick="window.open('kosa.php','_self');">Kosa</button><span>
                    </div>
                </div>

                
              
                
            

                

            </div>
            </div>
        </div>

<?php } ?> 
</header>

<div class="content">
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
 <div class="container d-flex justify-content-center mt-50 mb-50">
    <div class="row">
        <div class="col-md-4 mt-2" style="width:320px; height:300px;">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions"> <img src="<?php echo $row["slika"] ?>" class="img-responsive"style="width:250px; height:300px;" class="card-img img-fluid" width="96" height="350" alt=""> </div>
                </div>
                <div class="card-body bg-light text-center">
                    <div class="mb-2">
                        <h6 class="font-weight-semibold mb-2"> <a href="#" class="text-default mb-2" data-abc="true" style="color:black;">NAZIV: "<?php echo $row["naziv"] ?>"</a> </h6> <a href="#" class="text-muted" data-abc="true">TIP:"<?php echo $row["opis"] ?>"</a>
                    </div>
                    <h6 class="mb-0 font-weight-semibold">CIJENA: "<?php echo $row["cijena"] ?>" KM</h6>
                    <div> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> </div><br>
                    <a href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>" class="btn btn-primary" style="background-color:#0d9e0d; border:none;width:172px; height:44px;line-height:30px;">Dodaj u listu</a>
                </div>
            </div>
        </div>
       

    </div>
    </form>
</div>
</div>
 
<?php 
      }
   }
?>

</div> 
 
   <?php }else{ 
 ?>
<div class="container d-flex justify-content-center mt-50 mb-50">
    <div class="row">
        <div class="col-md-4 mt-2" style="width:320px; height:300px;">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions"> <img src="slike/slika1.jpg" style="width:250px; height:300px;" class="card-img img-fluid" width="96" height="350" alt=""> </div>
                </div>
                <div class="card-body bg-light text-center">
                    <div class="mb-2">
                        <h6 class="font-weight-semibold mb-2"> <a href="#" class="text-default mb-2" data-abc="true" style="color:black;">A-Derma Exomega Control emolijentni pjenušavi gel </a> </h6> <a href="#" class="text-muted" data-abc="true"></a>
                    </div>
                    <h6 class="mb-0 font-weight-semibold">CIJENA:59.90 KM</h6>
                    <div> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> </div>
                    <div class="text-muted mb-3"></div> 
                    <script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
</script>
                    <button type="button" class="btn bg-cart" style=" background-color:#0d9e0d; border:none;width:172px; height:44px;line-height:30px;" data-toggle="popover" title="Morate se prijaviti/registrirati"><i class="fa fa-cart-plus mr-2"></i> Dodaj u listu</button>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-2" style="width:320px; height:280px;">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions"> <img src="slike/koza2.jpg" style="width:250px; height:300px;" class="card-img img-fluid" width="96" height="350" alt=""> </div>
                </div>
                <div class="card-body bg-light text-center">
                    <div class="mb-2">
                        <h6 class="font-weight-semibold mb-2"> <a href="#" class="text-default mb-2" data-abc="true" style="color:black;">CeraVe SA Smoothing Cleanser 236 ml</a> </h6> <a href="#" class="text-muted" data-abc="true"></a>
                    </div>
                    <h6 class="mb-0 font-weight-semibold">CIJENA: 19.50 KM</h6>
                    <div> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> </div>
                    <div class="text-muted mb-3"></div> 
                    <script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
</script>
                    <button type="button"  class="btn bg-cart"  style="background-color:#0d9e0d; border:none;width:172px; height:44px;line-height:30px;" data-toggle="popover" title="Morate se prijaviti/registrirati"><i class="fa fa-cart-plus mr-2"></i> Dodaj u listu</button>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-2" style="width:320px; height:300px;">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions"> <img src="slike/koza3.jpg" style="width:250px; height:300px;" class="card-img img-fluid" width="96" height="350" alt=""> </div>
                </div>
                <div class="card-body bg-light text-center">
                    <div class="mb-2">
                        <h6 class="font-weight-semibold mb-2"> <a href="#" class="text-default mb-2" data-abc="true" style="color:black;">Noreva IKLEN+ Pure - C - Reverse noćna krema 50 ml</a> </h6> <a href="#" class="text-muted" data-abc="true"></a>
                    </div>
                    <h6 class="mb-0 font-weight-semibold">CIJENA: 90.50 KM</h6>
                    <div> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> </div>
                    <div class="text-muted mb-3"></div>
                    <script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
</script>
                     <button type="button" class="btn bg-cart" style="background-color:#0d9e0d; border:none;width:172px; height:44px;line-height:30px;" data-toggle="popover" title="Morate se prijaviti/registrirati"><i class="fa fa-cart-plus mr-2"></i> Dodaj u listu</button>
                </div>
            </div>
        </div>

    </div>
</div>
<?php   } ?>
</div>
    


  
  
    
</body>
</html>