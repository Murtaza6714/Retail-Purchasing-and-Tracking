<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
<title>Retail purchasing and tracking</title>
<link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@700&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<style>
    .nav-link{
        margin-right: 10px;
    }
    .nav-link:hover{
        background-color: white;
        border: 2px solid transparent;
        border-radius: 2px;
        transition: 0.4s ease;
    }
    .passive{
        background-color: white;
        border: 2px solid transparent;
        border-radius: 2px;
    }
    



</style>
</head>
<body>   
<?php
$flag=0;

  if(isset($_POST['button'])){
    
    echo "heloo";
    $con= mysqli_connect('localhost','root','','retail purchasing and tracking');
    echo "vvvsdi";
    if (!$con){
      die("connection to  this database failed due to".mysqli_connect_error());
        }
    echo "fesgsg";
    $productcategpry=$_POST['productcategory'];
    $productname=$_POST['productname'];
    $brandname=$_POST['brandname'];
    $file=$_POST['file'];
    echo $productname;

    $sql = "INSERT INTO `addproduct` (`ProductCategory`, `ProductName`, `BrandName`, `File`) VALUES ('$productcategpry', '$productname', '$brandname', '$file')";

    $result=$con->query($sql);

    if($result){
        $flag=1;
        }else{
        ?>
        <script> alert("details not submitted"); </script>
        <?php
    }
}

  ?>  
    <section >  
<h1 style="text-align: center; margin-top: 50px; margin-bottom: 50px; text-shadow: 4px 4px 7px lightblue ; font-family: 'Lemonada', cursive;">Retail Purchasing and Tracking</h1>
    
    </section>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">R.P.T</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">HOME<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link passive" href="#">ADD PRODUCT <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="ViewProduct.php">VIEW PRODUCT <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="Logout.php">LOGOUT<span class="sr-only">(current)</span></a>
              </li>
              </ul>
        </div>
      </nav>
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" style="float: top;" >
    <div class="carousel-item active">
      <img src="https://source.unsplash.com/user/erondu/2700x800" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/2700x800" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/WLUHO9A_xik/2700x800" class="d-block w-100" alt="..."  >
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      <form class="lg:w-2/6 md:w-1/2 bg-gray-200 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0" method="POST">
      <?php 
    if($flag==1){
    ?><div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Successfully Added</strong> Your details are succesfully added
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div><?php
    }?>   
      <h4 style="font-family: 'Lemonada', cursive;">Add a New Product</h4><br>    
          <div class="form-group">
          <label for="exampleFormControlSelect1">Select product category</label>
          <select class="form-control" id="exampleFormControlSelect1" name="productcategory">
            <option>Electronics</option>
            <option>Appliances</option>
            <option>Books</option>
            <option>Furnitures</option>
            <option>Automobiles</option>
          </select>
        </div>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Product name" name="productname" required>
    <br>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Brand name" name="brandname" required>
    <br>
    <input class="btn btn-success" type="submit" name="button">
        
    </form>
</body>
</html>